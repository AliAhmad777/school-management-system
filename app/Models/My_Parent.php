<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class My_Parent extends Model
{
    use HasTranslations;
    public $translatable = ['Name_Father','Job_Father','Name_Mother','Job_Mother'];
    protected $table = 'my__parents';
    protected $guarded=[];


//  // علاقة بين جدول اولياء الأمور وجدول الصور لجلب اسم الصور في جدول اولياء الامور
//  public function images()
//  {
//      //images بالجمع لان ولي الامر يمكن ان يكون له اكثر من صورة
//      return $this->morphMany('App\Models\Image', 'imageable');
//  }
}
