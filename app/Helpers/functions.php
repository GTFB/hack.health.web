<?php

use App\Http\Requests\ApiRequest;
use App\Role;
use App\Media;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;
use App\Page;
use Illuminate\Support\Facades\Auth;
use App\Altrp\Facades\CacheService;

/**
 * Get the script possible URL base
 *
 * @return mixed
 */
function getRawBaseUrl()
{
  // Get the Laravel's App public path name
  $laravelPublicPath = trim( public_path(), '/' );
  $laravelPublicPathLabel = last( explode( '/', $laravelPublicPath ) );

  // Get Server Variables
  $httpHost = ( trim( request()->server( 'HTTP_HOST' ) ) != '' ) ? request()->server( 'HTTP_HOST' ) : ( isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '' );
  $requestUri = ( trim( request()->server( 'REQUEST_URI' ) ) != '' ) ? request()->server( 'REQUEST_URI' ) : ( isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '' );

  // Clear the Server Variables
  $httpHost = trim( $httpHost, '/' );
  $requestUri = trim( $requestUri, '/' );
  $requestUri = ( mb_substr( $requestUri, 0, strlen( $laravelPublicPathLabel ) ) === $laravelPublicPathLabel ) ? '/' . $laravelPublicPathLabel : '';

  // Get the Current URL
  $currentUrl = ( ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ) ? 'https://' : 'http://' ) . $httpHost . strtok( $requestUri, '?' );
  $currentUrl = head( explode( '/' . admin_uri(), $currentUrl ) );

  // Get the Base URL
  $baseUrl = head( explode( '/install', $currentUrl ) );
  $baseUrl = rtrim( $baseUrl, '/' );

  return $baseUrl;
}


/**
 * @param string $path
 * @return string
 */
function admin_uri( $path = '' )
{
  $path = str_replace( url( config( 'altrp.admin.route_prefix', 'admin' ) ), '', $path );
  $path = ltrim( $path, '/' );

  if ( ! empty( $path ) ) {
    $path = config( 'altrp.admin.route_prefix', 'admin' ) . '/' . $path;
  } else {
    $path = config( 'altrp.admin.route_prefix', 'admin' );
  }

  return $path;
}

function updateIsAvailable()
{

  if ( env( 'APP_ENV' ) === 'local' ) {
    return false;
  }
  // Check if the '.env' file exists
  if ( ! file_exists( base_path( '.env' ) ) ) {
    return false;
  }

  $updateIsAvailable = false;

  // Get eventual new version value & the current (installed) version value
  $lastVersion = getLatestVersion();
  $currentVersion = getCurrentVersion();

  // Check the update
  if ( version_compare( $lastVersion, $currentVersion, '>' ) ) {
    $updateIsAvailable = true;
  }

  return $updateIsAvailable;
}

/**
 * Redirect (Prevent Browser cache)
 *
 * @param $url
 * @param int $code (301 => Moved Permanently | 302 => Moved Temporarily)
 */
function headerLocation( $url, $code = 301 )
{
  header( "Cache-Control: no-store, no-cache, must-revalidate, max-age=0" );
  header( "Cache-Control: post-check=0, pre-check=0", false );
  header( "Pragma: no-cache" );
  header( "Location: " . $url, true, $code );

  exit();
}

/**
 * Get file/folder permissions.
 *
 * @param $path
 * @return string
 */
function getPerms( $path )
{
  return substr( sprintf( '%o', fileperms( $path ) ), -4 );
}

/**
 * Check if the app is installed
 *
 * @return bool
 */
function appIsInstalled()
{
  // Check if the app's installation files exist

  if( env( 'APP_ENV' ) === 'local' ){
    return true;
  }
  if ( ! appInstallFilesExist() ) {
    return false;
  }

  // Check Installation Setup
  $properly = true;
  try {
    // Check if all database tables exists
    $namespace = 'App\\Models\\';
    $modelsPath = app_path( 'Models' );
    $modelFiles = array_filter( glob( $modelsPath . DIRECTORY_SEPARATOR . '*.php' ), 'is_file' );

    if ( count( $modelFiles ) > 0 ) {
      foreach ( $modelFiles as $filePath ) {
        $filename = last( explode( DIRECTORY_SEPARATOR, $filePath ) );
        $modelname = head( explode( '.', $filename ) );

        if (
          ! \Illuminate\Support\Str::contains( strtolower( $filename ), '.php' )
          || \Illuminate\Support\Str::contains( strtolower( $modelname ), 'base' )
        ) {
          continue;
        }

        eval( '$model = new ' . $namespace . $modelname . '();' );
        if ( ! \Illuminate\Support\Facades\Schema::hasTable( $model->getTable() ) ) {
          $properly = false;
        }
      }
    }

  } catch ( \PDOException $e ) {
    $properly = false;
  } catch ( \Exception $e ) {
    $properly = false;
  }

  return $properly;
}

/**
 * Check if the app's installation files exist
 *
 * @return bool
 */
function appInstallFilesExist()
{
  // Check if the '.env' and 'storage/installed' files exist

  if ( file_exists( base_path( '.env' ) ) && file_exists( storage_path( 'installed' ) ) ) {
    return true;
  }

  return false;
}

/**
 * Check if function is enabled
 *
 * @param $name
 * @return bool
 */
function func_enabled( $name )
{
  try {
    $disabled = array_map( 'trim', explode( ',', ini_get( 'disable_functions' ) ) );

    return ! in_array( $name, $disabled );
  } catch ( \Exception $ex ) {
    return false;
  }
}

/**
 * Check if json string is valid
 *
 * @param $string
 * @return bool
 */
function isValidJson( $string )
{
  try {
    json_decode( $string );
  } catch ( \Exception $e ) {
    return false;
  }

  return ( json_last_error() == JSON_ERROR_NONE );
}

/**
 * @param $array
 * @return mixed|string
 */
function httpBuildQuery( $array )
{
  if ( ! is_array( $array ) && ! is_object( $array ) ) {
    return $array;
  }

  $queryString = http_build_query( $array );
  $queryString = str_replace( [ '%5B', '%5D' ], [ '[', ']' ], $queryString );

  return $queryString;
}


/**
 * Get the app latest version
 *
 * @return \Illuminate\Config\Repository|mixed|string
 */
function getLatestVersion()
{
  return checkAndUseSemVer( config( 'app.altrp_version' ) );
}

/**
 * Check and use semver version num format
 *
 * @param $version
 * @return string
 */
function checkAndUseSemVer( $version )
{
  $semver = '0.0.0';
  if ( ! empty( $version ) ) {
    $numPattern = '([0-9]+)';
    if ( preg_match( '#^' . $numPattern . '\.' . $numPattern . '\.' . $numPattern . '$#', $version ) ) {
      $semver = $version;
    } else {
      if ( preg_match( '#^' . $numPattern . '\.' . $numPattern . '$#', $version ) ) {
        $semver = $version . '.0';
      } else {
        if ( preg_match( '#^' . $numPattern . '$#', $version ) ) {
          $semver = $version . '.0.0';
        } else {
          $semver = '0.0.0';
        }
      }
    }
  }

  return $semver;
}

/**
 * Get the current version value
 *
 * @return null|string
 */
function getCurrentVersion()
{
  // Get the Current Version
  $version = null;
  if ( \Jackiedo\DotenvEditor\Facades\DotenvEditor::keyExists( 'APP_VERSION' ) ) {
    try {
      $version = \Jackiedo\DotenvEditor\Facades\DotenvEditor::getValue( 'APP_VERSION' );
    } catch ( \Exception $e ) {
      $version = '0.0.0';
    }
  }
  $version = checkAndUseSemVer( $version );

  return $version;
}

/**
 * ???????????????????? ?????????? ?????????????? ?? ?????????????????????? ???? ?????????? ????????????????????
 * @param string $path
 * @param string $domain
 * @return string
 */
function altrp_asset( $path, $domain = 'http://localhost:3002/' )
{
  if ( env( 'APP_ENV', 'production' ) !== 'local' ) {
    return asset( $path ) . '?' . env( 'APP_VERSION' );
  }
  $client = new \GuzzleHttp\Client();
  try {
    $client->get( $domain )->getStatusCode();
  } catch ( Exception $e ) {
    return asset( $path ) . '?' . env( 'APP_VERSION' );
  }
  if( $domain === 'http://localhost:3001/' ){
    return $domain . 'src/bundle.front-app.js';
  }
  return $domain . 'src/bundle.js';
}

/**
 * @param string $setting_name
 * @param string $default
 * @return string
 */
function get_altrp_setting( $setting_name, $default = '' )
{
  /**
   * @var \App\Services\AltrpSettingsService $settings_service
   */
  $settings_service = app( 'App\Services\AltrpSettingsService' );
  return $settings_service->get_setting_value( $setting_name, $default );

}

function get_logo_url(){
  return json_decode( env( 'ALTRP_SETTING_ADMIN_LOGO' ), true )['url'];
}

/**
 * ?????????????????? ??????????????, ?????????? ???????????????? ?????????????? ?? ????????????????????
 * @param string $sql
 * @param array $bindings
 * @param array $sql_editor_params
 * @param ApiRequest $request
 * @return array
 */
function selectForSQLEditor( $sql, $bindings, $sql_editor_params, ApiRequest $request ){

  $_sql_order_by = '';
  $_sql_and_filters = '';
  $_sql_filters = '';
  $_sql_detail_filters = '';
  $_sql_detail_and_filters = '';

  if( $request->get( 'filters' ) ){
    $_filters = json_decode( $request->get( 'filters' ), true );

    if( strpos( $sql, 'ALTRP_FILTERS' ) !== false ){
      $_sql_filters = 'WHERE';
      foreach ( $_filters as $key => $value ) {
        $_sql_filters .= ' AND `' . $key . '` LIKE "%' . $value . '%" ';
      }
    }
    if( strpos( $sql, 'ALTRP_AND_FILTERS' ) !== false ) {
      $_sql_and_filters = '';
      foreach ( $_filters as $key => $value ) {
        $_sql_and_filters .= ' AND `' . $key . '` LIKE "%' . $value . '%" ';
      }
    }
      if( strpos( $sql, 'ALTRP_DETAIL_FILTERS' ) !== false ) {
          $_detail_filter_params = getDetailQueryValues($sql, 'ALTRP_DETAIL_FILTERS');

          $_detail_filter_conditionals = [];
          foreach ( $_filters as $key => $value ) {
              if(isset($_detail_filter_params[$key])) {
                  $_detail_filter_params[$key] = str_replace(".", "`.`", $_detail_filter_params[$key]);
                  $_detail_filter_conditionals[] = ' `' . $_detail_filter_params[$key] . '` LIKE "%' . $value . '%" ';
              }
          }

          if(count($_detail_filter_conditionals) > 0) {
              $_sql_detail_filters = " WHERE ";
          }

          $_sql_detail_filters .= implode(" AND ", $_detail_filter_conditionals);
      }
      if( strpos( $sql, 'ALTRP_DETAIL_AND_FILTERS' ) !== false ) {
          $_detail_and_filter_params = getDetailQueryValues($sql, 'ALTRP_DETAIL_AND_FILTERS');

          $_detail_and_filter_conditionals = [];
          foreach ( $_filters as $key => $value ) {
              if(isset($_detail_and_filter_params[$key])) {
                  $_detail_and_filter_params[$key] = str_replace(".", "`.`", $_detail_and_filter_params[$key]);
                  $_detail_and_filter_conditionals[] = ' `' . $_detail_and_filter_params[$key] . '` LIKE "%' . $value . '%" ';
              }
          }

          if(count($_detail_and_filter_conditionals) > 0) {
              $_sql_detail_and_filters = " AND ";
          }

          $_sql_detail_and_filters .= implode(" AND ", $_detail_and_filter_conditionals);
      }
  }

  if( $request->get( 'order' ) && $request->get( 'order_by' ) ){

      $_sql_order_by = ' ORDER BY `' . $request->get( 'order_by') . '`' . ( $request->get( 'order' ) === 'DESC' ? ' DESC' : ' ');

    if( strpos( $sql, 'ALTRP_DETAIL_FILTERS' ) !== false ) {
        $_detail_filter_params = getDetailQueryValues($sql, 'ALTRP_DETAIL_FILTERS');

        if(isset($_detail_filter_params[$request->get( 'order_by')])) {
            $_sql_order_by = ' ORDER BY ' . $_detail_filter_params[$request->get( 'order_by')] . '' . ( $request->get( 'order' ) === 'DESC' ? ' DESC' : ' ');
        }
    }
    else if(strpos( $sql, 'ALTRP_DETAIL_AND_FILTERS' ) !== false) {
        $_detail_and_filter_params = getDetailQueryValues($sql, 'ALTRP_DETAIL_AND_FILTERS');

        if(isset($_detail_and_filter_params[$request->get( 'order_by')])) {
            $_sql_order_by = ' ORDER BY ' . $_detail_and_filter_params[$request->get( 'order_by')] . '' . ( $request->get( 'order' ) === 'DESC' ? ' DESC' : ' ');
        }
    }

    $sql .= $_sql_order_by;
  }



  $sql = str_replace( 'ALTRP_FILTERS', $_sql_filters, $sql ) ;

  $sql = str_replace( 'ALTRP_AND_FILTERS', $_sql_and_filters, $sql ) ;

  $sql = preg_replace( "/'?(ALTRP_DETAIL_FILTERS)(:[a-z0-9_,.:]+)?'?/", $_sql_detail_filters, $sql ) ;

  $sql = preg_replace( "/'?(ALTRP_DETAIL_AND_FILTERS)(:[a-z0-9_,.:]+)?'?/", $_sql_detail_and_filters, $sql ) ;

  return [ 'data' => DB::select( $sql, $bindings ) ];
}

function getDetailQueryValues($query, $filter) {

    $filter .= ":";
    $_detail_filter = Str::after($query, $filter);


    $_detail_filter = Str::before($_detail_filter, ' ');

    $_detail_filter_array = explode(':',$_detail_filter);
    $_detail_filter_params = [];

    foreach ($_detail_filter_array as $param) {
        $line = explode(',',$param);
        $_detail_filter_params[$line[0]] = $line[1];
    }

    return $_detail_filter_params;
}

function getFilterValues() {

}

/**
 * ???????????? true, ???????? ???????????????????????? ??????????, false - ?? ?????????????????? ??????????????
 * @return boolean
 */
function isAdmin(){
  /**
   * @var User $user
   */
  $user = auth()->user();
  if( ! auth()->user() ){
    return false;
  }
  return $user->hasRole( 'admin' );
}

function getCurrentEnv(){
    return App\Helpers\Classes\CurrentEnvironment::getInstance();
}

function getFavicons() {
    if(env("ALTRP_CUSTOM_ICON")) {
        $icons = [];
        $path = Storage::url("media/favicons");
        //ico
        array_push($icons, "<link type='image/x-icon' rel='shortcut icon' href='$path/favicon.ico'>");

        //png
        $sizes = [16, 32, 96, 120, 192];
        foreach ($sizes as $size) {
            $href = $path ."/" .$size ."_favicon.png";
            $size_png = $size ."x" .$size;
            array_push($icons, "<link type='image/png' sizes='$size_png' rel='icon' href='$href'>");
        }

        //apple png
        $sizes_apple = [57, 60, 72, 76, 114, 120, 144, 152, 180];

        foreach ($sizes_apple as $size) {
            $href = $path ."/" .$size ."_favicon.png";
            $size_png = $size ."x" .$size;
            array_push($icons, "<link type='image/png' sizes='$size_png' rel='apple-touch-icon' href='$href'>");
        }

        $links = "";

        foreach ($icons as $icon) {
            $links = $links . $icon;
        }

        return $links;
    }
}
/**
 * ???????????????? ???????????????????????? ???????????????????? ???? ???????????? ???? data (CurrentEnvironment)
 * @param string $template
 * @param mixed $data
 * @return string|string[]
 */
function setDynamicData($template, $data)
{
    try {
        if ($data) {
            preg_match_all("#\{\{(?<path>(.*?)+)\}\}#", $template, $matches);
            $matches = $matches['path'];

            foreach ($matches as $path) {
                $item = data_get($data, $path);
                $template = str_replace("{{{$path}}}", $item, $template);
            }
        }
    } catch (\Exception $e){
        Log::info($e->getMessage());
    }
    return $template;
}

/**
 * ???????????????????? ???????? ??????????????
 * @param string $html
 * @return boolean
 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
function saveCache( $html, $page_id ) {

  if ( ! $html ) {
    return false;
  }
  $url = $_SERVER['REQUEST_URI'];

  // $html = minificationHTML($html);
  // $html = minifyHTML($html);
  $hash = md5($url . $html);

  $cachePath = storage_path() . '/framework/cache/pages';

  File::ensureDirectoryExists( $cachePath, 0775);

  if ( ! File::exists($cachePath . '/relations.json') ) {
    File::put($cachePath . '/relations.json', '{}');
  }

  $relationsJson = File::get($cachePath . '/relations.json');
  $relations = json_decode($relationsJson, true);

  if ( ! is_array($relations) ) {
    File::put($cachePath . '/relations.json', '{}');
    $relations = [];
  }

  $newRelation = [
    'hash' => $hash,
    "url" => $url,
    "page_id" => $page_id
  ];

  $key = false;
  foreach ($relations as $relation) {
    if ($relation['hash'] === $hash) {
      $key = true;
      break;
    }
  }

  if (!$key) {
    array_push($relations, $newRelation);
  }

  $relations = json_encode($relations);

  File::put($cachePath . '/relations.json', $relations);
  File::put($cachePath . '/' . $hash, $html);

  return true;
}


function minifyHTML($html) {

  // Settings
  return $html;
  $compress_css = true;
  $compress_js = true;
  $remove_comments = true;

  $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
  preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);

  $overriding = false;
  $raw_tag = false;

  // Variable reused for output
  $html = '';

  foreach ($matches as $token) {
    $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;

    $content = $token[0];

    if (is_null($tag)) {
      if ( !empty($token['script']) ) {
        $strip = $compress_js;
      }
      else if ( !empty($token['style']) ) {
        $strip = $compress_css;
      }
      else if ($content == '<!--wp-html-compression no compression-->') {
        $overriding = !$overriding;

        // Don't print the comment
        continue;
      }
      else if ($remove_comments) {
        if (!$overriding && $raw_tag != 'textarea') {
          // Remove any HTML comments, except MSIE conditional comments
          $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
        }
      }
    }
    else {
      if ($tag == 'pre' || $tag == 'textarea') {
        $raw_tag = $tag;
      }
      else if ($tag == '/pre' || $tag == '/textarea') {
        $raw_tag = false;
      }
      else {
        if ($raw_tag || $overriding) {
          $strip = false;
        }
        else {
          $strip = true;

          // Remove any empty attributes, except:
          // action, alt, content, src
          $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);

          // Remove any space before the end of self-closing XHTML tags
          // JavaScript excluded
          $content = str_replace(' />', '/>', $content);
        }
      }
    }

    if ($strip) {
      $content = removeWhiteSpace($content);
    }

    $html .= $content;
  }

  return $html;
}

function removeWhiteSpace($str) {
  $str = str_replace("\t", ' ', $str);
  $str = str_replace("\n",  '', $str);
  $str = str_replace("\r",  '', $str);

  while (stristr($str, '  ')) {
    $str = str_replace('  ', ' ', $str);
  }

  return $str;
}

function saveTemplateCache( $json, $template_id ) {

  if (!$json || !$template_id) {
    return false;
  }

  $hash = md5($json);

  $cachePath = storage_path() . '/framework/cache/templates';

  File::ensureDirectoryExists( $cachePath, 0775);

  if ( ! File::exists($cachePath . '/relations.json') ) {
    File::put($cachePath . '/relations.json', '{}');
  }

  $relationsJson = File::get($cachePath . '/relations.json');
  $relations = json_decode($relationsJson, true);

  if ( ! is_array($relations) ) {
    File::put($cachePath . '/relations.json', '{}');
    $relations = [];
  }

  $newRelation = [
    'hash' => $hash,
    'template_id' => $template_id
  ];

  $key = false;
  foreach ($relations as $relation) {
    if ($relation['hash'] === $hash) {
      $key = true;
      break;
    }
  }

  if (!$key) {
    array_push($relations, $newRelation);
  }

  $relations = json_encode($relations);

  File::put($cachePath . '/relations.json', $relations);
  File::put($cachePath . '/' . $hash, $json);

  return true;
}

function clearAllCache() {
  $cachePath = storage_path() . '/framework/cache/pages';
  if( File::exists( storage_path() . '/framework/cache/pages' ) ){
    File::cleanDirectory( storage_path() . '/framework/cache/pages' );
    File::put($cachePath . '/relations.json', '{}');
  }
  $pages = Page::all();
  foreach($pages as $page ){
    Cache::delete( 'areas_' . $page->id );
  }

  return true;
}

/**
 * @param $page_id
 * @return bool
 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
 * @throws \Psr\SimpleCache\InvalidArgumentException
 */
function clearPageCache( $page_id ) {

  $cachePath = storage_path() . '/framework/cache/pages';

  if ( !File::exists($cachePath . '/relations.json') ) {
    File::put($cachePath . '/relations.json', '{}');
  }

  $relationsJson = File::get($cachePath . '/relations.json');
  $relations = json_decode($relationsJson, true);

  if ( ! is_array($relations) ) {
    File::put($cachePath . '/relations.json', '{}');
    $relations = [];
  }

  foreach ($relations as $key => $relation) {
    if (isset($relation['page_id']) && $relation['page_id'] === $page_id) {
      if ( File::exists($cachePath . '/' . $relation['hash']) ) {
        File::delete($cachePath . '/' . $relation['hash']);
      }
      unset($relations[$key]);
    }
  }

  $relations = json_encode($relations);
  File::put($cachePath . '/relations.json', $relations);

  Cache::delete( 'areas_' . $page_id );

  return true;
}


/**
 * ?????????????????????? HTML
 * @param string $html
 * @return null|string|string[]
 */
function minificationHTML($input) {
    if(trim($input) === "") return $input;
    // Remove extra white-space(s) between HTML attribute(s)
    $input = preg_replace_callback('#<([^\/\s<>!]+)(?:\s+([^<>]*?)\s*|\s*)(\/?)>#s', function($matches) {
        return '<' . $matches[1] . preg_replace('#([^\s=]+)(\=([\'"]?)(.*?)\3)?(\s+|$)#s', ' $1$2', $matches[2]) . $matches[3] . '>';
    }, str_replace("\r", "", $input));
    // Minify inline CSS declaration(s)
    if(strpos($input, ' style=') !== false) {
        $input = preg_replace_callback('#<([^<]+?)\s+style=([\'"])(.*?)\2(?=[\/\s>])#s', function($matches) {
            return '<' . $matches[1] . ' style=' . $matches[2] . minify_css($matches[3]) . $matches[2];
        }, $input);
    }
    if(strpos($input, '</style>') !== false) {
      $input = preg_replace_callback('#<style(.*?)>(.*?)</style>#is', function($matches) {
        return '<style' . $matches[1] .'>'. minify_css($matches[2]) . '</style>';
      }, $input);
    }
    if(strpos($input, '</script>') !== false) {
      $input = preg_replace_callback('#<script(.*?)>(.*?)</script>#is', function($matches) {
        return '<script' . $matches[1] .'>'. minify_js($matches[2]) . '</script>';
      }, $input);
    }

    return preg_replace(
        array(
            // t = text
            // o = tag open
            // c = tag close
            // Keep important white-space(s) after self-closing HTML tag(s)
            '#<(img|input)(>| .*?>)#s',
            // Remove a line break and two or more white-space(s) between tag(s)
            '#(<!--.*?-->)|(>)(?:\n*|\s{2,})(<)|^\s*|\s*$#s',
            '#(<!--.*?-->)|(?<!\>)\s+(<\/.*?>)|(<[^\/]*?>)\s+(?!\<)#s', // t+c || o+t
            '#(<!--.*?-->)|(<[^\/]*?>)\s+(<[^\/]*?>)|(<\/.*?>)\s+(<\/.*?>)#s', // o+o || c+c
            '#(<!--.*?-->)|(<\/.*?>)\s+(\s)(?!\<)|(?<!\>)\s+(\s)(<[^\/]*?\/?>)|(<[^\/]*?\/?>)\s+(\s)(?!\<)#s', // c+t || t+o || o+t -- separated by long white-space(s)
            '#(<!--.*?-->)|(<[^\/]*?>)\s+(<\/.*?>)#s', // empty tag
            '#<(img|input)(>| .*?>)<\/\1>#s', // reset previous fix
            '#(&nbsp;)&nbsp;(?![<\s])#', // clean up ...
            '#(?<=\>)(&nbsp;)(?=\<)#', // --ibid
            // Remove HTML comment(s) except IE comment(s)
            '#\s*<!--(?!\[if\s).*?-->\s*|(?<!\>)\n+(?=\<[^!])#s'
        ),
        array(
            '<$1$2</$1>',
            '$1$2$3',
            '$1$2$3',
            '$1$2$3$4$5',
            '$1$2$3$4$5$6$7',
            '$1$2$3',
            '<$1$2',
            '$1 ',
            '$1',
            ""
        ),
    $input);
}

// CSS Minifier
function minify_css($input) {
    if(trim($input) === "") return $input;
    return preg_replace(
        array(
            // Remove comment(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
            // Remove unused white-space(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
            // Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
            '#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
            // Replace `:0 0 0 0` with `:0`
            '#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
            // Replace `background-position:0` with `background-position:0 0`
            '#(background-position):0(?=[;\}])#si',
            // Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
            '#(?<=[\s:,\-])0+\.(\d+)#s',
            // Minify string value
            '#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
            '#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
            // Minify HEX color code
            '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
            // Replace `(border|outline):none` with `(border|outline):0`
            '#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
            // Remove empty selector(s)
            '#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s'
        ),
        array(
            '$1',
            '$1$2$3$4$5$6$7',
            '$1',
            ':0',
            '$1:0 0',
            '.$1',
            '$1$3',
            '$1$2$4$5',
            '$1$2$3',
            '$1:0',
            '$1$2'
        ),
    $input);
}

// JavaScript Minifier
function minify_js($input) {
    if(trim($input) === "") return $input;
    return preg_replace(
        array(
            // Remove comment(s)
            '#\s*("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')\s*|\s*\/\*(?!\!|@cc_on)(?>[\s\S]*?\*\/)\s*|\s*(?<![\:\=])\/\/.*(?=[\n\r]|$)|^\s*|\s*$#',
            // Remove white-space(s) outside the string and regex
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/)|\/(?!\/)[^\n\r]*?\/(?=[\s.,;]|[gimuy]|$))|\s*([!%&*\(\)\-=+\[\]\{\}|;:,.<>?\/])\s*#s',
            // Remove the last semicolon
            '#;+\}#',
            // Minify object attribute(s) except JSON attribute(s). From `{'foo':'bar'}` to `{foo:'bar'}`
            '#([\{,])([\'])(\d+|[a-z_][a-z0-9_]*)\2(?=\:)#i',
            // --ibid. From `foo['bar']` to `foo.bar`
            '#([a-z0-9_\)\]])\[([\'"])([a-z_][a-z0-9_]*)\2\]#i'
        ),
        array(
            '$1',
            '$1$2',
            '}',
            '$1$3',
            '$1.$3'
        ),
    $input);
}


/**
 * @param $path
 * @param int $count
 * @return string
 */
if( ! function_exists( 'getMainColor' ) ){
  function getMainColor( $path, $count = 1 ){

    try{
      $palette = Palette::fromFilename($path);
      $extractor = new ColorExtractor($palette);
      $colors = $extractor->extract($count);
      $color = $colors[0];
      $color = Color::fromIntToHex($color);
      return $color;
    } catch (\Exception $e){
      Log::debug($e);
      return '';
    }

  }
}
/**
 * @param array $areas
 * @return array
 */
function extractElementsNames( $areas = []){
  $elementNames = [];

  foreach ( $areas as $area ) {
    if( ! isset( $area['template']['data'] ) ){
      continue;
    }
//    echo '<pre style="padding-left: 200px;">';
//    var_dump( $area );
//    echo '</pre>';
    $data = $area['template']['data'];
    _extractElementsNames( $data, $elementNames );
  }

  return $elementNames;
}

/**
 * @param array $element
 * @param $elementNames
 */
function _extractElementsNames( $element = [],  &$elementNames ){
  if( ! is_array( $elementNames ) ){
    $elementNames = [];
  }
  if( ! isset( $element['name'] ) || ! is_string( $element['name'] ) ){
    return;
  }

  if( isset( $element['lazySection'] ) && $element['lazySection'] ){
    return;
  }


  if( array_search( $element['name'], $elementNames ) === false){
    $elementNames[] = $element['name'];
  }
  if( isset( $element['children'] ) && is_array( $element['children'] ) ){
    foreach ( $element['children'] as $child ) {
      _extractElementsNames( $child, $elementNames );
    }
  }
}

/**
 * ???????????????? ???????????? ???????????????? ????????????????????????, ???????? [is_guest => true] ???????? ???? ??????????????????
 * @return array
 */
function getCurrentUser(): array
{
  $user = Auth::user();
  if ( ! $user ) {
    return ['is_guest' => true];
  }
  $user = $user->toArray();
  $user['roles'] = Auth::user()->roles->map(function (Role $role) {
    $_role = $role->toArray();
    $_role['permissions'] = $role->permissions;
    return $_role;
  });
  $user['local_storage'] = json_decode($user['local_storage'], 255);
  $user['permissions'] = Auth::user()->permissions;
  return $user;
}

/**
 * ???????????????? ?? ???????????? ?????????????????????? ???????? {{path_to_data...}} ???? ????????????
 * @param string $content
 * @return string
 */
function replaceContentWithData( $content ){
//  if( ! $modelContext ){
//    return $content;
//  }
  global $altrp_env;
  if( ! isset( $altrp_env['altrpuser'] ) ){
    data_set( $altrp_env, 'altrpuser', getCurrentUser() );
  }
  is_string( $content ) ? preg_match_all( '/{{([\s\S]+?)(?=}})/', $content, $path ) : null;
  if( ! isset( $path ) || ! isset( $path[1] )){
    return $content;
  }
  foreach ( $path[1] as $item ) {
    $value = data_get( $altrp_env, $item, '');
    $content = str_replace( '{{' . $item . '}}', $value, $content );
  }
  return $content;
}
/**
 * Convert array to string
 * @param $data
 * @return string
 */
function array2string($data) {
  $log_a = "[";
  try {
    foreach ($data as $key => $value) {
      if (!is_numeric($key)) $key = "'{$key}'";
      if (is_array($value))
        $log_a .= $key." => " . array2string($value) . ",";
      elseif (is_object($value))
        $log_a .= $key." => " . array2string(json_encode(json_decode($value))) . ",";
      elseif (is_bool($value))
        $log_a .= $key." => " . ($value ? 'true' : 'false') . ",";
      elseif (is_string($value))
        $log_a .= $key." => '" . $value . "',";
      elseif (is_null($value))
        $log_a .= $key." => null,";
      else
        $log_a .= $key." => " . $value . ",";
    }
  } catch (\Exception $exception) {
    $data = json_decode($data);
    if (is_array($data))
      array2string($data);
  }

  $log_a = trim($log_a, ",");
  return $log_a . ']';
}

/**
 * @param int $page_id
 * @param array $params
 * @param string $params_string
 * @return [] | null
 */
function getDataSources( $page_id, $params = array(), $params_string = '' ){
  global $altrp_env;
  $altrp_env['altrpdata'] = [];
  $datasources = [];

  $page = Page::find( $page_id );
  if( ! $page ){
    return $datasources;
  }

//  dd($page->data_sources->get(0)->model->altrp_controller->toArray());
  try{
    if( ! $page->data_sources ){
      return $datasources;
    }
    $default_params = [];
    if( $params_string ){
      foreach ( explode( ',', $params_string ) as $idx => $item) {
        $item = trim( $item );
        $item = str_replace( '$', '', $item );
        $default_params[$item] = $params[$idx];
      }
    }
    if( count( $default_params ) ){
      $altrp_env = array_merge( $default_params, $altrp_env );
    }
    $page_data_sources = $page->page_data_sources->filter( function ( $ds ){
      return $ds->server_side;
    } );
    $page_data_sources = $page_data_sources->sortBy( 'priority' );

    foreach ( $page_data_sources as $ds ) {
      if( ! $ds->source || ! $ds->source->model || ! $ds->alias ){
        continue;
      }
      if( $ds->parameters ){
        $_request_parameters = json_decode( replaceContentWithData( $ds->parameters ), true );

        if( ! $_request_parameters ){
          $_request_parameters = explode( "\n", replaceContentWithData( $ds->parameters ) );
          $_request_parameters = array_map( function( $item ){
            $item = explode( '|', $item );
            $item = array_map( function( $i ){
              return trim( $i );
            }, $item );
            if( ! isset( $item[1] ) ){
              $item[1] = $item[0];
            }
            return [
              'paramName' => $item[0],
              'paramValue' => $item[1],
            ];
          }, $_request_parameters );
        }
        $request_parameters = [];
        foreach ( $_request_parameters as $request_parameter ) {
          $request_parameters[$request_parameter['paramName']] = replaceContentWithData( $request_parameter['paramValue'] );
        }
      }

      $classname = '\App\Http\Controllers\AltrpControllers\\' . $ds->source->model->name . 'Controller' ;
      $controllerInstance = new $classname;

      $request = new ApiRequest( $request_parameters );

      if ($ds->source->type == 'get') $method = 'index';
      elseif ($ds->source->type == 'filters') $method = 'getIndexedColumnsValueWithCount';
      elseif ($ds->source->source->type == 'add') $method = 'store';
      elseif ($ds->source->type == 'update_column') $method = 'updateColumn';
      elseif ($ds->source->type == 'delete') $method = 'destroy';
      else $method = $ds->source->type;
      $result = call_user_func( [$controllerInstance, $method], $request );
      if( $result ){
        $result = $result->getContent();
        $result = json_decode( $result, true );
        $datasources[$ds->alias] = $result;
        if( isset( $result['data'] ) ){
          $result = array_merge( $result, $result['data'] );
          unset( $result['data'] );
        }
        data_set( $altrp_env['altrpdata'], $ds->alias, $result );
      }

    }
  } catch( Exception $e ){
    return $datasources;
  }
  return $datasources;
}
function uploadMedia($file)
{
    $media = new Media();
    $media->media_type = \Illuminate\Support\Facades\File::mimeType($file);
    $media->author = Auth::id() ?? null;
    $media->type = getTypeForFile($file);
    File::ensureDirectoryExists( 'app/media/' .  date("Y") . '/' .  date("m" ), 0775 );
    $media->filename = \Illuminate\Support\Facades\Storage::disk('public')->putFileAs(
            'media/' .  date("Y") . '/' .  date("m" ),
            $file,
            \Illuminate\Support\Facades\File::name($file) .
            '.' . \Illuminate\Support\Facades\File::extension($file)
        );

    $path = Storage::path( 'public/' . $media->filename );
    $ext = pathinfo( $path, PATHINFO_EXTENSION );
    if( $ext === 'svg' ){
        $svg = file_get_contents( $path );
        $svg = simplexml_load_string( $svg );
        $media->width = ( string ) data_get( $svg->attributes(), 'width', 150 );
        $media->height = ( string ) data_get( $svg->attributes(), 'height', 150 );
    } else {
        $size = getimagesize( $path );
        $media->width = data_get( $size, '0', 0 );
        $media->height = data_get( $size, '1', 0 );
    }
    $media->url =  Storage::url( $media->filename );
    $media->save();
    return $media;
}

function getTypeForFile( $file ){
    $extension_loaded = \Illuminate\Support\Facades\File::extension($file);
    $type = '';
    $file_types = getFileTypes();
    foreach ( $file_types as $file_type ){
        if( ( ! $type ) &&  array_search($extension_loaded, $file_type['extensions'] ) !== false ){
            $type = $file_type['name'];
        }
    }
    if( ! $type ){
        $type = 'other';
    }
    return $type;
}

function getFileTypes(){
    $file_types = file_get_contents( base_path( 'config/file-types.json' ) );
    $file_types = json_decode( $file_types, true);
    return $file_types;
}

