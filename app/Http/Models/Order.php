<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Http\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $comment
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model {

    public $table = 'orders';


}
