<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'download_button','image','site_name','about_us'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveSImage($value,'/slider/');
    }
    public static function siteName()
    {
        $setting = Setting::find(1);
        return $setting ? $setting->site_name : '';
    }
    public static function aboutUs()
    {
        $setting = Setting::find(1);
        return $setting ? $setting->about_us : '';
    }
}
