<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsors extends Model
{
    protected $fillable = [
        'event',
        'phone',
        'message',
        'sponsor',
        'situation',
    ];
    public function scopeFilter($query, array $filters)
    {
        if ($filters['searchsponsor'] ?? false) {
            $query->Where('situation', 'like','%'.request('searchsponsor').'%');
        }
    }
    use HasFactory;
}
