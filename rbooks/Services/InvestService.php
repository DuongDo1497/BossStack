<?php

namespace RBooks\Services;

use RBooks\Repositories\InvestRepository;
use \Auth;
use \DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use RBooks\Models\Invest;

class InvestService extends BaseService
{
    /**
     * Construct function
     */
    public function __construct()
    {
        $this->repository = app(InvestRepository::class);
    }

    public function create($request)
    {
        $defaultUserImage = config('app.newsimage');
        $imageName = "";
        $image = $request->file('fImages');
        if($image == null) {
            $imageN = "";
            $imageName = "";
        } else {
            $imageN = $image->getClientOriginalName();
            $imageName = $defaultUserImage.$imageN;
            $image->move(public_path($defaultUserImage), $imageName);
        }

        $importFileName = "";
        $importFile = $request->file('importFile');
        if($importFile == null) {
            $imageN = "";
            $importFileName = "";
        } else {
            $imageN = $importFile->getClientOriginalName();
            $importFileName = $defaultUserImage.$imageN;
            $importFile->move(public_path($defaultUserImage), $importFileName);
        }

        $newsdate = ($request->newsdate==""?quote_smart("0000-00-00"):quote_smart(FormatDateForSQL($request->newsdate)));
        $newstype = quote_smart($request->newstype);
        $newstitle = quote_smart($request->newstitle);

        $shortcontent = quote_smart($request->shortcontent);
        $content = quote_smart($request->content);

        $maxValue = app(Invest::class)::max('newsorder');
        $maxValue = intval($maxValue) + 1;
        $newsorder = quote_smart($maxValue);
        $author = quote_smart($request->author);
        $hidden = quote_smart($request->hidden);

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'newsdate' => $newsdate,
            'newstype' => $newstype,
            'newstitle' => $newstitle,
            'newsimage' => $imageName,
            'importfile' => $importFileName,
            'shortcontent' => $shortcontent,
            'content' => $content,
            'newsorder' => $newsorder,
            'author' => $author,
            'hidden' => $hidden,
            'created_user_id' => $created_user_id,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->create($data);
    }

    public function update($request, $id)
    {
        $defaultUserImage = config('app.newsimage');
        $imageName = "";
        $image = $request->file('fImages');
        if($image == null) {
            $imageN = $request->newsimage;
            $imageName = $imageN;
        } else {
            $imageN = $image->getClientOriginalName();
            $imageName = $defaultUserImage.$imageN;
            $image->move(public_path($defaultUserImage), $imageName);
        }

        $importFileName = "";
        $importFile = $request->file('importFile');
        if($importFile == null) {
            $imageN = $request->importfile;
            $importFileName = $imageN;
        } else {
            $imageN = $importFile->getClientOriginalName();
            $importFileName = $defaultUserImage.$imageN;
            $importFile->move(public_path($defaultUserImage), $importFileName);
        }

        $newsdate = ($request->newsdate==""?quote_smart("0000-00-00"):quote_smart(FormatDateForSQL($request->newsdate)));
        $newstype = quote_smart($request->newstype);
        $newstitle = quote_smart($request->newstitle);

        $shortcontent = quote_smart($request->shortcontent);
        $content = quote_smart($request->content);
        $newsorder = quote_smart($request->newsorder);
        $author = quote_smart($request->author);
        $hidden = quote_smart($request->hidden);

        $created_user_id = quote_smart(Auth()->user()->id);
        $updated_user_id = quote_smart(Auth()->user()->id);

        $data = [
            'newsdate' => $newsdate,
            'newstype' => $newstype,
            'newstitle' => $newstitle,
            'newsimage' => $imageName,
            'importfile' => $importFileName,
            'shortcontent' => $shortcontent,
            'content' => $content,
            'newsorder' => $newsorder,
            'author' => $author,
            'hidden' => $hidden,
            'updated_user_id' => $updated_user_id,
        ];

        return $this->repository->update($data, $id);
    }

    public function getListNewsManage($searchField, $searchValue)
    {
        $listData = app(Invest::class)
                            ->where('newstype', 'like', "%$searchField%")
                            ->where('shortcontent', 'like', "%$searchValue%")
                            ->where('deleted_at', '=', null)
                            ->orderBy('created_at', 'desc');
        return $listData;    
    }            

    public function getListNews($searchField, $searchValue)
    {
        $listData = app(Invest::class)
                            ->where('newstype', 'like', "%$searchField%")
                            ->where('shortcontent', 'like', "%$searchValue%")
                            ->where('hidden', '=', '0')
                            ->where('deleted_at', '=', null)
                            ->orderBy('created_at', 'desc');
                                        
        return $listData;    
    }   
}
