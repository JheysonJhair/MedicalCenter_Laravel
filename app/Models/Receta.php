<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recetum
 * 
 * @property string $idReceta
 * @property int $numero
 * @property string|null $descripcion
 * @property Carbon $fecha
 * @property string $idEstudiante
 * 
 * @property Estudiante $estudiante
 * @property Collection|RecetaMedicamento[] $receta_medicamentos
 *
 * @package App\Models
 */
class Recetum extends Model
{
	protected $table = 'receta';
	protected $primaryKey = 'idReceta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'numero' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'numero',
		'descripcion',
		'fecha',
		'idEstudiante'
	];

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idEstudiante');
	}

	public function receta_medicamentos()
	{
		return $this->hasMany(RecetaMedicamento::class, 'idReceta');
	}
}
