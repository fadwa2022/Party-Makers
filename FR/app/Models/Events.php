<?php

namespace App\Models;

use App\Models\Styles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Events extends Model
{
    use HasFactory;
    protected $table='events';
    protected $fillable = [
    'NumeroEvent ',
    'style',
    'Localisation',
    'DJ',
    'typeEvent',
    'dateEvent',
    'PrixEvent',
    'NumeroPlace',
    'Imageevent',
    'situation',
    'ourevent',
    'createur'
];
public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('style', 'like','%'.request('search').'%')
                ->orWhere('Localisation', 'like','%'.request('search').'%');
        }
        if ($filters['search2'] ?? false) {
            $query->where('style', 'like','%'.request('search2').'%')
                ->orWhere('Localisation', 'like','%'.request('search2').'%')
                ->orWhere('situation', 'like','%'.request('search2').'%') ;
        }
    }
// public function style()
// {
//     return $this->belongsTo(Styles::class,'style');
// }
// public function DJ()
// {
//     return $this->belongsTo(Styles::class,'DJ');
// }
}
