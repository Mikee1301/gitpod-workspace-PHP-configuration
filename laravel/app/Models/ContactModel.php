<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    // use HasFactory;
    protected $table = "contact";
    protected $fillable = [
        'contactId',
        'firstName',
        'lastName',
        'email',
        'age',
        'salary',
        'address'
    ];
}
