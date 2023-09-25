<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerveja extends Model
{
    use HasFactory;

    protected $table = 'cervejas';

    protected $primaryKey = 'id';

    protected $fillable = ['nome','tipo','teoralcolico','preco','quantidade'];
}
