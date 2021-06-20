<?php
/*Api routes*/
// Routes for the patients resource
Route::get('/patients', ['uses' =>'AltrpControllers\patientController@index']);
Route::get('/patient_options', ['uses' =>'AltrpControllers\patientController@options']);
Route::post('/patients', ['uses' =>'AltrpControllers\patientController@store']);
Route::get('/patients/{patient}', ['uses' =>'AltrpControllers\patientController@show']);
Route::put('/patients/{patient}', ['uses' =>'AltrpControllers\patientController@update']);
Route::delete('/patients/{patient}', ['uses' =>'AltrpControllers\patientController@destroy']);
Route::put('/patients/{patient}/{column}', ['uses' =>'AltrpControllers\patientController@updateColumn']);
Route::get('/filters/patients/{column}', ['uses' =>'AltrpControllers\patientController@getIndexedColumnsValueWithCount']);
// Routes for the diagnostics resource
Route::get('/diagnostics', ['uses' =>'AltrpControllers\diagnosticController@index']);
Route::get('/diagnostic_options', ['uses' =>'AltrpControllers\diagnosticController@options']);
Route::post('/diagnostics', ['uses' =>'AltrpControllers\diagnosticController@store']);
Route::get('/diagnostics/{diagnostic}', ['uses' =>'AltrpControllers\diagnosticController@show']);
Route::put('/diagnostics/{diagnostic}', ['uses' =>'AltrpControllers\diagnosticController@update']);
Route::delete('/diagnostics/{diagnostic}', ['uses' =>'AltrpControllers\diagnosticController@destroy']);
Route::put('/diagnostics/{diagnostic}/{column}', ['uses' =>'AltrpControllers\diagnosticController@updateColumn']);
Route::get('/filters/diagnostics/{column}', ['uses' =>'AltrpControllers\diagnosticController@getIndexedColumnsValueWithCount']);
// Routes for the appeals resource
Route::get('/appeals', ['uses' =>'AltrpControllers\appealController@index']);
Route::get('/appeal_options', ['uses' =>'AltrpControllers\appealController@options']);
Route::post('/appeals', ['uses' =>'AltrpControllers\appealController@store']);
Route::get('/appeals/{appeal}', ['uses' =>'AltrpControllers\appealController@show']);
Route::put('/appeals/{appeal}', ['uses' =>'AltrpControllers\appealController@update']);
Route::delete('/appeals/{appeal}', ['uses' =>'AltrpControllers\appealController@destroy']);
Route::put('/appeals/{appeal}/{column}', ['uses' =>'AltrpControllers\appealController@updateColumn']);
Route::get('/filters/appeals/{column}', ['uses' =>'AltrpControllers\appealController@getIndexedColumnsValueWithCount']);
// Routes for the criteria resource
Route::get('/criteria', ['uses' =>'AltrpControllers\criterionController@index']);
Route::get('/criterion_options', ['uses' =>'AltrpControllers\criterionController@options']);
Route::post('/criteria', ['uses' =>'AltrpControllers\criterionController@store']);
Route::get('/criteria/{criterion}', ['uses' =>'AltrpControllers\criterionController@show']);
Route::put('/criteria/{criterion}', ['uses' =>'AltrpControllers\criterionController@update']);
Route::delete('/criteria/{criterion}', ['uses' =>'AltrpControllers\criterionController@destroy']);
Route::put('/criteria/{criterion}/{column}', ['uses' =>'AltrpControllers\criterionController@updateColumn']);
Route::get('/filters/criteria/{column}', ['uses' =>'AltrpControllers\criterionController@getIndexedColumnsValueWithCount']);
// Routes for the quality_items resource
Route::get('/quality_items', ['uses' =>'AltrpControllers\quality_itemController@index']);
Route::get('/quality_item_options', ['uses' =>'AltrpControllers\quality_itemController@options']);
Route::post('/quality_items', ['uses' =>'AltrpControllers\quality_itemController@store']);
Route::get('/quality_items/{quality_item}', ['uses' =>'AltrpControllers\quality_itemController@show']);
Route::put('/quality_items/{quality_item}', ['uses' =>'AltrpControllers\quality_itemController@update']);
Route::delete('/quality_items/{quality_item}', ['uses' =>'AltrpControllers\quality_itemController@destroy']);
Route::put('/quality_items/{quality_item}/{column}', ['uses' =>'AltrpControllers\quality_itemController@updateColumn']);
Route::get('/filters/quality_items/{column}', ['uses' =>'AltrpControllers\quality_itemController@getIndexedColumnsValueWithCount']);
// Routes for the criterion_lists resource
Route::get('/criterion_lists', ['uses' =>'AltrpControllers\criterion_listController@index']);
Route::get('/criterion_list_options', ['uses' =>'AltrpControllers\criterion_listController@options']);
Route::post('/criterion_lists', ['uses' =>'AltrpControllers\criterion_listController@store']);
Route::get('/criterion_lists/{criterion_list}', ['uses' =>'AltrpControllers\criterion_listController@show']);
Route::put('/criterion_lists/{criterion_list}', ['uses' =>'AltrpControllers\criterion_listController@update']);
Route::delete('/criterion_lists/{criterion_list}', ['uses' =>'AltrpControllers\criterion_listController@destroy']);
Route::put('/criterion_lists/{criterion_list}/{column}', ['uses' =>'AltrpControllers\criterion_listController@updateColumn']);
Route::get('/filters/criterion_lists/{column}', ['uses' =>'AltrpControllers\criterion_listController@getIndexedColumnsValueWithCount']);
// Routes for the criterion_mkbs resource
Route::get('/criterion_mkbs', ['uses' =>'AltrpControllers\criterion_mkbController@index']);
Route::get('/criterion_mkb_options', ['uses' =>'AltrpControllers\criterion_mkbController@options']);
Route::post('/criterion_mkbs', ['uses' =>'AltrpControllers\criterion_mkbController@store']);
Route::get('/criterion_mkbs/{criterion_mkb}', ['uses' =>'AltrpControllers\criterion_mkbController@show']);
Route::put('/criterion_mkbs/{criterion_mkb}', ['uses' =>'AltrpControllers\criterion_mkbController@update']);
Route::delete('/criterion_mkbs/{criterion_mkb}', ['uses' =>'AltrpControllers\criterion_mkbController@destroy']);
Route::put('/criterion_mkbs/{criterion_mkb}/{column}', ['uses' =>'AltrpControllers\criterion_mkbController@updateColumn']);
Route::get('/filters/criterion_mkbs/{column}', ['uses' =>'AltrpControllers\criterion_mkbController@getIndexedColumnsValueWithCount']);
// Routes for the criterion_evaluations resource
Route::get('/queries/criterion_evaluations/get_criterion_evaluation', ['uses' => 'AltrpControllers\criterion_evaluationController@get_criterion_evaluation']);
Route::get('/criterion_evaluations', ['uses' =>'AltrpControllers\criterion_evaluationController@index']);
Route::get('/criterion_evaluation_options', ['uses' =>'AltrpControllers\criterion_evaluationController@options']);
Route::post('/criterion_evaluations', ['uses' =>'AltrpControllers\criterion_evaluationController@store']);
Route::get('/criterion_evaluations/{criterion_evaluation}', ['uses' =>'AltrpControllers\criterion_evaluationController@show']);
Route::put('/criterion_evaluations/{criterion_evaluation}', ['uses' =>'AltrpControllers\criterion_evaluationController@update']);
Route::delete('/criterion_evaluations/{criterion_evaluation}', ['uses' =>'AltrpControllers\criterion_evaluationController@destroy']);
Route::put('/criterion_evaluations/{criterion_evaluation}/{column}', ['uses' =>'AltrpControllers\criterion_evaluationController@updateColumn']);
Route::get('/filters/criterion_evaluations/{column}', ['uses' =>'AltrpControllers\criterion_evaluationController@getIndexedColumnsValueWithCount']);
// Routes for the user_altrps resource
Route::get('/queries/user_altrps/get_roles_options', ['uses' => 'AltrpControllers\user_altrpController@get_roles_options']);
Route::get('/user_altrps', ['uses' =>'AltrpControllers\user_altrpController@index']);
Route::get('/user_altrp_options', ['uses' =>'AltrpControllers\user_altrpController@options']);
Route::post('/user_altrps', ['uses' =>'AltrpControllers\user_altrpController@store']);
Route::get('/user_altrps/{user_altrp}', ['uses' =>'AltrpControllers\user_altrpController@show']);
Route::put('/user_altrps/{user_altrp}', ['uses' =>'AltrpControllers\user_altrpController@update']);
Route::delete('/user_altrps/{user_altrp}', ['uses' =>'AltrpControllers\user_altrpController@destroy']);
Route::put('/user_altrps/{user_altrp}/{column}', ['uses' =>'AltrpControllers\user_altrpController@updateColumn']);
Route::get('/filters/user_altrps/{column}', ['uses' =>'AltrpControllers\user_altrpController@getIndexedColumnsValueWithCount']);
// Routes for the training_diagnostic_evaluations resource
Route::get('/training_diagnostic_evaluations', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@index']);
Route::get('/training_diagnostic_evaluation_options', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@options']);
Route::post('/training_diagnostic_evaluations', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@store']);
Route::get('/training_diagnostic_evaluations/{training_diagnostic_evaluation}', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@show']);
Route::put('/training_diagnostic_evaluations/{training_diagnostic_evaluation}', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@update']);
Route::delete('/training_diagnostic_evaluations/{training_diagnostic_evaluation}', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@destroy']);
Route::put('/training_diagnostic_evaluations/{training_diagnostic_evaluation}/{column}', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@updateColumn']);
Route::get('/filters/training_diagnostic_evaluations/{column}', ['uses' =>'AltrpControllers\training_diagnostic_evaluationController@getIndexedColumnsValueWithCount']);
// Routes for the training_diagnostics resource
Route::get('/training_diagnostics', ['uses' =>'AltrpControllers\training_diagnosticController@index']);
Route::get('/training_diagnostic_options', ['uses' =>'AltrpControllers\training_diagnosticController@options']);
Route::post('/training_diagnostics', ['uses' =>'AltrpControllers\training_diagnosticController@store']);
Route::get('/training_diagnostics/{training_diagnostic}', ['uses' =>'AltrpControllers\training_diagnosticController@show']);
Route::put('/training_diagnostics/{training_diagnostic}', ['uses' =>'AltrpControllers\training_diagnosticController@update']);
Route::delete('/training_diagnostics/{training_diagnostic}', ['uses' =>'AltrpControllers\training_diagnosticController@destroy']);
Route::put('/training_diagnostics/{training_diagnostic}/{column}', ['uses' =>'AltrpControllers\training_diagnosticController@updateColumn']);
Route::get('/filters/training_diagnostics/{column}', ['uses' =>'AltrpControllers\training_diagnosticController@getIndexedColumnsValueWithCount']);
// Routes for the trainings resource
Route::get('/trainings', ['uses' =>'AltrpControllers\trainingController@index']);
Route::get('/training_options', ['uses' =>'AltrpControllers\trainingController@options']);
Route::post('/trainings', ['uses' =>'AltrpControllers\trainingController@store']);
Route::get('/trainings/{training}', ['uses' =>'AltrpControllers\trainingController@show']);
Route::put('/trainings/{training}', ['uses' =>'AltrpControllers\trainingController@update']);
Route::delete('/trainings/{training}', ['uses' =>'AltrpControllers\trainingController@destroy']);
Route::put('/trainings/{training}/{column}', ['uses' =>'AltrpControllers\trainingController@updateColumn']);
Route::get('/filters/trainings/{column}', ['uses' =>'AltrpControllers\trainingController@getIndexedColumnsValueWithCount']);
// Routes for the service_types resource
Route::get('/service_types', ['uses' =>'AltrpControllers\service_typeController@index']);
Route::get('/service_type_options', ['uses' =>'AltrpControllers\service_typeController@options']);
Route::post('/service_types', ['uses' =>'AltrpControllers\service_typeController@store']);
Route::get('/service_types/{service_type}', ['uses' =>'AltrpControllers\service_typeController@show']);
Route::put('/service_types/{service_type}', ['uses' =>'AltrpControllers\service_typeController@update']);
Route::delete('/service_types/{service_type}', ['uses' =>'AltrpControllers\service_typeController@destroy']);
Route::put('/service_types/{service_type}/{column}', ['uses' =>'AltrpControllers\service_typeController@updateColumn']);
Route::get('/filters/service_types/{column}', ['uses' =>'AltrpControllers\service_typeController@getIndexedColumnsValueWithCount']);
// Routes for the service_kinds resource
Route::get('/service_kinds', ['uses' =>'AltrpControllers\service_kindController@index']);
Route::get('/service_kind_options', ['uses' =>'AltrpControllers\service_kindController@options']);
Route::post('/service_kinds', ['uses' =>'AltrpControllers\service_kindController@store']);
Route::get('/service_kinds/{service_kind}', ['uses' =>'AltrpControllers\service_kindController@show']);
Route::put('/service_kinds/{service_kind}', ['uses' =>'AltrpControllers\service_kindController@update']);
Route::delete('/service_kinds/{service_kind}', ['uses' =>'AltrpControllers\service_kindController@destroy']);
Route::put('/service_kinds/{service_kind}/{column}', ['uses' =>'AltrpControllers\service_kindController@updateColumn']);
Route::get('/filters/service_kinds/{column}', ['uses' =>'AltrpControllers\service_kindController@getIndexedColumnsValueWithCount']);
// Routes for the service_diagnostic_evaluations resource
Route::get('/queries/service_diagnostic_evaluations/get_service_diag_incomplete', ['uses' => 'AltrpControllers\service_diagnostic_evaluationController@get_service_diag_incomplete']);
Route::get('/queries/service_diagnostic_evaluations/get_service_diagnostic_complete', ['uses' => 'AltrpControllers\service_diagnostic_evaluationController@get_service_diagnostic_complete']);
Route::get('/queries/service_diagnostic_evaluations/get_service_diagnostic_', ['uses' => 'AltrpControllers\service_diagnostic_evaluationController@get_service_diagnostic_']);
Route::get('/service_diagnostic_evaluations', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@index']);
Route::get('/service_diagnostic_evaluation_options', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@options']);
Route::post('/service_diagnostic_evaluations', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@store']);
Route::get('/service_diagnostic_evaluations/{service_diagnostic_evaluation}', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@show']);
Route::put('/service_diagnostic_evaluations/{service_diagnostic_evaluation}', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@update']);
Route::delete('/service_diagnostic_evaluations/{service_diagnostic_evaluation}', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@destroy']);
Route::put('/service_diagnostic_evaluations/{service_diagnostic_evaluation}/{column}', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@updateColumn']);
Route::get('/filters/service_diagnostic_evaluations/{column}', ['uses' =>'AltrpControllers\service_diagnostic_evaluationController@getIndexedColumnsValueWithCount']);
// Routes for the service_diagnostics resource
Route::get('/service_diagnostics', ['uses' =>'AltrpControllers\service_diagnosticController@index']);
Route::get('/service_diagnostic_options', ['uses' =>'AltrpControllers\service_diagnosticController@options']);
Route::post('/service_diagnostics', ['uses' =>'AltrpControllers\service_diagnosticController@store']);
Route::get('/service_diagnostics/{service_diagnostic}', ['uses' =>'AltrpControllers\service_diagnosticController@show']);
Route::put('/service_diagnostics/{service_diagnostic}', ['uses' =>'AltrpControllers\service_diagnosticController@update']);
Route::delete('/service_diagnostics/{service_diagnostic}', ['uses' =>'AltrpControllers\service_diagnosticController@destroy']);
Route::put('/service_diagnostics/{service_diagnostic}/{column}', ['uses' =>'AltrpControllers\service_diagnosticController@updateColumn']);
Route::get('/filters/service_diagnostics/{column}', ['uses' =>'AltrpControllers\service_diagnosticController@getIndexedColumnsValueWithCount']);
// Routes for the services resource
Route::get('/services', ['uses' =>'AltrpControllers\serviceController@index']);
Route::get('/service_options', ['uses' =>'AltrpControllers\serviceController@options']);
Route::post('/services', ['uses' =>'AltrpControllers\serviceController@store']);
Route::get('/services/{service}', ['uses' =>'AltrpControllers\serviceController@show']);
Route::put('/services/{service}', ['uses' =>'AltrpControllers\serviceController@update']);
Route::delete('/services/{service}', ['uses' =>'AltrpControllers\serviceController@destroy']);
Route::put('/services/{service}/{column}', ['uses' =>'AltrpControllers\serviceController@updateColumn']);
Route::get('/filters/services/{column}', ['uses' =>'AltrpControllers\serviceController@getIndexedColumnsValueWithCount']);
// Routes for the guidances resource
Route::get('/guidances', ['uses' =>'AltrpControllers\guidanceController@index']);
Route::get('/guidance_options', ['uses' =>'AltrpControllers\guidanceController@options']);
Route::post('/guidances', ['uses' =>'AltrpControllers\guidanceController@store']);
Route::get('/guidances/{guidance}', ['uses' =>'AltrpControllers\guidanceController@show']);
Route::put('/guidances/{guidance}', ['uses' =>'AltrpControllers\guidanceController@update']);
Route::delete('/guidances/{guidance}', ['uses' =>'AltrpControllers\guidanceController@destroy']);
Route::put('/guidances/{guidance}/{column}', ['uses' =>'AltrpControllers\guidanceController@updateColumn']);
Route::get('/filters/guidances/{column}', ['uses' =>'AltrpControllers\guidanceController@getIndexedColumnsValueWithCount']);
// Routes for the food_diagnostic_evaluations resource
// Routes for the food resource
Route::get('/food', ['uses' =>'AltrpControllers\foodController@index']);
Route::get('/food_options', ['uses' =>'AltrpControllers\foodController@options']);
Route::post('/food', ['uses' =>'AltrpControllers\foodController@store']);
Route::get('/food/{food}', ['uses' =>'AltrpControllers\foodController@show']);
Route::put('/food/{food}', ['uses' =>'AltrpControllers\foodController@update']);
Route::delete('/food/{food}', ['uses' =>'AltrpControllers\foodController@destroy']);
Route::put('/food/{food}/{column}', ['uses' =>'AltrpControllers\foodController@updateColumn']);
// Routes for the food_diagnostics resource
Route::get('/filters/food/{column}', ['uses' =>'AltrpControllers\foodController@getIndexedColumnsValueWithCount']);
// Routes for the drug_measures resource
Route::get('/drug_measures', ['uses' =>'AltrpControllers\drug_measureController@index']);
Route::get('/drug_measure_options', ['uses' =>'AltrpControllers\drug_measureController@options']);
Route::post('/drug_measures', ['uses' =>'AltrpControllers\drug_measureController@store']);
Route::get('/drug_measures/{drug_measure}', ['uses' =>'AltrpControllers\drug_measureController@show']);
Route::put('/drug_measures/{drug_measure}', ['uses' =>'AltrpControllers\drug_measureController@update']);
Route::delete('/drug_measures/{drug_measure}', ['uses' =>'AltrpControllers\drug_measureController@destroy']);
Route::put('/drug_measures/{drug_measure}/{column}', ['uses' =>'AltrpControllers\drug_measureController@updateColumn']);
Route::get('/filters/drug_measures/{column}', ['uses' =>'AltrpControllers\drug_measureController@getIndexedColumnsValueWithCount']);
// Routes for the drug_kinds resource
Route::get('/drug_kinds', ['uses' =>'AltrpControllers\drug_kindController@index']);
Route::get('/drug_kind_options', ['uses' =>'AltrpControllers\drug_kindController@options']);
Route::post('/drug_kinds', ['uses' =>'AltrpControllers\drug_kindController@store']);
Route::get('/drug_kinds/{drug_kind}', ['uses' =>'AltrpControllers\drug_kindController@show']);
Route::put('/drug_kinds/{drug_kind}', ['uses' =>'AltrpControllers\drug_kindController@update']);
Route::delete('/drug_kinds/{drug_kind}', ['uses' =>'AltrpControllers\drug_kindController@destroy']);
Route::put('/drug_kinds/{drug_kind}/{column}', ['uses' =>'AltrpControllers\drug_kindController@updateColumn']);
Route::get('/filters/drug_kinds/{column}', ['uses' =>'AltrpControllers\drug_kindController@getIndexedColumnsValueWithCount']);
// Routes for the drug_diagnostic_evaluations resource
Route::get('/drug_diagnostic_evaluations', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@index']);
Route::get('/drug_diagnostic_evaluation_options', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@options']);
Route::post('/drug_diagnostic_evaluations', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@store']);
Route::get('/drug_diagnostic_evaluations/{drug_diagnostic_evaluation}', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@show']);
Route::put('/drug_diagnostic_evaluations/{drug_diagnostic_evaluation}', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@update']);
Route::delete('/drug_diagnostic_evaluations/{drug_diagnostic_evaluation}', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@destroy']);
Route::put('/drug_diagnostic_evaluations/{drug_diagnostic_evaluation}/{column}', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@updateColumn']);
Route::get('/filters/drug_diagnostic_evaluations/{column}', ['uses' =>'AltrpControllers\drug_diagnostic_evaluationController@getIndexedColumnsValueWithCount']);
// Routes for the drug_diagnostics resource
Route::get('/drug_diagnostics', ['uses' =>'AltrpControllers\drug_diagnosticController@index']);
Route::get('/drug_diagnostic_options', ['uses' =>'AltrpControllers\drug_diagnosticController@options']);
Route::post('/drug_diagnostics', ['uses' =>'AltrpControllers\drug_diagnosticController@store']);
Route::get('/drug_diagnostics/{drug_diagnostic}', ['uses' =>'AltrpControllers\drug_diagnosticController@show']);
Route::put('/drug_diagnostics/{drug_diagnostic}', ['uses' =>'AltrpControllers\drug_diagnosticController@update']);
Route::delete('/drug_diagnostics/{drug_diagnostic}', ['uses' =>'AltrpControllers\drug_diagnosticController@destroy']);
Route::put('/drug_diagnostics/{drug_diagnostic}/{column}', ['uses' =>'AltrpControllers\drug_diagnosticController@updateColumn']);
Route::get('/filters/drug_diagnostics/{column}', ['uses' =>'AltrpControllers\drug_diagnosticController@getIndexedColumnsValueWithCount']);
// Routes for the drugs resource
Route::get('/drugs', ['uses' =>'AltrpControllers\drugController@index']);
Route::get('/drug_options', ['uses' =>'AltrpControllers\drugController@options']);
Route::post('/drugs', ['uses' =>'AltrpControllers\drugController@store']);
Route::get('/drugs/{drug}', ['uses' =>'AltrpControllers\drugController@show']);
Route::put('/drugs/{drug}', ['uses' =>'AltrpControllers\drugController@update']);
Route::delete('/drugs/{drug}', ['uses' =>'AltrpControllers\drugController@destroy']);
Route::put('/drugs/{drug}/{column}', ['uses' =>'AltrpControllers\drugController@updateColumn']);
Route::get('/filters/drugs/{column}', ['uses' =>'AltrpControllers\drugController@getIndexedColumnsValueWithCount']);
// Routes for the conditions resource
Route::get('/conditions', ['uses' =>'AltrpControllers\conditionController@index']);
Route::get('/condition_options', ['uses' =>'AltrpControllers\conditionController@options']);
Route::post('/conditions', ['uses' =>'AltrpControllers\conditionController@store']);
Route::get('/conditions/{condition}', ['uses' =>'AltrpControllers\conditionController@show']);
Route::put('/conditions/{condition}', ['uses' =>'AltrpControllers\conditionController@update']);
Route::delete('/conditions/{condition}', ['uses' =>'AltrpControllers\conditionController@destroy']);
Route::put('/conditions/{condition}/{column}', ['uses' =>'AltrpControllers\conditionController@updateColumn']);
Route::get('/filters/conditions/{column}', ['uses' =>'AltrpControllers\conditionController@getIndexedColumnsValueWithCount']);
// Routes for the ages resource
Route::get('/ages', ['uses' =>'AltrpControllers\ageController@index']);
Route::get('/age_options', ['uses' =>'AltrpControllers\ageController@options']);
Route::post('/ages', ['uses' =>'AltrpControllers\ageController@store']);
Route::get('/ages/{age}', ['uses' =>'AltrpControllers\ageController@show']);
Route::put('/ages/{age}', ['uses' =>'AltrpControllers\ageController@update']);
Route::delete('/ages/{age}', ['uses' =>'AltrpControllers\ageController@destroy']);
Route::put('/ages/{age}/{column}', ['uses' =>'AltrpControllers\ageController@updateColumn']);
Route::get('/filters/ages/{column}', ['uses' =>'AltrpControllers\ageController@getIndexedColumnsValueWithCount']);
// Routes for the aid_kinds resource
Route::get('/aid_kinds', ['uses' =>'AltrpControllers\aid_kindController@index']);
Route::get('/aid_kind_options', ['uses' =>'AltrpControllers\aid_kindController@options']);
Route::post('/aid_kinds', ['uses' =>'AltrpControllers\aid_kindController@store']);
Route::get('/aid_kinds/{aid_kind}', ['uses' =>'AltrpControllers\aid_kindController@show']);
Route::put('/aid_kinds/{aid_kind}', ['uses' =>'AltrpControllers\aid_kindController@update']);
Route::delete('/aid_kinds/{aid_kind}', ['uses' =>'AltrpControllers\aid_kindController@destroy']);
Route::put('/aid_kinds/{aid_kind}/{column}', ['uses' =>'AltrpControllers\aid_kindController@updateColumn']);
Route::get('/filters/aid_kinds/{column}', ['uses' =>'AltrpControllers\aid_kindController@getIndexedColumnsValueWithCount']);