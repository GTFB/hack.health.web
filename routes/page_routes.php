<?php

// =======> '/' <=======
Route::get('/', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(1);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Главная',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 1);

// =======> '/registration' <=======
Route::get('/registration', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(2);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Регистрация',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 2);

// =======> '/login' <=======
Route::get('/login', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(3);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Авторизация',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 3);

// =======> '/adm' <=======
Route::get('/adm', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(4);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Административная панель',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 4);

// =======> '/adm/directions' <=======
Route::get('/adm/directions', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(5);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Справочники',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 5);

// =======> '/adm/directions/age' <=======
Route::get('/adm/directions/age', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(6);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Возраст пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 6);

// =======> '/adm/directions/age/add' <=======
Route::get('/adm/directions/age/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(7);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить возраст пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 7);

// =======> '/adm/directions/age/{id}' <=======
Route::get('/adm/directions/age/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(8);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать возраст пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 8);

// =======> '/adm/directions/aid-kinds' <=======
Route::get('/adm/directions/aid-kinds', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(9);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Вид помощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 9);

// =======> '/adm/directions/aid-kinds/add' <=======
Route::get('/adm/directions/aid-kinds/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(10);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить вид помощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 10);

// =======> '/adm/directions/aid-kinds/{id}' <=======
Route::get('/adm/directions/aid-kinds/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(11);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать вид помощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 11);

// =======> '/adm/directions/condition-table' <=======
Route::get('/adm/directions/condition-table', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(12);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Справочник состояний пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 12);

// =======> '/adm/directions/condition-table/add' <=======
Route::get('/adm/directions/condition-table/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(13);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить состояние пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 13);

// =======> '/adm/directions/condition-table/{id}' <=======
Route::get('/adm/directions/condition-table/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(14);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать состояние пациента',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 14);

// =======> '/adm/directions/criterion' <=======
Route::get('/adm/directions/criterion', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(15);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Группа оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 15);

// =======> '/adm/directions/criterion/add' <=======
Route::get('/adm/directions/criterion/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(16);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить группу оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 16);

// =======> '/adm/directions/criterion/{id}' <=======
Route::get('/adm/directions/criterion/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(17);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать группу оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 17);

// =======> '/adm/directions/criterion-list' <=======
Route::get('/adm/directions/criterion-list', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(18);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Список критериев оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 18);

// =======> '/adm/directions/criterion-list/add' <=======
Route::get('/adm/directions/criterion-list/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(19);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить список критериев оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 19);

// =======> '/adm/directions/criterion-list/{id}' <=======
Route::get('/adm/directions/criterion-list/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(20);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать список критериев оценки качества медпомощи',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 20);

// =======> '/adm/directions/criterion-mkb' <=======
Route::get('/adm/directions/criterion-mkb', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(21);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Связь группы оценки качества медпомощи и диагноза',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 21);

// =======> '/adm/directions/criterion-mkb/add' <=======
Route::get('/adm/directions/criterion-mkb/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(22);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить связь группы оценки качества медпомощи и диагноза',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 22);

// =======> '/adm/directions/criterion-mkb/{id}' <=======
Route::get('/adm/directions/criterion-mkb/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(23);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать связь группы оценки качества медпомощи и диагноза',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 23);

// =======> '/adm/directions/diagnostic' <=======
Route::get('/adm/directions/diagnostic', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(24);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Диагнозы',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 24);

// =======> '/adm/directions/diagnostic/add' <=======
Route::get('/adm/directions/diagnostic/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(25);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить диагноз',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 25);

// =======> '/adm/directions/diagnostic/{id}' <=======
Route::get('/adm/directions/diagnostic/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(26);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать диагноз',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 26);

// =======> '/adm/directions/drug' <=======
Route::get('/adm/directions/drug', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(27);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Номенклатура лекарственных препаратов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 27);

// =======> '/adm/directions/drug/add' <=======
Route::get('/adm/directions/drug/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(28);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить лекарственный препарат',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 28);

// =======> '/adm/directions/drug/{id}' <=======
Route::get('/adm/directions/drug/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(29);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать лекарственный препарат',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 29);

// =======> '/adm/directions/drug_diagnostic' <=======
Route::get('/adm/directions/drug_diagnostic', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(30);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Перечень лекарственных препаратов к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 30);

// =======> '/adm/directions/drug_diagnostic/add' <=======
Route::get('/adm/directions/drug_diagnostic/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(31);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить лекарственный препарат к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 31);

// =======> '/adm/directions/drug_diagnostic/{id}' <=======
Route::get('/adm/directions/drug_diagnostic/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(32);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать лекарственный препарат к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 32);

// =======> '/adm/directions/drug_kind' <=======
Route::get('/adm/directions/drug_kind', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(33);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Вид лекарственных препаратов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 33);

// =======> '/adm/directions/drug_kind/add' <=======
Route::get('/adm/directions/drug_kind/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(34);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить вид лекарственных препаратов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 34);

// =======> '/adm/directions/drug_kind/{id}' <=======
Route::get('/adm/directions/drug_kind/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(35);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать вид лекарственных препаратов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 35);

// =======> '/adm/directions/drug_measure' <=======
Route::get('/adm/directions/drug_measure', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(36);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Единицы измерения препаратов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 36);

// =======> '/adm/directions/drug_measure/add' <=======
Route::get('/adm/directions/drug_measure/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(37);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить единицу измерения препарата',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 37);

// =======> '/adm/directions/drug_measure/{id}' <=======
Route::get('/adm/directions/drug_measure/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(38);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать единицу измерения препарата',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 38);

// =======> '/adm/directions/food-diagnostic' <=======
Route::get('/adm/directions/food-diagnostic', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(39);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Лечебное питание',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 39);

// =======> '/adm/directions/food-diagnostic/add' <=======
Route::get('/adm/directions/food-diagnostic/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(40);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить лечебное питание',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 40);

// =======> '/adm/directions/food-diagnostic/{id}' <=======
Route::get('/adm/directions/food-diagnostic/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(41);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать лечебное питание',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 41);

// =======> '/adm/directions/food' <=======
Route::get('/adm/directions/food', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(42);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Номенклатура диетических столов',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 42);

// =======> '/adm/directions/food/add' <=======
Route::get('/adm/directions/food/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(43);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить диетический стол',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 43);

// =======> '/adm/directions/food/{id}' <=======
Route::get('/adm/directions/food/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(44);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать диетический стол',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 44);

// =======> '/adm/directions/guidance' <=======
Route::get('/adm/directions/guidance', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(45);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Клинические рекомендации',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 45);

// =======> '/adm/directions/guidance/add' <=======
Route::get('/adm/directions/guidance/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(46);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить клиническую рекомендацию',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 46);

// =======> '/adm/directions/guidance/{id}' <=======
Route::get('/adm/directions/guidance/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(47);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать клиническую рекомендацию',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 47);

// =======> '/adm/directions/quality-item' <=======
Route::get('/adm/directions/quality-item', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(48);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Пункт качества',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 48);

// =======> '/adm/directions/quality-item/add' <=======
Route::get('/adm/directions/quality-item/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(49);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить пункт качества',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 49);

// =======> '/adm/directions/quality-item/{id}' <=======
Route::get('/adm/directions/quality-item/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(50);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать пункт качества',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 50);

// =======> '/adm/directions/service' <=======
Route::get('/adm/directions/service', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(51);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Номенклатура медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 51);

// =======> '/adm/directions/service/add' <=======
Route::get('/adm/directions/service/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(52);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить медицинскую услугу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 52);

// =======> '/adm/directions/service/{id}' <=======
Route::get('/adm/directions/service/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(53);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать медицинскую услугу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 53);

// =======> '/adm/directions/service-diagnostic' <=======
Route::get('/adm/directions/service-diagnostic', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(54);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Перечень медицинских услуг к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 54);

// =======> '/adm/directions/service-diagnostic/add' <=======
Route::get('/adm/directions/service-diagnostic/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(55);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить медицинскую услугу к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 55);

// =======> '/adm/directions/service-diagnostic/{id}' <=======
Route::get('/adm/directions/service-diagnostic/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(56);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать медицинскую услугу к диагнозу',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 56);

// =======> '/adm/directions/service-kind' <=======
Route::get('/adm/directions/service-kind', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(57);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Вид медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 57);

// =======> '/adm/directions/service-kind/add' <=======
Route::get('/adm/directions/service-kind/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(58);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить вид медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 58);

// =======> '/adm/directions/service-kind/{id}' <=======
Route::get('/adm/directions/service-kind/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(59);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать вид медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 59);

// =======> '/adm/directions/service-type' <=======
Route::get('/adm/directions/service-type', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(60);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Тип медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 60);

// =======> '/adm/directions/service-type/add' <=======
Route::get('/adm/directions/service-type/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(61);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить тип медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 61);

// =======> '/adm/directions/service-type/{id}' <=======
Route::get('/adm/directions/service-type/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(62);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать тип медицинских услуг',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 62);

// =======> '/adm/directions/training-diagnostic' <=======
Route::get('/adm/directions/training-diagnostic', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(63);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Программа реабилитации',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 63);

// =======> '/adm/directions/training-diagnostic/add' <=======
Route::get('/adm/directions/training-diagnostic/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(64);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить программу реабилитации',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 64);

// =======> '/adm/directions/training-diagnostic/{id}' <=======
Route::get('/adm/directions/training-diagnostic/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(65);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать программу реабилитации',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 65);

// =======> '/adm/directions/training' <=======
Route::get('/adm/directions/training', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(66);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Номенклатура реабилитационных упражнений',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 66);

// =======> '/adm/directions/training/add' <=======
Route::get('/adm/directions/training/add', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(67);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Добавить реабилитационное упражнение',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 67);

// =======> '/adm/directions/training/{id}' <=======
Route::get('/adm/directions/training/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(68);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Редактировать реабилитационное упражнение',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 68);

// =======> '/appeals' <=======
Route::get('/appeals', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(69);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Обращения',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 69);

// =======> '/appeal/{id}' <=======
Route::get('/appeal/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(70);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Обращение {{name}}',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 70);

// =======> '/criterion-evaluation/appear/{id}' <=======
Route::get('/criterion-evaluation/appear/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(71);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Оценка качества',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 71);

// =======> '/med-services/appear/{id}' <=======
Route::get('/med-services/appear/{id}', function ($id) {
  global $altrp_env;
  $_frontend_route = \App\Page::find(72);;
  $model_data = [];
  $params_string = '$id';
  if( 1 !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( $id )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Медицинские услуги',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 72);

// =======> '/patients' <=======
Route::get('/patients', function () {
  global $altrp_env;
  $_frontend_route = \App\Page::find(73);;
  $model_data = [];
  $params_string = '';
  if( false !== false && $_frontend_route['model'] ) {
    $model = $_frontend_route['model']->toArray();
    if( isset( $model['namespace'] ) ){
      try {
        $relations = App\Altrp\Relationship::where( [['model_id',$model['id']],['always_with',1]] )->get()->implode( 'name', ',' );
        $relations = $relations ? explode( ',',$relations ) : false;
        $model = new $model['namespace'];
        if ( $relations ) {
          $model = $model->load( $relations );
        }
        $model_data = $model->find( 0 )->toArray();
        $altrp_env = $model_data;
      } catch( Exception $e ) {
        $model_data = [];
      }
    }
  }

  $preload_content = \App\Page::getPreloadPageContent( $_frontend_route['id'] );
  $preload_content['content'] = replaceContentWithData( $preload_content['content'] );

  $datasources = getDataSources( $_frontend_route['id'], func_get_args(), $params_string );

  $page_areas = \App\Page::get_areas_for_page( $_frontend_route['id'] );
  $lazy_sections = [];
  $elements_list = extractElementsNames( $page_areas );

  if (\App\Page::isCached( $_frontend_route['id'] )) {
    global $altrp_need_cache;
    $altrp_need_cache = true;
    global $altrp_route_id;
    $altrp_route_id = $_frontend_route['id'];
  }

  return view( 'front-app', [
    'page_areas' => json_encode( $page_areas ),
    'lazy_sections' => json_encode( $lazy_sections ),
    'elements_list' => json_encode( $elements_list ),
    'page_id' => $_frontend_route['id'],
    'title' => 'Пациенты',
    '_frontend_route' => $_frontend_route,
    'pages'=> \App\Page::get_pages_for_frontend( true ),
    'preload_content' => $preload_content,
    'model_data' => $model_data,
    'datasources' => $datasources,
    'is_admin' => isAdmin(),
  ]);
})->middleware(['web', 'installation.checker', 'after'])->name( 'page_' . 73);