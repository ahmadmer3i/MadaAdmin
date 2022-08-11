<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class ServicesCategoresLists extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services_categories()
    {
        $this->belongsTo(ServicesCategores::class);
    }
}
