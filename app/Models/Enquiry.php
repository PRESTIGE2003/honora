<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = ['name', 'organisation', 'phone', 'email', 'service', 'date', 'quantity', 'message', 'whatsapp_sent'];

    protected $casts = ['date' => 'date', 'whatsapp_sent' => 'boolean'];
}
