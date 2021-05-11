<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Expense extends Model implements HasMedia
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use InteractsWithMedia;
    use HasFactory;

    public const PAYMENT_METHOD_SELECT = [
        'Mpesa'  => 'Mpesa',
        'Cash'   => 'Cash',
        'Cheque' => 'Cheque',
    ];

    public const CATEGORY_SELECT = [
        'Wifi'             => 'Wifi',
        'Water'            => 'Water',
        'Cleaning Service' => 'Cleaning Service',
        'Spraying'         => 'Spraying',
    ];

    public $table = 'expenses';

    protected $appends = [
        'expense_receipt',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'expense_name',
        'category',
        'payment_method',
        'reference_number',
        'amount',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getExpenseReceiptAttribute()
    {
        return $this->getMedia('expense_receipt');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
