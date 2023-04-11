<?php

namespace App\Models;

use App\Models\Events;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Styles extends Model
{

    protected $fillable = [
        'style_name',
        'image_style'

    ];
    use HasFactory;
    //   protected $table='styles';

    public function events()
    {
        return $this->hasMany(Events::class);
    }
}
