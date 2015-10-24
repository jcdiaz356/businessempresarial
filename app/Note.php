<?php namespace Businessempresarial;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	//Una nota pertenece a una categoria
    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }


    // Una Nota pertenece a una edición
    public function edition() {
        return $this->belongsTo(Edition::class,'edition_id');
    }


    //Una nota contiene muchos comentarios
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //Una nota contiene muchos archivos media

    public function medias(){
        return $this->hasMany(Media::class);

    }


    // results in a "problem", se examples below
    public function medias_available() {
        return $this->medias()->where('state','=', 1);
    }

}
