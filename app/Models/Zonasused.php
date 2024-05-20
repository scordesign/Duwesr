<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Productosused
 *
 * @property $id_prod_use
 * @property $desc_prod_use
 * @property $productos_prod_use
 * @property $producto_venta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zonasused extends Model
{
    
    static $rules = [
		 
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_zona_use','desc_zona_use','zona_zon_use','zona_venta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function zona()
    {
        return $this->hasOne('App\Models\Zona', 'id', 'zona_zon_use');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'zona_venta_id');
    }
    

}
