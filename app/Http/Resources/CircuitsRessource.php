<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CircuitsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //Formatage des données
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'image'=>$this->image,
            'difficulte'=>$this->difficulte,
            'description'=>$this->description
        ];
    }
}
