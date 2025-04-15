<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    public function cosmetologist(): BelongsToMany
    {
        return $this->belongsToMany(Cosmetologist::class, 'cosmetologist_services')
            ->withPivot('quantity', 'price');
    }


    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_service')
            ->withPivot('quantity', 'price');
    }
}
