<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'cosmetologist_id'
    ];

    public function cosmetologists(): BelongsToMany
    {
        return $this->belongsToMany(Cosmetologist::class, 'cosmetologist_service')
            ->withPivot('quantity', 'price');
    }


    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_service')
            ->withPivot('quantity', 'price');
    }
}
