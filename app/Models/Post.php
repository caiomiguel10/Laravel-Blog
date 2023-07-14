<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['titulo','conteudo','categoria_id','user_id','imagem'];
        
        public function user(){
        return $this->belongsTo(User::class);
        }

        public function categorias(){
            return $this->belongsTo(Categoria::class,'categoria_id');
        }


}
