<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class MedicineRegister extends Model
{
    protected $fillable = [
       '*'
    ];

    protected $table = 'medicines_register';
}
