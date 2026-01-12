<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy(TenantScope::class)]
class Article extends Model
{
    //

    protected $guarded = ['id'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function scopeTenanting($query)
    {
        return $query->where('tenant_id', auth()->user()->tenant_id);
    }

    public static function booting()
    {
        self::creating(function ($model) {
            $model->tenant_id = auth()->user()->tenant_id;
        });
    }
}
