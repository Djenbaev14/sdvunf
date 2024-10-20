<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildrenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_qr' => $this->name_qr,
            'name_uz' => $this->name_uz,
            'name_ru' => $this->name_ru,
            'slug' => $this->slug,
        ];
    }
}
