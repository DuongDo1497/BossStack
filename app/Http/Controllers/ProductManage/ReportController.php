<?php

namespace App\Http\Controllers\ProductManage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\ReportService;
use RBooks\Services\UserService;
use App\Http\Requests\ReportStoreRequest;
use RBooks\Models\Report;
use App\Exports\ReportExport;
use App\Constants\Export;
use Carbon\Carbon;
use Excel;
use App\Constants\NotificationMessage;

class ReportController extends Controller
{
    public function __construct(ReportService $service)
    {
        parent::__construct($service);

        $this->setViewPrefix('product-manage.report.');
        $this->setRoutePrefix('report-');

        $this->view->setHeading('COACHING DÀNH CHO CÁ NHÂN HOẶC DOANH NGHIỆP');

    }

    /**
     * viewInit
     * Khoi tao tham so de hien thi view
     * 
     * @author  linh
     * @return  string
     * @access  public
     * @date    04 14, 2020 5:18:52 PM
     */
    public function viewInit()
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();

        $now = Carbon::now();
        $firstDate = "01/" . $now->month . "/" . $now->year; 
        $this->view->fromDate = $firstDate;
        $this->view->toDate = getCurrentDate('d');

        $this->view->coursetype = config('rbooks.COURSETYPE');
        $this->view->coursetypedetail = config('rbooks.COURSETYPEDETAIL');
        $this->view->companytypes = config('rbooks.COMPANYTYPES');                
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
        $this->viewInit();
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
    public function setView(Request $request)
    {
        $this->viewInit();
    }

    public function index(Request $request)
    {
        $this->viewInit();
                
        return $this->view('index');
    }

    public function listCashConvert(Request $request)
    {
        $this->setViewInit();
        $course = '8';
        $solution = '1';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('manage');
    }

    public function listCashConvertLevel(Request $request)
    {
        $this->setViewInit();
        $course = '8';
        $solution = '2';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('manage');
    }

    public function listLostControl(Request $request)
    {
        $this->setViewInit();
        $course = '8';
        $solution = '5';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('manage');
    }

    public function listOperateConvert(Request $request)
    {
        $this->setViewInit();
        $course = '9';
        $solution = '3';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('manage');
    }

    public function listOperateConvertLevel(Request $request)
    {
        $this->setViewInit();
        $course = '9';
        $solution = '4';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('manage');
    }

    public function listContact(Request $request)
    {
        $this->setViewInit();
        $course = '7';
        $solution = '0';
        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
        $this->view->collections = $collections;
        $this->view->course = $course;
        $this->view->solution = $solution;
                
        return $this->view('contact');
    }
        
    public function manage(Request $request)
    {
        $this->setViewInit();
                
        return $this->view('manage');
    }

    public function delete($id)
    {
        $ret = $this->main_service->delete($id);

        return redirect()
            ->route('report-manage')
            ->with(NotificationMessage::DELETE_SUCCESS);
    }
        
    public function store(ReportStoreRequest $request)
    {
        $result = $this->main_service->create($request);
        $message = "";
        if ($result){
            $message = "Thông tin đã được gửi đến hệ thống thành công !";
        }else{
            $message = "Lỗi lưu dữ liệu !";
        }
        
        $this->view->infor = $message;
        $this->setView($request);

        return $this->view('index');
    }

    public function export(Request $request)
    {
        $this->setViewInit();

        $coursetype = config('rbooks.COURSETYPE');
        $coursetypedetail = config('rbooks.COURSETYPEDETAIL');        
        $companytypes = config('rbooks.COMPANYTYPES');                

        $course = $request->course;
        $solution = $request->solution;
        $companytype = $request->companytype;

        $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        

        if ($collections->count() > 0){
            foreach ($collections as $customer) {
    
                $registerdate = ($customer->registerdate == null ? '' : ConvertSQLDate($customer->registerdate) ) . " - " . ($customer->finish_at_product == null ? '' : ConvertSQLDate($customer->finish_at_product) );
                $data[] = array(
                    'fullname' => $customer->fullname,
                    'email' => $customer->email,
                    'phone' => $customer->phone,
                    'registerdate' => $registerdate,
                    'title' => $customer->title,
                    'content' => $customer->content,
                    'course' => $coursetype[$customer->course] ,
                    'solution' => $coursetypedetail[$customer->solution],
                    'companytype' => $companytypes[$customer->companytype],
                    'created_at' => $customer->created_at,
                );
            }
            return Excel::download(new ReportExport($data), 'ExcelExport' . '-' . date(Export::DATE_FORMAT) . '.xlsx');
        }else{
            $collections = $this->main_service->getListCoachings($course, $solution)->paginate($this->view->filter['limit']);        
            $this->view->collections = $collections;
            $this->view->course = $course;
            $this->view->solution = $solution;
            $this->view->companytypes = $companytypes;
                    
            return $this->view('manage');
        }
    }
   
  
}
