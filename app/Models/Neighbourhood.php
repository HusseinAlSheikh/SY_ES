<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model
{
    use HasFactory;
    //--------------
    public function users(){
        return $this->hasMany(User::class);
    }
    //--------------
    public function city(){
        return $this->belongsTo(City::class);
    }
    //-------------
    public function propertyAnnouncements(){
        return $this->hasMany(PropertyAnnouncement::class);
    }
}
