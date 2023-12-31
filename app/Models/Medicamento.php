<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 * 
 * @property string $idMedicamento
 * @property string $codigo
 * @property string $nombre
 * @property string|null $tipo
 * @property string|null $descripcion
 * @property Carbon $fechaVencimiento
 * @property int $stock
 * 
 * @property Collection|RecetaMedicamento[] $receta_medicamentos
 *
 * @package App\Models
 */
class Medicamento extends Model
{
	protected $table = 'medicamento';
	protected $primaryKey = 'idMedicamento';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fechaVencimiento' => 'datetime',
		'stock' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'tipo',
		'descripcion',
		'fechaVencimiento',
		'stock'
	];

	public function receta_medicamentos()
	{
		return $this->hasMany(RecetaMedicamento::class, 'idMedicamento');
	}
}
