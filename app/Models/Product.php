<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $Nombre
 * @property $Paterno
 * @property $Materno
 * @property $Edad
 * @property $Sexo
 * @property $Calle
 * @property $NumINT
 * @property $NumEXT
 * @property $Colonia
 * @property $Municipio
 * @property $Estado
 * @property $Intereses
 * @property $DestinoPref
 * @property $Tipohab
 * @property $IngresoMens
 * @property $Viajesalanio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Paterno' => 'required',
		'Materno' => 'required',
		'Edad' => 'required',
		'Sexo' => 'required',
		'Calle' => 'required',
		'NumINT' => 'required',
		'NumEXT' => 'required',
		'Colonia' => 'required',
		'Municipio' => 'required',
		'Estado' => 'required',
		'Intereses' => 'required',
		'DestinoPref' => 'required',
		'Tipohab' => 'required',
		'IngresoMens' => 'required',
		'Viajesalanio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Paterno','Materno','Edad','Sexo','Calle','NumINT','NumEXT','Colonia','Municipio','Estado','Intereses','DestinoPref','Tipohab','IngresoMens','Viajesalanio'];



}
