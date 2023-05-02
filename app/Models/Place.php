<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model {
    use HasFactory;

    protected $table = 'dropt_places';

    protected $fillable = [
        'name',
        'address_address',
        'address_latitude',
        'address_longitude',
    ];
}
