<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Bulkly\SocialPostGroups;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){

        $allgroups= SocialPostGroups::all();
        $histories= BufferPosting::paginate(10);
        // return $history;
        return view('pages.history', compact('histories','allgroups'));
    }

    public function search($query, $date, $group){
        $allgroups= SocialPostGroups::all();
        $histories= BufferPosting::where('name','LIKE',"%$query%")->paginate(10);
        // return $history;
        return view('pages.history', compact('histories','allgroups'));
    }
}
