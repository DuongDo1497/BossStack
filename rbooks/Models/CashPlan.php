<?php

namespace RBooks\Models;

class CashPlan extends BaseModel
{
    /**
     * Fillabled array for mass asign
     *
     * @var array
     */
    protected $forceDeleting = true;
         
    protected $fillable = [
        'customer_id','plantype','plantypedetail','planname','plandate','currency','currentage','planage','planamount','planamountunittype','accountno','currentamount','currentamountunittype','requireamount','requireamountunittype','totalcurrentamount','description','document','finish','finishdate','created_user_id','created_at','updated_user_id','updated_at'
    ];

    public function configtype()
    {
        return $this->belongsTo(ConfigType::class, 'plantype');
    } 
}
