<?php

namespace App\Models;

use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Tenantable;

    protected $guarded = ['id'];
}
