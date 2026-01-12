<?php

namespace App\Traits;

use App\Models\Tenant;

trait Tenantable
{
    public static function bootTenantable()
    {
        self::creating(function ($model) {
            $model->tenant_id = auth()->user()->tenant_id;
        });
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function scopeTenanting($query)
    {
        return $query->where('tenant_id', auth()->user()->tenant_id);
    }
}
