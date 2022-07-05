<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'todo' => [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'due_date' => $this->due_date,
                'is_complete' => $this->is_complete,
            ],
            'success' => true,
            'error' => null,
        ];
    }
}
