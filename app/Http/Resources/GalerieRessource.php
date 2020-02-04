<?php

namespace App\Http\Resources;

use App\GalerieModel;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class GalerieRessource extends JsonResource
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
            'id' => $this->id,
            'order' => $this->order,
            'id_photo' => $this->id_photo,
        ];
    }
}
