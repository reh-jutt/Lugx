<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactinfo extends Model
{
    use HasFactory;
    protected $table = 'contactinfos';
    protected $fillable = [
        'email',
        'phone',
        'address',
        'contactinfodescription'
    ]; //
}
