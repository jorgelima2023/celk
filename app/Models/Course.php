<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // indicar o nome da tabela.  demonstrado aqui para fins didaticos
    // nome da tabela sempre no plural
    protected $table = 'courses';

    // indicar quais colunas devem receber dados, sempre que alterar tabela, deve descrever aqui
    // ex.: protected $fillable = ['name', 'price', 'descricao'];
    protected $fillable = ['name', 'price'];

}
