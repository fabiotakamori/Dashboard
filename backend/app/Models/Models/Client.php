<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
    protected $fillable = ['name', 'email', 'phone'];
    use HasFactory;
}
/*
Explicação do Eloquent/Model
https://imasters.com.br/back-end/como-criar-as-models-do-seu-projeto-com-eloquent-no-laravel
 */