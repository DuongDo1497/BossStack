<?php

namespace App\Http\Controllers\ProductManage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\CustomerService;
use RBooks\Services\UserService;
use RBooks\Services\ProfitBusinessConfigService;
use RBooks\Services\ProfitBusinessService;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use \Auth;
use App\Constants\NotificationMessage;

class ProfitController extends Controller
{
    public function __construct()
    {
        parent::__construct(null);

        $this->setViewPrefix('product-manage.profit.');
        $this->setRoutePrefix('profits-');

        $this->view->setHeading('TÍNH LỢI NHUẬN KINH DOANH');
    }

    /**
     * setViewInit
     * Khoi tao tham so de hien thi view
     * 
     * @author  linh
     * @return  string
     * @access  public
     * @date    04 14, 2020 5:18:52 PM
     */
    public function setViewInit()
    {
        $this->view->setHeading('TÍNH LỢI NHUẬN KINH DOANH');

        $customer_id = Auth::user()->customer()->first()->id;
        $customer_id_encrypt = Crypt::encrypt($customer_id);
        $this->view->customer_id = $customer_id_encrypt;
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();
    }

    public function index(Request $request)
    {
        $this->setViewInit();

        $customer_id = Auth::user()->customer()->first()->id;
        $profitbusinessconfig = app(ProfitBusinessConfigService::class)->getProfitBusinessConfigFromCustomerId($customer_id)->first();
        $check = $profitbusinessconfig->count();
        $this->view->profitbusinessconfig = $profitbusinessconfig;
        if ($check != 0){
        	return $this->view('add');
        }else{
            return $this->view('index');        	
        }
    }

    public function addConfig(Request $request)
    {
        $result = app(ProfitBusinessConfigService::class)->create($request);

        $this->setViewInit();
        return $this->view('add');
    }

    public function editConfig($id)
    {
        $this->setViewInit();
        $this->view->setSubHeading('Chỉnh sửa');

        $this->view->model = app(ProfitBusinessConfigService::class)->find($id);


        return $this->view('editConfig');
    }

    public function updateConfig(Request $request, $id)
    {
        $result = app(ProfitBusinessConfigService::class)->update($request, $id);
        $this->setViewInit();

        $customer_id = Auth::user()->customer()->first()->id;
        $profitbusinessconfig = app(ProfitBusinessConfigService::class)->getProfitBusinessConfigFromCustomerId($customer_id)->first();
        $this->view->profitbusinessconfig = $profitbusinessconfig;
        return $this->view('add');
    }

    public function add()
    {
        $this->setViewInit();
        
        return $this->view('add');
    }
        
    public function process(Request $request)
    {
        $model = app(ProfitBusinessService::class)->create($request);
        $this->setViewInit();

        $profitbusiness_id = $model->id;
        $chiphitaichinh = $model->chiphitaichinh;
        $chiphibanhang = $model->chiphibanhang;
        $chiphiquanlydoanhnghiep = $model->chiphiquanlydoanhnghiep;
        $chiphikhac = $model->chiphikhac;
        $tongcongchiphi = $chiphitaichinh + $chiphibanhang + $chiphiquanlydoanhnghiep + $chiphikhac;

        $doanhthuthuan = $model->doanhthuthuan;
        $doanhthutc_tnkhac = $model->doanhthutc_tnkhac;
        $tylegvhb_dt = $model->tylegvhb_dt;
        $tisuatloinhuankyvong = $model->tisuatloinhuankyvong;

        $doanhthu = $model->doanhthu;
        $giavonhangban = $model->giavonhangban;
        $thuethunhapdoanhnghiep = $model->thuethunhapdoanhnghiep;
        $loinhuan = $model->loinhuan;
        
        $tilegiavonhangban = $giavonhangban*100/$doanhthu;
        $tilechiphitaichinh = $chiphitaichinh*100/$doanhthu;
        $tilechiphibanhang = $chiphibanhang*100/$doanhthu;
        $tilechiphiquanlydoanhnghiep = $chiphiquanlydoanhnghiep*100/$doanhthu;
        $tilechiphikhac = $chiphikhac*100/$doanhthu;
        $tilethuethunhapdoanhnghiep = $thuethunhapdoanhnghiep*100/$doanhthu;
        $tileloinhuan = $loinhuan*100/$doanhthu;

        $this->view->profitbusiness_id = $profitbusiness_id;

        $this->view->chiphitaichinh = $chiphitaichinh;
        $this->view->chiphibanhang = $chiphibanhang;
        $this->view->chiphiquanlydoanhnghiep = $chiphiquanlydoanhnghiep;
        $this->view->chiphikhac = $chiphikhac;
        $this->view->tongcongchiphi = $tongcongchiphi;
        $this->view->doanhthuthuan = $doanhthuthuan;
        $this->view->doanhthutc_tnkhac = $doanhthutc_tnkhac;
        $this->view->tylegvhb_dt = $tylegvhb_dt;

        $this->view->tisuatloinhuankyvong = $tisuatloinhuankyvong;
        $this->view->doanhthu = $doanhthu;
        $this->view->giavonhangban = $giavonhangban;
        $this->view->thuethunhapdoanhnghiep = $thuethunhapdoanhnghiep;
        $this->view->loinhuan = $loinhuan;

        $this->view->tilegiavonhangban = $tilegiavonhangban;
        $this->view->tilechiphitaichinh = $tilechiphitaichinh;
        $this->view->tilechiphibanhang = $tilechiphibanhang;
        $this->view->tilechiphiquanlydoanhnghiep = $tilechiphiquanlydoanhnghiep;
        $this->view->tilechiphikhac = $tilechiphikhac;
        $this->view->tilethuethunhapdoanhnghiep = $tilethuethunhapdoanhnghiep;
        $this->view->tileloinhuan = $tileloinhuan;

        $error = 0; $message = ""; $message_ = ""; $alert = "alert-success";
        if ($tileloinhuan >= 200){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ vượt hơn 200% so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn rất tuyệt vời. Hãy cố gắng giữ vững !";
            $error = 1;
            $alert = "alert-info";
        }elseif ($tileloinhuan >= 100 and $tileloinhuan < 200){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ vượt hơn 100% so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn đã làm rất tốt. Hãy cố gắng phát huy !";
            $error = 1;
            $alert = "alert-success";
        }elseif ($tileloinhuan >= 0 and $tileloinhuan < 100){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ thấp hơn so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn làm chưa tốt. Hãy tập trung để đạt được lợi nhuận tốt hơn !";
            $error = 1;
            $alert = "alert-warning";
        }elseif ($tileloinhuan < 0){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ.";
            $message_ = "Bạn đang LỖ. Hãy nỗ lực cải thiện để đạt được kết quả tốt hơn !";
            $error = 1;
            $alert = "alert-danger";
        }

        $this->view->error = $error;
        $this->view->infor = $message;
        $this->view->infor_ = $message_;
        $this->view->alert = $alert;        
        
        return $this->view('result');
    }

    public function store(Request $request)
    {
        $this->setViewInit();

        return $this->view('index');
    }

    public function edit($id)
    {
        $this->setViewInit();
        $this->view->setHeading('Chỉnh sửa');

        $customer_id = Auth::user()->customer()->first()->id;
        $profitbusinessconfig = app(ProfitBusinessConfigService::class)->getProfitBusinessConfigFromCustomerId($customer_id)->first();
        $this->view->profitbusinessconfig = $profitbusinessconfig;

        $this->view->model = app(ProfitBusinessService::class)->find($id);

        return $this->view('edit');
    }

    public function update(Request $request, $id)
    {
        $model = app(ProfitBusinessService::class)->update($request, $id);
        $this->setViewInit();

        $profitbusiness_id = $model->id;
        $chiphitaichinh = $model->chiphitaichinh;
        $chiphibanhang = $model->chiphibanhang;
        $chiphiquanlydoanhnghiep = $model->chiphiquanlydoanhnghiep;
        $chiphikhac = $model->chiphikhac;
        $tongcongchiphi = $chiphitaichinh + $chiphibanhang + $chiphiquanlydoanhnghiep + $chiphikhac;

        $doanhthuthuan = $model->doanhthuthuan;
        $doanhthutc_tnkhac = $model->doanhthutc_tnkhac;
        $tylegvhb_dt = $model->tylegvhb_dt;
        $tisuatloinhuankyvong = $model->tisuatloinhuankyvong;

        $doanhthu = $model->doanhthu;
        $giavonhangban = $model->giavonhangban;
        $thuethunhapdoanhnghiep = $model->thuethunhapdoanhnghiep;
        $loinhuan = $model->loinhuan;
        
        $tilegiavonhangban = $giavonhangban*100/$doanhthu;
        $tilechiphitaichinh = $chiphitaichinh*100/$doanhthu;
        $tilechiphibanhang = $chiphibanhang*100/$doanhthu;
        $tilechiphiquanlydoanhnghiep = $chiphiquanlydoanhnghiep*100/$doanhthu;
        $tilechiphikhac = $chiphikhac*100/$doanhthu;
        $tilethuethunhapdoanhnghiep = $thuethunhapdoanhnghiep*100/$doanhthu;
        $tileloinhuan = $loinhuan*100/$doanhthu;

        $this->view->profitbusiness_id = $profitbusiness_id;

        $this->view->chiphitaichinh = $chiphitaichinh;
        $this->view->chiphibanhang = $chiphibanhang;
        $this->view->chiphiquanlydoanhnghiep = $chiphiquanlydoanhnghiep;
        $this->view->chiphikhac = $chiphikhac;
        $this->view->tongcongchiphi = $tongcongchiphi;
        $this->view->doanhthuthuan = $doanhthuthuan;
        $this->view->doanhthutc_tnkhac = $doanhthutc_tnkhac;
        $this->view->tylegvhb_dt = $tylegvhb_dt;

        $this->view->tisuatloinhuankyvong = $tisuatloinhuankyvong;
        $this->view->doanhthu = $doanhthu;
        $this->view->giavonhangban = $giavonhangban;
        $this->view->thuethunhapdoanhnghiep = $thuethunhapdoanhnghiep;
        $this->view->loinhuan = $loinhuan;

        $this->view->tilegiavonhangban = $tilegiavonhangban;
        $this->view->tilechiphitaichinh = $tilechiphitaichinh;
        $this->view->tilechiphibanhang = $tilechiphibanhang;
        $this->view->tilechiphiquanlydoanhnghiep = $tilechiphiquanlydoanhnghiep;
        $this->view->tilechiphikhac = $tilechiphikhac;
        $this->view->tilethuethunhapdoanhnghiep = $tilethuethunhapdoanhnghiep;
        $this->view->tileloinhuan = $tileloinhuan;

        $error = 0; $message = ""; $message_ = ""; $alert = "alert-success";
        if ($tileloinhuan >= 200){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ vượt hơn 200% so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn rất tuyệt vời. Hãy cố gắng giữ vững !";
            $error = 1;
            $alert = "alert-info";
        }elseif ($tileloinhuan >= 100 and $tileloinhuan < 200){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ vượt hơn 100% so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn đã làm rất tốt. Hãy cố gắng phát huy !";
            $error = 1;
            $alert = "alert-success";
        }elseif ($tileloinhuan >= 0 and $tileloinhuan < 100){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ thấp hơn so với kế hoạch ($tisuatloinhuankyvong %).";
            $message_ = "Bạn làm chưa tốt. Hãy tập trung để đạt được lợi nhuận tốt hơn !";
            $error = 1;
            $alert = "alert-warning";
        }elseif ($tileloinhuan < 0){
            $message = "Lợi nhuận của bạn là: " . formatNumber($loinhuan, 1, 0, 1) . " đ.";
            $message_ = "Bạn đang LỖ. Hãy nỗ lực cải thiện để đạt được kết quả tốt hơn !";
            $error = 1;
            $alert = "alert-danger";
        }

        $this->view->error = $error;
        $this->view->infor = $message;
        $this->view->infor_ = $message_;
        $this->view->alert = $alert;        

        return $this->view('result');
    }

    public function history()
    {
        $this->setViewInit();
        $this->view->setHeading('LỊCH SỬ');
        $customer_id = Auth::user()->customer()->first()->id;

        $collections = app(ProfitBusinessService::class)->getListProfitBusinessFromCustomerId($customer_id)->paginate($this->view->filter['limit']);
        $this->view->collections = $collections;
        return $this->view('history');
    }
    
    public function result(Request $request)
    {
        $this->setViewInit();
        $this->view->setHeading('KẾT QUẢ');

        return $this->view('result');
    }        
}
