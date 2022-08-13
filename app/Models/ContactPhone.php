<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail(int $int)
 */
class ContactPhone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contact_phone_list(): HasMany
    {
        return $this->hasMany(ContactPhoneList::class);
    }
}
