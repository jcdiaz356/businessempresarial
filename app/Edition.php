<?php namespace Businessempresarial;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model {

	//Una Edición coniene muchas Notas

    public function notes(){

        return $this->hasMany(Note::class);
    }



}
