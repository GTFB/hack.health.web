<?php

namespace App\AltrpModels;

use Illuminate\Database\Eloquent\Model as Model;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.



// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class appeal extends Model
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    

    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'appeals';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','patient_id','age','data','diagnostic_id','condition_id','aid_kind_id','insured_event_code'];

    /**
     * Relations that should be always with.
     *
     * @var array
     */
    protected $altrp_with = ['aid_kind','condition','diagnostic','patient'];

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    

    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    // ACCESSORS - IMPORTANT: Don't remove this comment!
    
    

    // ACCESSORS - IMPORTANT: Don't remove this comment!

    // RELATIONSHIPS
    public function aid_kind()
    {
        return $this->belongsTo('App\AltrpModels\aid_kind', 'aid_kind_id', 'id');
    }

    public function criterion_evaluation()
    {
        return $this->hasMany('App\AltrpModels\criterion_evaluation', 'appeal_id', 'id');
    }

    public function drug_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\drug_diagnostic_evaluation', 'appeal_id', 'id');
    }

    public function food_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\food_diagnostic_evaluation', 'appeal_id', 'id');
    }

    public function service_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\service_diagnostic_evaluation', 'appeal_id', 'id');
    }

    public function training_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\training_diagnostic_evaluation', 'appeal_id', 'id');
    }

    public function condition()
    {
        return $this->belongsTo('App\AltrpModels\condition', 'condition_id', 'id');
    }

    public function diagnostic()
    {
        return $this->belongsTo('App\AltrpModels\diagnostic', 'diagnostic_id', 'id');
    }

    public function patient()
    {
        return $this->belongsTo('App\AltrpModels\patient', 'patient_id', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    

    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
