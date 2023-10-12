<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'model'         => $this->model,
            'avatar'        => $this->getAvatar(),
            'name'          => $this->name,
            'brand'         => new BrandResource($this->brand),
            'total_defects' => $this->defects->count(),
            'created_at'    => $this->created_at->diffForHumans(),
            'updated_at'    => $this->updated_at->diffForHumans(),
        ];
    }
}
