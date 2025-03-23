<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $guarded = ['id']; // idは自動採番なので、代入不可
}
