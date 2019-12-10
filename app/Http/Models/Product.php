<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Http\Models
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property integer $price
 * @property integer $quantity
 * @property integer $category_id
 * @property integer $top
 * @property integer $best
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Category $category
 * @property File[] $files
 */
class Product extends Model {

    public $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

     public function files()
     {
         return $this->hasMany(File::class);
}    }
