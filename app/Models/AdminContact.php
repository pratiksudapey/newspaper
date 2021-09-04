<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContact extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['address','address_detail','contact','contact_detail','email','email_detail','created_at','updated_at'];
}
