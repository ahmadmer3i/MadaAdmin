<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $int)
 * @method static insert(array $array)
 */
class ContactSocialMedia extends Model
{
    use HasFactory;

    protected $guarded = [];
}
