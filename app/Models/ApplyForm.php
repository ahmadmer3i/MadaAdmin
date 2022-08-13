<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplyForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    function form_services(): BelongsTo
    {
        return $this->belongsTo(ApplyFormService::class, 'application_type_id');
    }

    function transfer_ways(): BelongsTo
    {
        return $this->belongsTo(SalaryTransferWay::class);
    }
}
