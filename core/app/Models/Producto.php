<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'ecom_productos_apps';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['idapp', 'producto', 'url', 'modelo', 'descripcion_corta'];
    protected $primaryKey = 'idproductoapp';
}
