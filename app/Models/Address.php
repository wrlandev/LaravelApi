<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = 
    [
        'zipcode',
        'street',
        'complement',
        'neighborhood',
        'city',
        'state',
    ];

    public function patient() 
    {
        return $this->belongTo(Patient::class);
    }

    use HasFactory;
}
