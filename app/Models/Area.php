<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * 
 * @property string $idArea
 * @property string $nombre
 * @property string $tipoServicio
 * @property int $nroPiso
 * @property int $nroSala
 * @property string $horarioAtencion
 * @property string|null $estado
 * @property string|null $descripcion
 * 
 * @property Collection|Citum[] $cita
 * @property Collection|Empleado[] $empleados
 *
 * @package App\Models
 */
class Area extends Model
{
	protected $table = 'area';
	protected $primaryKey = 'idArea';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nroPiso' => 'int',
		'nroSala' => 'int',
		'estado' => 'binary'
	];

	protected $fillable = [
		'nombre',
		'tipoServicio',
		'nroPiso',
		'nroSala',
		'horarioAtencion',
		'estado',
		'descripcion'
	];

	public function cita()
	{
		return $this->hasMany(Citum::class, 'idArea');
	}

	public function empleados()
	{
		return $this->hasMany(Empleado::class, 'idArea');
	}
}
