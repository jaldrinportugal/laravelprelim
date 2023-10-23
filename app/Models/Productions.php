<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productions extends Model
{
    use HasFactory;
    
    protected $table= "product";
    protected $fillable= ["ProductName", "Description" , "Price", "QuantityInStock"];
    protected $primaryKey =["ProductID"];
}
