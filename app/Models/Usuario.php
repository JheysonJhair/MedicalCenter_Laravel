<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property string $idUsuario
 * @property string|null $usuario
 * @property string|null $contraseña
 * @property string $idEmpleado
 * 
 * @property Empleado $empleado
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'usuario',
		'contraseña'
	];

	public function empleado()
	{
		return $this->belongsTo(Empleado::class, 'idEmpleado');
	}
}
