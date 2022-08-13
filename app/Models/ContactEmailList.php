<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static insert(array $array)
 * @method static findOrFail($id)
 */
class ContactEmailList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contact_email(): BelongsTo
    {
        return $this->belongsTo(ContactEmail::class);
    }
}
