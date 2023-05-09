<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAnnouncement extends Model
{
    use HasFactory;
    //--------------
    public function user(){
        return $this->belongsTo(User::class);
    }
    //--------------
    public function propertyType(){
        return $this->belongsTo(PropertyType::class);
    }
    //--------------
    public function propertyActionType(){
        return $this->belongsTo(PropertyActionType::class);
    }
    //--------------
    public function neighbourhood(){
        return $this->belongsTo(Neighbourhood::class);
    }
    //------------
    public function propertyAnnouncementAttachments(){
        return $this->hasMany(PropertyAnnouncementAttachment::class);
    }
}
