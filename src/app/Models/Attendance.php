<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'work_start' => 'required',
    );  

    
    // public function 情報を返すメソッドの設定（モデルのリレーションの基本を学ぼう
}
