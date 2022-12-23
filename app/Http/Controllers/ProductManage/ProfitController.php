<?php

namespace App\Http\Controllers\ProductManage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RBooks\Services\APIAdminService;
use RBooks\Services\CustomerService;
use RBooks\Services\UserService;
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

    public function index(Request $request)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();
        $this->view->setSubHeading('Danh sách');

        return $this->view('index');
    }
    
    public function add()
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();
        $this->view->setHeading('TÍNH LỢI NHUẬN KINH DOANH');

        return $this->view('add');
    }

    public function store(Request $request)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();

        return $this->view('index');
    }

    public function edit($id)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();
                
        $this->view->setSubHeading('Chỉnh sửa');

        return $this->view('edit');
    }

    public function update(Request $request, $id)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();


        return $this->view('index');
    }

    public function history()
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();

        $this->view->setHeading('LỊCH SỬ');
        return $this->view('history');
    }
    
    public function result(Request $request)
    {
        $this->view->leftmenu = app(APIAdminService::class)->setLeftMenu();

        $this->view->setHeading('KẾT QUẢ');
        return $this->view('result');
    }        
}
