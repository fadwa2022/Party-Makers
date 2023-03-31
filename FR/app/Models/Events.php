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
    'ourevent'
];
// public function style()
// {
//     return $this->belongsTo(Styles::class,'style');
// }
// public function DJ()
// {
//     return $this->belongsTo(Styles::class,'DJ');
// }
}
