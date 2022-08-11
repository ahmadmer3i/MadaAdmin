<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(mixed $client_id)
 */
class Clients extends Model
{
    use HasFactory;

    protected $guarded = [];
}
