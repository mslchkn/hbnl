<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 * @package App\Http\Models
 *
 * @property int $id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class OrderProduct extends Model {

    public $table = 'order_products';


}
