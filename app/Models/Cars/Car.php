<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Car extends EloquentModel
{
    use HasFactory;

    protected $fillable = ['vin', 'description', 'color', 'price', 'registration', 'brand_id', 'model_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

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
