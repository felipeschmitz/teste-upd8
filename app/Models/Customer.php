<?php

namespace App\Models;

use App\Enums\CustomerGenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * fillable customer
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'document',
        'birthdate',
        'gender',
        'postcode',
        'address',
        'number',
        'complement',
        'district',
        'state',
        'city',
    ];

    /**
     * casts
     *
     * @var array
     */
    protected $casts = [
        'gender' => CustomerGenderEnum::class,
    ];
}
