<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = 
    [
        'full_name',
        'full_name_mother',
        'date_of_birth',
        'document_cpf',
        'document_cns'
    ];

    public function address() 
    {
        return $this->hashOne(Address::class);
    }

    use HasFactory;
}
