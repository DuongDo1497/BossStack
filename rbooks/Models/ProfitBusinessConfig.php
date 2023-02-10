<?php

namespace RBooks\Models;

class ProfitBusinessConfig extends BaseModel
{
    /**
     * Fillabled array for mass asign
     *
     * @var array
     */
    protected $forceDeleting = true;

    protected $table = 'profit_business_config';
         
    protected $fillable = [
        'customer_id','transdate','chiphitaichinh','chiphibanhang','chiphiquanlydoanhnghiep','chiphikhac','created_user_id','created_at','updated_user_id','updated_at'
    ];

}
