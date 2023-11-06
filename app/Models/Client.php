<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'email'];

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}
