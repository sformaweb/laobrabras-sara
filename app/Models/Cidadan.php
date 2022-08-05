<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidadan extends Model
{
    use HasFactory;
    protected $fillable = [
        'addiccions',
        'addiccionsnota',
        'apel1',   // listado
        'apel2',
        'bial',
        'codpostal',
        'databaja',
        'dataincorporacion',
        'datanacemento',
        'desempregadolongaduracion',
        'desempregadolongaduracionnota',
        'discapacidade',
        'discapacidadenota',
        'email',
        'enderezo',
        'exreclusa',
        'exreclusanota',
        'gruposbusca',
        'gruposbuscadata',
        'habilidadessociais',
        'habilidadessociaisdata',
        'lopd',
        'nif',     // listado
        'nome',   // listado
        'notabaja',
        'observacions',
        'orientacion',
        'outrasexclusions',
        'outrasexclusionsnota',
        'residenciadificilaccesibilidade',
        'residenciadificilaccesibilidadenota',
        'responsabilidadesfamiliares',
        'responsabilidadesfamiliaresnota',
        'sexo',
        'spe',
        'tbe',
        'tbedata',
        'tfno1',     // listado
        'tfno2',
        'vehiculopropio',
        'vo',
        'vonota',
        'accionsfe_id',     // foreignId
        'canleacceso_id',    // foreignId
        'datosoutros_id',    // foreignId
        'disponibilidadexeografica_id',    // foreignId
        'emigraciontype_id',    // foreignId
        'interesaautoemprego_id',    // foreignId
        'nacionalidade_id',    // foreignId
        'operador_id',    // foreignId
        'poboacion_idconcello',    // foreignId
        'tipobaixa_id',    // foreignId
        'vvx',
        'vvxnota',
        'updated_at',
        'created_at'
    ];
}



