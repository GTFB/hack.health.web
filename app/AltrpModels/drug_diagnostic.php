<?php

namespace App\AltrpModels;

use Illuminate\Database\Eloquent\Model as Model;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class drug_diagnostic extends Model
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'drug_diagnostics';

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
    protected $fillable = ['diagnostic_id','drug_id','frequency','drug_measure_id','day_quantity','course_quantity'];

    /**
     * Relations that should be always with.
     *
     * @var array
     */
    protected $altrp_with = ['diagnostic','drug','drug_measure'];

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    // ACCESSORS - IMPORTANT: Don't remove this comment!
    
    // ACCESSORS - IMPORTANT: Don't remove this comment!

    // RELATIONSHIPS
    public function diagnostic()
    {
        return $this->belongsTo('App\AltrpModels\diagnostic', 'diagnostic_id', 'id');
    }

    public function drug()
    {
        return $this->belongsTo('App\AltrpModels\drug', 'drug_id', 'id');
    }

    public function drug_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\drug_diagnostic_evaluation', 'drug_diagnostic_id', 'id');
    }

    public function drug_measure()
    {
        return $this->belongsTo('App\AltrpModels\drug_measure', 'drug_measure_id', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
