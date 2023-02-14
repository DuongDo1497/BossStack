<?php

namespace RBooks\Services;

use RBooks\Repositories\ProfitBusinessRepository;
use \Auth;
use \DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use RBooks\Services\ProfitBusinessConfigService;

class ProfitBusinessService extends BaseService
{
    /**
     * Construct function
     */
    public function __construct()
    {
        $this->repository = app(ProfitBusinessRepository::class);
    }

    public function create($request)
    {
        $customer_id = $request->customer_id;
        $customer_id_decrypt = Crypt::decrypt($customer_id);

        $transdate = getCurrentDate('d');
        $transdate = quote_smart(FormatDateForSQL($transdate));
        $month = quote_smart($request->month);
        $year = quote_smart($request->year);
        $month = addPadding($month, 2, '0');

        $chiphitaichinh = (removeFormatNumber($request->chiphitaichinh) == '' ? '0' : removeFormatNumber($request->chiphitaichinh));
        $chiphibanhang = (removeFormatNumber($request->chiphibanhang) == '' ? '0' : removeFormatNumber($request->chiphibanhang));
        $chiphiquanlydoanhnghiep = (removeFormatNumber($request->chiphiquanlydoanhnghiep) == '' ? '0' : removeFormatNumber($request->chiphiquanlydoanhnghiep));
        $chiphikhac = (removeFormatNumber($request->chiphikhac) == '' ? '0' : removeFormatNumber($request->chiphikhac));

        $doanhthuthuan = (removeFormatNumber($request->doanhthuthuan) == '' ? '0' : removeFormatNumber($request->doanhthuthuan));
        $doanhthutc_tnkhac = (removeFormatNumber($request->doanhthutc_tnkhac) == '' ? '0' : removeFormatNumber($request->doanhthutc_tnkhac));
        $tylegvhb_dt = (removeFormatNumber($request->tylegvhb_dt) == '' ? '0' : removeFormatNumber($request->tylegvhb_dt));
        $tisuatloinhuankyvong = (removeFormatNumber($request->tisuatloinhuankyvong) == '' ? '0' : removeFormatNumber($request->tisuatloinhuankyvong));

        $doanhthu = $doanhthuthuan + $doanhthutc_tnkhac;
        $giavonhangban = $tylegvhb_dt*$doanhthuthuan/100;
        $tongcongchiphi = $giavonhangban + $chiphitaichinh + $chiphibanhang + $chiphiquanlydoanhnghiep + $chiphikhac;
        $thuethunhapdoanhnghiep = ($doanhthu - $tongcongchiphi)*20/100;
        $loinhuantruocthue = $doanhthu - $tongcongchiphi;
        $loinhuansauthue = $loinhuantruocthue - $thuethunhapdoanhnghiep;

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'customer_id' => $customer_id_decrypt,
            'transdate' => $transdate,
            'month' => $month,
            'year' => $year,
            'chiphitaichinh' => $chiphitaichinh,
            'chiphibanhang' => $chiphibanhang,
            'chiphiquanlydoanhnghiep' => $chiphiquanlydoanhnghiep,
            'chiphikhac' => $chiphikhac,
            'doanhthuthuan' => $doanhthuthuan,
            'doanhthutc_tnkhac' => $doanhthutc_tnkhac,
            'tylegvhb_dt' => $tylegvhb_dt,
            'tisuatloinhuankyvong' => $tisuatloinhuankyvong,
            'doanhthu' => $doanhthu,
            'chiphi' => $tongcongchiphi,
            'giavonhangban' => $giavonhangban,
            'thuethunhapdoanhnghiep' => $thuethunhapdoanhnghiep,
            'loinhuantruocthue' => $loinhuantruocthue,
            'loinhuansauthue' => $loinhuansauthue,
            'created_user_id' => $created_user_id,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->create($data);
    }

    public function update($request, $id)
    {
        $transdate = getCurrentDate('d');
        $transdate = quote_smart(FormatDateForSQL($transdate));
        $month = quote_smart($request->month);
        $year = quote_smart($request->year);
        $month = addPadding($month, 2, '0');

        $chiphitaichinh = (removeFormatNumber($request->chiphitaichinh) == '' ? '0' : removeFormatNumber($request->chiphitaichinh));
        $chiphibanhang = (removeFormatNumber($request->chiphibanhang) == '' ? '0' : removeFormatNumber($request->chiphibanhang));
        $chiphiquanlydoanhnghiep = (removeFormatNumber($request->chiphiquanlydoanhnghiep) == '' ? '0' : removeFormatNumber($request->chiphiquanlydoanhnghiep));
        $chiphikhac = (removeFormatNumber($request->chiphikhac) == '' ? '0' : removeFormatNumber($request->chiphikhac));

        $doanhthuthuan = (removeFormatNumber($request->doanhthuthuan) == '' ? '0' : removeFormatNumber($request->doanhthuthuan));
        $doanhthutc_tnkhac = (removeFormatNumber($request->doanhthutc_tnkhac) == '' ? '0' : removeFormatNumber($request->doanhthutc_tnkhac));
        $tylegvhb_dt = (removeFormatNumber($request->tylegvhb_dt) == '' ? '0' : removeFormatNumber($request->tylegvhb_dt));
        $tisuatloinhuankyvong = (removeFormatNumber($request->tisuatloinhuankyvong) == '' ? '0' : removeFormatNumber($request->tisuatloinhuankyvong));

        $doanhthu = $doanhthuthuan + $doanhthutc_tnkhac;
        $giavonhangban = $tylegvhb_dt*$doanhthuthuan/100;
        $tongcongchiphi = $giavonhangban + $chiphitaichinh + $chiphibanhang + $chiphiquanlydoanhnghiep + $chiphikhac;
        $thuethunhapdoanhnghiep = ($doanhthu - $tongcongchiphi)*20/100;
        $loinhuantruocthue = $doanhthu - $tongcongchiphi;
        $loinhuansauthue = $loinhuantruocthue - $thuethunhapdoanhnghiep;

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'month' => $month,
            'year' => $year,
            'chiphitaichinh' => $chiphitaichinh,
            'chiphibanhang' => $chiphibanhang,
            'chiphiquanlydoanhnghiep' => $chiphiquanlydoanhnghiep,
            'chiphikhac' => $chiphikhac,
            'doanhthuthuan' => $doanhthuthuan,
            'doanhthutc_tnkhac' => $doanhthutc_tnkhac,
            'tylegvhb_dt' => $tylegvhb_dt,
            'tisuatloinhuankyvong' => $tisuatloinhuankyvong,
            'doanhthu' => $doanhthu,
            'chiphi' => $tongcongchiphi,
            'giavonhangban' => $giavonhangban,
            'thuethunhapdoanhnghiep' => $thuethunhapdoanhnghiep,
            'loinhuantruocthue' => $loinhuantruocthue,
            'loinhuansauthue' => $loinhuansauthue,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->update($data, $id);
    }

    public function getListProfitBusinessFromCustomerId($customer_id)
    {
        $listData = DB::table('profit_business')
                        ->select('customer_id','transdate','month','year','chiphitaichinh','chiphibanhang','chiphiquanlydoanhnghiep','chiphikhac','doanhthuthuan','doanhthutc_tnkhac','tylegvhb_dt','tisuatloinhuankyvong','doanhthu','giavonhangban','thuethunhapdoanhnghiep','chiphi','loinhuantruocthue','loinhuansauthue','description')
                        ->where('customer_id', '=', "$customer_id")
                        ->where('deleted_at', '=', null)
                        ->orderBy('transdate', 'DESC');

        return $listData;   
  
    }

    public function getListProfitBusinessFromCustomerIdSortBy($customer_id, $fieldSort, $sortBy)
    {
        $listData = DB::table('profit_business')
                        ->select('customer_id','transdate','month','year','chiphitaichinh','chiphibanhang','chiphiquanlydoanhnghiep','chiphikhac','doanhthuthuan','doanhthutc_tnkhac','tylegvhb_dt','tisuatloinhuankyvong','doanhthu','giavonhangban','thuethunhapdoanhnghiep','chiphi','loinhuantruocthue','loinhuansauthue','description')
                        ->where('customer_id', '=', "$customer_id")
                        ->where('deleted_at', '=', null)
                        ->orderBy($fieldSort, $sortBy);

        return $listData;   
  
    }

    /**
     * 
     * Lay loi nhuan cua khach hang theo thang / nam
     * 
     * @author  linh
     * @return  string
     * @access  public
     * @date    03 14, 2020 5:18:52 PM
     */
    public function getSumProfitBusinessFromCustomerIdByMonthInYear($customer_id, $month, $year)
    {
        $ret = array();
         
        $result = DB::table('profit_business')
                        ->select(DB::raw('sum(doanhthu) as doanhthu, sum(chiphi) as chiphi, sum(loinhuantruocthue) as loinhuan'))
                        ->where('customer_id', '=', $customer_id)
                        ->where('month', '=', $month)
                        ->where('year', '=', $year)
                        ->where('deleted_at', '=', null)
                        ->groupBy('month')
                        ->get();
        $doanhthu = 0; $chiphi = 0; $loinhuan = 0;
        if ($result->count() > 0) {
            $doanhthu = $result->first()->doanhthu;
            $chiphi = $result->first()->chiphi;
            $loinhuan = $result->first()->loinhuan;
        }
        $ret = [
            'doanhthu' => $doanhthu,
            'chiphi' => $chiphi,
            'loinhuan' => $loinhuan,
        ];

        return $ret;    
    } 
    
    /**
     * Lay tong so loi nhuan theo tung thang trong nam -> ve bieu do bar
     *
     * @author  linh
     * @param   string $somecontent
     * @access  public
     * @date    Jul 19, 2006 3:10:43 PM
     */       
    public function getListProfitBusinessFromCustomerIdByMonthInYear($customer_id, $searchyear)
    {
        $ret = array();
        $year = $searchyear;
        for($i=1; $i<=12; $i++){
            $smonth = "$i";
            if ($i<10){
                $smonth = "0$i";
            }
            $searchDateMonth =  $year . "-" . $smonth . "-" . "01";

            $profit = $this->getSumProfitBusinessFromCustomerIdByMonthInYear($customer_id, $smonth, $year);

            $dataItem = [
                'doanhthu' => $profit['doanhthu'],
                'chiphi' => $profit['chiphi'],
                'loinhuan' => $profit['loinhuan'],
            ];

            $ret["$searchDateMonth"] = $dataItem;
        }

        return $ret;  
    }    
}
