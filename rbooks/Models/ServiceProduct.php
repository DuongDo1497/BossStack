<?php

namespace RBooks\Models;

class ServiceProduct extends BaseModel
{

    protected $table = 'service_products';

    /**
     * Fillabled array for mass asign
     *
     * @var array
     */
    protected $fillable = [
        'code','name','price','termtype','productdate','description','numtime','numuser','orderproduct','created_user_id','created_at','updated_user_id','updated_at'
    ];

}
