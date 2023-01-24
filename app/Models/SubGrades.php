<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGrades extends Model
{
    use HasFactory;
    protected $fillable = [
        'subgrade'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function list(){
        return SELF::orderBy('id','desc')->get();
    }

    public static function subgrade($id){
        return SELF::where('status','1')->orderBy('id','desc')->get();
    }
}
