<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Types\This;

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

    function form_qualification(): BelongsTo
    {
        return $this->belongsTo(FormQualification::class, 'qualification_id');
    }

    function form_material_status(): BelongsTo
    {
        return $this->belongsTo(FormMaterialStatus::class, 'material_status_id');
    }

    function partner_bank(): BelongsTo
    {
        return $this->belongsTo(FormBank::class, 'bank_id');
    }

    function sponsor_bank(): BelongsTo
    {
        return $this->belongsTo(FormBank::class, 'sponsor_bank_id');
    }

    function category_services(): BelongsTo
    {
        return $this->belongsTo(ServicesCategory::class, 'category_id');
    }

    public function edited_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
