<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ControlPaciente
 * 
 * @property string $idControl
 * @property string $examenFisico
 * @property float $temperatura
 * @property string $PA
 * @property string|null $FC
 * @property string|null $FR
 * @property float $peso
 * @property float $talla
 * @property string|null $IMC
 * @property Carbon|null $fecha
 * @property string $idEstudiante
 * 
 * @property Estudiante $estudiante
 *
 * @package App\Models
 */
class ControlPaciente extends Model
{
	protected $table = 'control_paciente';
	protected $primaryKey = 'idControl';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'temperatura' => 'float',
		'peso' => 'float',
		'talla' => 'float',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'examenFisico',
		'temperatura',
		'PA',
		'FC',
		'FR',
		'peso',
		'talla',
		'IMC',
		'fecha',
		'idEstudiante'
	];

	public function estudiante()
	{
		return $this->belongsTo(Estudiante::class, 'idEstudiante');
	}
}
