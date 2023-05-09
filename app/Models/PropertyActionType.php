<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyActionType extends Model
{
    use HasFactory;
    //--------
    public function propertyAnnouncements(){
        return $this->hasMany(PropertyAnnouncement::class);
    }
}
