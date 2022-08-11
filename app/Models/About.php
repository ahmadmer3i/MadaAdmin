<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 * @method static findOrFail(mixed $about_title)
 */
class About extends Model
{
    use HasFactory;

    protected $guarded = [];
}
