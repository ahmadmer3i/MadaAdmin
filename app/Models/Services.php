<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail(mixed $services)
 * @method static find(int $int)
 */
class Services extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services_category(): HasMany
    {
        return $this->hasMany(ServicesCategores::class);
    }
}
