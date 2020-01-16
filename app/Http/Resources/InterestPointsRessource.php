<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InterestPointsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        $type = new InterestPointTypesRessource($this->type); // Ici nous utilisons cette méthode pour envoyer un seul "array"

        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'coordonnees'=>$this->coordonnees,
            'types'=>$type,
        ];
    }
}
