<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static findOrFail(mixed $id)
 * @method static insert(array $array)
 */
class ContactSocialMedia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function social_media_icon(): BelongsTo
    {
        return $this->belongsTo(ContactSocialMediaIcon::class);
    }
}
