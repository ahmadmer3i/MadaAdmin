<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail(int $int)
 * @method static find(int $int)
 */
class ContactEmail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contact_email_list(): HasMany
    {
        return $this->hasMany(ContactEmailList::class);
    }
}
