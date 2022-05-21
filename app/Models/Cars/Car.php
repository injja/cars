<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function scopeFilterByVin($query, $vin)
    {
        return $query->where('vin', 'like', $vin . '%');
    }

    public function scopeFilterByColor($query, $color)
    {
        return $query->where('color', 'like', '%' . $color . '%');
    }

    public function scopeFilterByminPrice($query, $minPrice)
    {
        return $query->where('price', '>', $minPrice);
    }

    public function scopeFilterByDescription($query, $description)
    {
        return $query->where('description', 'like', '%' . $description . '%');
    }
}
