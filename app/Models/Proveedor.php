<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        'nombre_empresa',
        'ruc',
        'email',
        'web_site',
        'nombre_contacto_principal',
        'email_contacto_principal',
        'phone_contacto_principal',
        'nombre_razon_social',
        'direccion',
        'telefonos',
        'nombre_representante_legal',
        'cedula_representante_legal',
        'telefono_representante_legal',

        'cuenta_bancaria',
        'banco',
        'swift_bic',
        'documentos_de_solvencia_financiera',

        'descripcion_prod_serv',
        'categoria_prod_serv',
        'certificaciones',
        'credenciales',

        'aviso_operacion',
        'paz_salvos_dgi_y_css',
        'documento_incorporacion_empresa_rp',

        'referencias_comerciales',
        'referencias_bancarias',

        'informes_auditorias',
        'otros',

    ];
    //relaciones
    public function proveedor() {
        return $this->belongsTo(User::class,"user_id");
    }



    //buscador
    public static function search($query = ''){
        if(!$query){
            return self::all();
        }
        return self::where('code', 'like', "%$query%")
        ->orWhere('title', 'like', "%$query%")
        ->get();
    }

    
}
