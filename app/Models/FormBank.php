<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static findOrFail($id)
 */
class FormBank extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function apply_form(): HasMany
    {
        return $this->hasMany(ApplyForm::class);
    }
}
