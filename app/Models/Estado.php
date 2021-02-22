<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
    ];

    public function address()
    {
        return $this->hasMany(Address::class, 'id_estado', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'addresses' ,'id_user', 'id_estado');
    }
}
