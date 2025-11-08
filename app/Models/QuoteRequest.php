<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'preferred_contact',
        'origin_address',
        'origin_city',
        'destination_address',
        'destination_city',
        'preferred_date',
        'date_flexible',
        'move_type',
        'property_size',
        'inventory_list',
        'packing_service',
        'storage_required',
        'fragile_items',
        'heavy_items',
        'assembly_required',
        'access_type',
        'insurance_required',
        'unpacking_service',
        'special_instructions',
        'estimated_budget',
        'status',
        'quoted_amount',
        'admin_notes',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'preferred_date' => 'date',
        'date_flexible' => 'boolean',
        'packing_service' => 'boolean',
        'storage_required' => 'boolean',
        'fragile_items' => 'boolean',
        'heavy_items' => 'boolean',
        'assembly_required' => 'boolean',
        'insurance_required' => 'boolean',
        'unpacking_service' => 'boolean',
        'estimated_budget' => 'decimal:2',
        'quoted_amount' => 'decimal:2',
    ];

    /**
     * Get formatted property size
     */
    public function getFormattedPropertySizeAttribute()
    {
        return str_replace('_', ' ', ucwords($this->property_size, '_'));
    }

    /**
     * Get formatted move type
     */
    public function getFormattedMoveTypeAttribute()
    {
        return ucfirst($this->move_type);
    }

    /**
     * Scope for pending quotes
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope for recent quotes
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}