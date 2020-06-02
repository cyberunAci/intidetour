<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersRessource extends JsonResource
{
    private $token = null;
    public function __construct($resource, $token = null)
    {
        $this->token = $token;
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->token)) {
            $role =  new RolesResource($this->roles);

            return [
                'id' => $this->id,
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'email' => $this->email,
                'tel' => $this->tel,
                'date_naissance' => $this->date_naissance,
                'photo' => $this->photo,
                'role'=>$role,
                'token' => $this->token,
                'success' => $this->success,
                'circuit' => $this->circuit

            ];
        } else {
            return parent::toArray($request);
        }
    }
}
