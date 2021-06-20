<?php

namespace App\Http\Controllers\AltrpControllers;

use App\Altrp\Model;
use App\Altrp\Relationship;
use App\Altrp\Builders\Traits\DynamicVariables;
use App\Http\Controllers\ApiController;

use App\AltrpModels\service_diagnostic_evaluation;
use App\Http\Requests\ApiRequest;
use App\Services\ChatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AltrpRequests\service_diagnostic_evaluationStoreRequest;
use App\Http\Requests\AltrpRequests\service_diagnostic_evaluationUpdateRequest;
// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class service_diagnostic_evaluationController extends ApiController
{
    use DynamicVariables;
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    /**
     * service_diagnostic_evaluationController constructor.
     */
    public function __construct()
    {
        $this->modelClass = service_diagnostic_evaluation::class;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(service_diagnostic_evaluationStoreRequest $request)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $service_diagnostic_evaluation = new service_diagnostic_evaluation;

        $regChat = ChatService::registerInChat($service_diagnostic_evaluation->getTable(), $data);

        $data = $this->hashPasswordAttributeIfExists($service_diagnostic_evaluation->getTable(), $data);

        $service_diagnostic_evaluation->fill($data);

        $res = $service_diagnostic_evaluation->save();
        if($res){
            return response()->json(['success'=>true, 'data'=>$service_diagnostic_evaluation], 200, [], JSON_UNESCAPED_UNICODE);
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
        $service_diagnostic_evaluation = service_diagnostic_evaluation::find($id);

        if(! $service_diagnostic_evaluation) {
            return response()->json(trans("responses.not_found.service_diagnostic_evaluation"), 404, [], JSON_UNESCAPED_UNICODE);
        }

        $model = Model::where('name', 'service_diagnostic_evaluation')->first();
        $relations = Relationship::where([['model_id',$model->id],['always_with',1]])->get()->implode('name',',');
        $relations = $relations ? explode(',',$relations) : false;

        if ($relations) {
            $service_diagnostic_evaluation = $service_diagnostic_evaluation->load($relations);
        }

        $service_diagnostic_evaluation = $this->getRemoteData($model, $service_diagnostic_evaluation, true);

        return response()->json($service_diagnostic_evaluation, 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(service_diagnostic_evaluationUpdateRequest $request, $id)
    {
        $data = $request->all();
        if ($fileInfo = $this->hasFileInRequest($request)) {
            $medias = $this->saveMedias($request, $fileInfo['relation']);
            foreach ($medias as $media) {
                $data[$fileInfo['foreign_key']] = $media->id;
            }
        }

        $service_diagnostic_evaluation = service_diagnostic_evaluation::find($id);

        if(! $service_diagnostic_evaluation) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.service_diagnostic_evaluation")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $data = $this->hashPasswordAttributeIfExists($service_diagnostic_evaluation->getTable(), $data);

        $result = $service_diagnostic_evaluation->update($data);

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
        $service_diagnostic_evaluation = service_diagnostic_evaluation::find($id);

        if(! $service_diagnostic_evaluation) {
            return response()->json(['success'=>false, 'message' => trans("responses.not_found.service_diagnostic_evaluation")], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $service_diagnostic_evaluation->delete();

        if($result) {
            return response()->json(['success'=>true, 'message' => trans("responses.delete.service_diagnostic_evaluation")], 200, [], JSON_UNESCAPED_UNICODE);
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
        $service_diagnostic_evaluation = service_diagnostic_evaluation::find($id);

        if(! $service_diagnostic_evaluation) {
            return response()->json(['success'=>false, 'message' =>"service_diagnostic_evaluation not found"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        if (! isset($service_diagnostic_evaluation->$column)) {
            return response()->json(['success'=>false, 'message'=>'Column not exists'], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $service_diagnostic_evaluation->$column = $request->column_value;

        if ($service_diagnostic_evaluation->save()) {
            return response()->json(['success'=>true], 200, [], JSON_UNESCAPED_UNICODE);
        }

        return response()->json('Failed to update', 400, [], JSON_UNESCAPED_UNICODE);
    }

    public function getIndexedColumnsValueWithCount($column)
    {
        $service_diagnostic_evaluations = service_diagnostic_evaluation::selectRaw("$column as value, COUNT($column) as count")
                            ->havingRaw("COUNT($column)")
                            ->groupBy("$column")
                            ->get();
        return response()->json($service_diagnostic_evaluations, 200, [], JSON_UNESCAPED_UNICODE);
    }

    // SQL_EDITORS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // SQL_EDITORS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
