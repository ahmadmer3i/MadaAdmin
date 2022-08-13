<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($num)
 */
class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];
}
