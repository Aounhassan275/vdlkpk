<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'download_button','image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveSImage($value,'/slider/');
    }
}
