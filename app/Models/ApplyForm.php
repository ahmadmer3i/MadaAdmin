<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 */
class ApplyForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    function form_services(): BelongsTo
    {
        return $this->belongsTo(ApplyFormService::class, 'application_type_id');
    }

    function transfer_ways_sponsor(): BelongsTo
    {
        return $this->belongsTo(SalaryTransferWay::class, 'sponsor_salary_transfer_way_id');
    }

    function transfer_ways(): BelongsTo
    {
        return $this->belongsTo(SalaryTransferWay::class, 'transfer_way_id');
    }
}
