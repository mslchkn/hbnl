<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Http\Models
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property int $active
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model {

    public $table = 'users';


}
