<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Session;
use DB;
use RBooks\Services\ReportService;
use App\Http\Requests\ReportStoreRequest;
use RBooks\Models\Report;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct(null);

        $this->setViewPrefix('home.');
        $this->view->setHeading('Hệ thống quản lý đầu tư');
    }

    public function index(Request $request)
    {
        $this->view->producttypes = config('rbooks.PRODUCTTYPES');
        return $this->view('index');
    }

    public function cashDissection()
    {
        return $this->view('products.CashDissection');
    }

    public function cashExecution()
    {
        return $this->view('products.CashExecution');
    }

    public function lossControl()
    {
        return $this->view('products.LossControl');
    }

    public function dataConvert()
    {
        return $this->view('products.DataConvert');
    }

    public function operateDigital()
    {
        return $this->view('products.OperateDigital');
    }

    public function package()
    {
        return $this->view('package');
    }

    public function aboutUs()
    {
        return $this->view('aboutus');
    }

    public function contact()
    {
        return $this->view('contact');
    }

    public function term()
    {
        return $this->view('term');
    }

    public function register()
    {
        return $this->view('register');
    }

    public function loginDemo()
    {
        return $this->view('loginDemo');
    }




    /*TẠM ẨN
    public function advisory()
    {
        return $this->view('advisory');
    }

    public function TheDefinitionOfInvesting()
    {
        return $this->view('advisory.TheDefinitionOfInvesting');
    }

    public function WhyYouShouldInvest()
    {
        return $this->view('advisory.WhyYouShouldInvest');
    }

    public function EffectiveBudgeting()
    {
        return $this->view('advisory.EffectiveBudgeting');
    }

    public function FinancialPlanning()
    {
        return $this->view('advisory.FinancialPlanning');
    }

    public function SavingMethod()
    {
        return $this->view('advisory.SavingMethod');
    }

    public function HowToGrowYourCashFlow()
    {
        return $this->view('advisory.HowToGrowYourCashFlow');
    }

    public function recruitment()
    {
        return $this->view('recruitment');
    }

    public function recruitmentDetail()
    {
        return $this->view('recruitment-detail');
    }

    public function invest()
    {
        return $this->view('products.invest');
    }

    public function personalCash()
    {
        $this->view->producttypes = config('rbooks.PRODUCTTYPES');
        return $this->view('products.personalcash');
    }

    public function predictIndex()
    {
        return $this->view('products.predictindex');
    }

    public function saving()
    {
        return $this->view('products.saving');
    }

    public function introProduct()
    {
        $this->view->producttypes = config('rbooks.PRODUCTTYPES');
        return $this->view('products.product');
    }

    public function privacyPolicy()
    {
        return $this->view('footer.privacypolicy');
    }

    public function termsOfService()
    {
        return $this->view('footer.termsofservice');
    }

    public function paymentMethod()
    {
        return $this->view('footer.paymentmethod');
    }

    public function information()
    {
        return $this->view('footer.information');
    }

    public function startup()
    {
        return $this->view('course.Startup');
    }

    public function smes()
    {
        return $this->view('course.SMEs');
    }

    public function bigCorp()
    {
        return $this->view('course.BigCorp');
    }

    public function cashFlowHandling()
    {
        return $this->view('course.CashFlowHandling');
    }

    public function moneyBegetsMoney()
    {
        return $this->view('course.MoneyBegetsMoney');
    }

    public function multiCashGrowth()
    {
        return $this->view('course.MultiCashGrowth');
    }
    */

    public function cashFlowDissection()
    {
        return $this->view('landing-page.CashFlowDissection');
    }

    public function digitalData()
    {
        return $this->view('landing-page.DigitalData');
    }

    public function cashConvert()
    {
        return $this->view('landing-page.CashConvert');
    }

    public function operateConvert()
    {
        return $this->view('landing-page.OperateConvert');
    }

    public function store(ReportStoreRequest $request)
    {
        $courseview = [ 
                '1'=> 'course.Startup',
                '2'=> 'course.SMEs',
                '3'=> 'course.BigCorp',
                '4'=> 'course.CashFlowHandling',
                '5'=> 'course.MoneyBegetsMoney',
                '6'=> 'course.MultiCashGrowth',
                '7'=> 'landing-page.CashFlowDissection',
              ];
       
        $course = $request->course;
       
        $result = app(ReportService::class)->create($request);
        $message = "";
        if ($result){
            $message = "Thông tin đã được đăng ký thành công !";
        }else{
            $message = "Lỗi lưu dữ liệu !";
        }
        
        $this->view->infor = $message;
        $templateview = $courseview[$course];
        return $this->view($templateview);
    }

}
