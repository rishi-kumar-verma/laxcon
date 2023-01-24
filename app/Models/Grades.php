<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public static function list(){
        return SELF::orderBy('id','desc')->get();
    }

    public static function grade($id){
        return SELF::where('status','1')->orderBy('id','desc')->get();
    }
}
