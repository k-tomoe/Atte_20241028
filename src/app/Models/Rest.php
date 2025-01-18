<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'attendance_id' => 'required',
        'rest_start' => 'required',
    );  
}
