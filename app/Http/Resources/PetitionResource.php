<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this -> id,
            'title'=>ucwords($this->title),
            'description'=>$this->description,
            'category'=>$this->category,
            'author'=>$this->author,
            'signees'=>$this->signees
        ];
    }
}
