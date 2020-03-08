<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table ='menu'; 
    protected $fillable =['nombre','url','icono'];   //cuales son los campos de la BD de este modelo que se crearán masivamente o sea que se permitiran ingresar de forma masiva
    //fillable ayuda con la seguridad del proyecto
    protected $guarded =['id']; //evitará que ingresen datos para hacer daño
}
