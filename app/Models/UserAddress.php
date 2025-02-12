<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable=['user_id','address_line_1','address_line_2','city','state','country','postal_code'];
    //user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
