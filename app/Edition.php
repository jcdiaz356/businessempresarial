<?php namespace Businessempresarial;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model {

	//Una Edici�n coniene muchas Notas

    public function notes(){

        return $this->hasMany(Note::class);
    }



}
