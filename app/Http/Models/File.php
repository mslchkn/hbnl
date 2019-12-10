<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * @package App\Http\Models
 *
 * @property int $id
 * @property integer $product_id
 * @property string $path
 * @property string $created_at
 * @property string $updated_at
 */
class File extends Model {

    public $table = 'files';


}
