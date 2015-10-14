<?php namespace Businessempresarial;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//Una Categoria tiene muchas Notas

    public function notes(){

        return $this->hasMany(Note::class);
    }




}
