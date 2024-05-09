<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $table='customer';
    protected $primaryKey='customer_id';

    public function setFullNameAttribute($value){
        $this->attributes['full_name'] = ucwords($value);
    }
}
