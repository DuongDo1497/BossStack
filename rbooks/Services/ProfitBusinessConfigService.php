<?php

namespace RBooks\Services;

use RBooks\Repositories\ProfitBusinessConfigRepository;
use \Auth;
use \DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class ProfitBusinessConfigService extends BaseService
{
    /**
     * Construct function
     */
    public function __construct()
    {
        $this->repository = app(ProfitBusinessConfigRepository::class);
    }

    public function create($request)
    {
        $customer_id = $request->customer_id;
        $customer_id_decrypt = Crypt::decrypt($customer_id);

        $transdate = getCurrentDate('d');
        $transdate = quote_smart(FormatDateForSQL($transdate));
        $chiphitaichinh = (removeFormatNumber($request->chiphitaichinh) == '' ? '0' : removeFormatNumber($request->chiphitaichinh));
        $chiphibanhang = (removeFormatNumber($request->chiphibanhang) == '' ? '0' : removeFormatNumber($request->chiphibanhang));
        $chiphiquanlydoanhnghiep = (removeFormatNumber($request->chiphiquanlydoanhnghiep) == '' ? '0' : removeFormatNumber($request->chiphiquanlydoanhnghiep));
        $chiphikhac = (removeFormatNumber($request->chiphikhac) == '' ? '0' : removeFormatNumber($request->chiphikhac));

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'customer_id' => $customer_id_decrypt,
            'transdate' => $transdate,
            'chiphitaichinh' => $chiphitaichinh,
            'chiphibanhang' => $chiphibanhang,
            'chiphiquanlydoanhnghiep' => $chiphiquanlydoanhnghiep,
            'chiphikhac' => $chiphikhac,
            'created_user_id' => $created_user_id,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->create($data);
    }

    public function update($request, $id)
    {
        $transdate = getCurrentDate('d');
        $transdate = quote_smart(FormatDateForSQL($transdate));
        $chiphitaichinh = (removeFormatNumber($request->chiphitaichinh) == '' ? '0' : removeFormatNumber($request->chiphitaichinh));
        $chiphibanhang = (removeFormatNumber($request->chiphibanhang) == '' ? '0' : removeFormatNumber($request->chiphibanhang));
        $chiphiquanlydoanhnghiep = (removeFormatNumber($request->chiphiquanlydoanhnghiep) == '' ? '0' : removeFormatNumber($request->chiphiquanlydoanhnghiep));
        $chiphikhac = (removeFormatNumber($request->chiphikhac) == '' ? '0' : removeFormatNumber($request->chiphikhac));

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'transdate' => $transdate,
            'chiphitaichinh' => $chiphitaichinh,
            'chiphibanhang' => $chiphibanhang,
            'chiphiquanlydoanhnghiep' => $chiphiquanlydoanhnghiep,
            'chiphikhac' => $chiphikhac,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->update($data, $id);
    }

    public function getProfitBusinessConfigFromCustomerId($customer_id)
    {
        $search = array('customer_id'=>$customer_id);
        $listData = app(ProfitBusinessConfigRepository::class)->findWhere($search);

        return $listData;    
    }

    public function getProfitBusinessConfigFromId($id)
    {
        $search = array('id'=>$id);
        $listData = app(ProfitBusinessConfigRepository::class)->findWhere($search);

        return $listData;    
    }

}
