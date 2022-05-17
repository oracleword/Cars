<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
 
    protected $table = 'cars';

    protected $primaryKey = 'id';

    public function carmodels()
    {
        return $this->hasMany(carModel::class);
    }

//hasMany throughrelationship
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class, 
            'car_id', 
            'model_id'
        ); 
    }

    //has 

    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class, 
            CarModel::class, 
            'car_id', 
            'model_id'
        ); 
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class);
    // }
}
