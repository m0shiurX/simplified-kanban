<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "created_at" => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
            "deleted_at" => $this->deleted_at === null ? null : Carbon::parse($this->deleted_at)->format('Y-m-d H:i:s')
        ];
    }
}
