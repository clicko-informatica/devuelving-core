<?php

namespace devuelving\core;

use devuelving\core\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetailModel extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'status', 'order',  'product', 'units', 'unit_price', 'franchise_earning',
    ];

    /**
     * Función para obtener los detalles de un producto
     *
     * @return Product
     */
    public function getProduct()
    {
        return ProductModel::find($this->product);
    }
}
