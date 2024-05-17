<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllData extends Model
{
    use HasFactory;

    protected $table = 'all_data';

    protected $fillable = [
        'country_id',
        'city_id',
        'money_cop',
        'money_foreign_currency',
        'climate',
        'exchange_rate',
    ];

    /**
     * Obtener el país asociado a este registro.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Obtener la ciudad asociada a este registro.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
