<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\criterion_evaluation;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\criterion_evaluationStoreRequest;
use App\Http\Requests\AltrpRequests\criterion_evaluationUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class criterion_evaluationController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * criterion_evaluationController constructor.
     */
    public function __construct()
    {
        $this->modelClass = criterion_evaluation::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(criterion_evaluationStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $criterion_evaluation = new criterion_evaluation;

        $regChat = ChatService::registerInChat($criterion_evaluation->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($criterion_evaluation->getTable(), $data);

        $criterion_evaluation->fill($data);

        $res = $criterion_evaluation->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$criterion_evaluation], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("responses.dberror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $criterion_evaluation = criterion_evaluation::find($id);

        if(! $criterion_evaluation) {
            return response()->json(trans("responses.not_found.criterion_evaluation"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'criterion_evaluation')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $criterion_evaluation = $criterion_evaluation->load($relations);
        }

        $criterion_evaluation = $this->getRemoteData($model, $criterion_evaluation, true);

        return response()->json($criterion_evaluation, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(criterion_evaluationUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $criterion_evaluation = criterion_evaluation::find($id);

        if(! $criterion_evaluation) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.criterion_evaluation")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($criterion_evaluation->getTable(), $data);

        $result = $criterion_evaluation->update($data);

        if($result){
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("responses.dberror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $criterion_evaluation = criterion_evaluation::find($id);

        if(! $criterion_evaluation) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.criterion_evaluation")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $criterion_evaluation->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.criterion_evaluation")], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json(['success'=>false, 'message' => trans("deleteerror")], 400, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update column of resource from storage.
     *
     * @param ApiRequest $request
     * @param $id
     * @param $column
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateColumn(ApiRequest $request, $id, $column)
    {
        $criterion_evaluation = criterion_evaluation::find($id);

        if(! $criterion_evaluation) {
            return response()->json(['success'=>false, 'message' =>"criterion_evaluation not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($criterion_evaluation->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $criterion_evaluation->$column = $request->column_value;

        if ($criterion_evaluation->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $criterion_evaluations = criterion_evaluation::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($criterion_evaluations, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    

    public function get_criterion_evaluation(ApiRequest $request)
    {
        $entity = Model::where('name', 'criterion_evaluation')->first()->altrp_sql_editors->where('name', 'get_criterion_evaluation')->first();

        $res = selectForSQLEditor(
        "SELECT * FROM `hack_criterion_evaluations` as `e`
LEFT JOIN `hack_appeals` as `a`
    ON `e`.`appeal_id` = `a`.`id`
WHERE `appeal_id` = " . request()->id . "",  [], [
           'sql_name' => 'get_criterion_evaluation',
           'table_name' => 'criterion_evaluations',
         ], $request );



        $res['data'] = $this->getRemoteData($entity, $res, $entity->is_object);

        return response()->json( $res, 200, [], JSON_UNESCAPED_UNICODE );
    }
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}