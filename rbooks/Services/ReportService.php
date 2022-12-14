<?php

namespace RBooks\Services;

use RBooks\Repositories\ReportRepository;
use \Auth;
use \DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use RBooks\Models\Report;

class ReportService extends BaseService
{
    /**
     * Construct function
     */
    public function __construct()
    {
        $this->repository = app(ReportRepository::class);
    }

    public function create($request)
    {
        $registerdate = quote_smart(FormatDateForSQL(getCurrentDate('d')));
        $course = quote_smart($request->course);
        $fullname = quote_smart($request->fullname);
        $email = quote_smart($request->email);
        $phone = quote_smart($request->phone);
        $address = quote_smart($request->address);
        $title = quote_smart($request->title);
        $content = quote_smart($request->content);
        $solution = quote_smart($request->solution);
        $companytype = quote_smart($request->companytype);
        $created_user_id = '';
        $updated_user_id = '';

        $data = [
            'registerdate' => $registerdate,
            'course' => $course,
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'title' => "$title",
            'content' => "$content",
            'solution' => "$solution",
            'companytype' => "$companytype",
            'created_user_id' => $created_user_id,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->create($data);
    }

    public function update($request, $id)
    {
        $registerdate = quote_smart(FormatDateForSQL($request->registerdate));
        $course = quote_smart($request->course);
        $fullname = quote_smart($request->fullname);
        $email = quote_smart($request->email);
        $phone = quote_smart($request->phone);
        $address = quote_smart($request->address);
        $title = quote_smart($request->title);
        $content = quote_smart($request->content);
        $solution = quote_smart($request->solution);
        $companytype = quote_smart($request->companytype);
        $updated_user_id = quote_smart('');

        $data = [
            'registerdate' => $registerdate,
            'course' => $course,
            'fullname' => $fullname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'title' => "$title",
            'content' => "$content",
            'solution' => "$solution",
            'companytype' => "$companytype",
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->update($data, $id);
    }

    public function getListCoachings($searchField, $searchValue)
    {
        $listData = app(Report::class)
                            ->where('course', 'like', "%$searchField%")
                            ->where('solution', 'LIKE', "%$searchValue%")
                            ->where('deleted_at', '=', null)
                            ->orderBy('registerdate', 'desc')
                            ->orderBy('course', 'desc')
                            ->orderBy('created_at', 'desc');
                                        
        return $listData;    
    }  

}
