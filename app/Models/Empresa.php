<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'localidade',
        'poboacion'	,
        'actividade',
        'telefono',
        'fax',
        'persoa_contacto',
        'ofertas_contratacion',
        'ofertas_formacion',
        'notas'
    ];
}


// codpostal,databaja,dataprimeirocontacto,email,enderezo,fax,localidade,nome,notabaja,numtrabajadores,observacions,outrarelacionconcelleria,tfnofijo,tfnomovil,web,actividade_id,centro_id,orientador_id,provincia_id