<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail(int $int)
 */
class ContactSocialMediaIcon extends Model
{
    use HasFactory;

    protected $guarded = [];

    function social_media_link(): HasMany
    {
        return $this->hasMany(ContactSocialMedia::class);
    }
}
