<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;
    ///-----
    public function userSocialNetworks(){
        return $this->hasMany(UserSocialNetwork::class);
    }
}
