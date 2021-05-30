<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\User;

class Shipment extends Authenticatable
{
    
use Notifiable;

protected $fillable = [
    'waybill', 'customer-address', 'customer-name','customer-phone-number','user_id'
];

public function user()
{
    return $this->belongsTo(User::class);
}


}
