<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class DayshiftController extends Controller
{
    public function create(Request $request)
    {
        $attendance_values = ['work_start' => Carbon::now(), 'user_id' => Auth::user()->id, 'work_end' => null];
        Attendance::create($attendance_values);
        return redirect('/');
    }

    public function update(Request $request)
    {
        // laravel基礎講座＿検索とモデル結合ルート laravel SQL where
        $attendance_values = Attendance::where('user_id', Auth::user()->id)->orderBy('work_start', 'desc')->first();
        $attendance_values->update([
            'work_end' => Carbon::now()
        ]);
        return redirect('/');
    }

    public function inactive(Request $request)
    {
        $inactive = Attendance::where('work_start', Carbon::today());
        return redirect('/');
        
        
        //⇒ボタンを非活性にする（条件） 新しいControllerは必要？indexファイルに@disabled(==)を記述 Controllerからブレードへ渡す方法

    
    }



}
