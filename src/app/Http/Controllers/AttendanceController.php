<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

// どのデータを使って判定するのか　判定方法　データの渡し方　ブレードファイルでのifの使い方
