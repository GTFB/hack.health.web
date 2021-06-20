<?php

namespace App\AltrpModels;

use App\User as UserModel;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class user_altrp extends UserModel
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    
    

    

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','password','last_name','notice_data','telegram_user_id'];

    /**
     * Relations that should be always with.
     *
     * @var array
     */
    protected $altrp_with = [];

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    // ACCESSORS - IMPORTANT: Don't remove this comment!
    
    // ACCESSORS - IMPORTANT: Don't remove this comment!

    // RELATIONSHIPS
    public function criterion_evaluation()
    {
        return $this->hasMany('App\AltrpModels\criterion_evaluation', 'user_id', 'id');
    }

    public function drug_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\drug_diagnostic_evaluation', 'user_id', 'id');
    }

    public function food_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\food_diagnostic_evaluation', 'user_id', 'id');
    }

    public function service_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\service_diagnostic_evaluation', 'user_id', 'id');
    }

    public function training_diagnostic_evaluation()
    {
        return $this->hasMany('App\AltrpModels\training_diagnostic_evaluation', 'user_id', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
