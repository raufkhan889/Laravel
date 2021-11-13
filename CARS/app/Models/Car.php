<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'founded', 'description', 'image_path', 'user_id'];

    // json is going to hide these, also works for toArray()
    // protected $hidden = ['created_at'];

    // json is only going to get these (whitelist), also works for toArray()
    // protected $visible = ['id', 'name', 'founded', 'description'];

    // cars -> car_models 
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    // cars -> headquarters
    public function headquarters()
    {
        return $this->hasOne(Headquarter::class);
    }

    // cars -> car_models -> engines 
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    // cars -> car_models -> car_production_dates
    public function carProductionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    // cars -> car_products <- products (many-to-many)
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
