<?php

namespace RBooks\Models;

class ProfitBusiness extends BaseModel
{
    /**
     * Fillabled array for mass asign
     *
     * @var array
     */
    protected $forceDeleting = true;

    protected $table = 'profit_business';
         
    protected $fillable = [
        'customer_id','transdate','chiphitaichinh','chiphibanhang','chiphiquanlydoanhnghiep','chiphikhac','doanhthuthuan','doanhthutc_tnkhac','tylegvhb_dt','tisuatloinhuankyvong','doanhthu','giavonhangban','thuethunhapdoanhnghiep','loinhuan','description','created_user_id','created_at','updated_user_id','updated_at'
    ];

}
