<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    public function create(Request $request)
    {
        $attendance_value = Attendance::where('user_id', Auth::user()->id)->orderBy('work_start', 'desc')->first();
        
        $rest_values = [
            'rest_start' => Carbon::now(),
            'rest_end' => null,
            'attendance_id' => $attendance_value->id
            // メソッドとプロパティの違いidはメソッドではないので()を付けない
        ];
        Rest::create($rest_values);
        return redirect('/');
    }

    public function update(Request $request)
    {
        // laravel基礎講座＿検索とモデル結合ルート
        $attendance_value = Attendance::where('user_id', Auth::user()->id)->orderBy('work_start', 'desc')->first();
        $rest_values = Rest::where('attendance_id', $attendance_value->id)->orderBy('rest_start', 'desc')->first();
        $rest_values->update([
            'rest_end' => Carbon::now()
        ]);
        return redirect('/');
    }
}
