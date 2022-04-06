<?php

namespace App\Http\Resources;
use App\Http\Resources\JobResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplyResource extends JsonResource
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
            'job_info' => new JobResource($this->jobs),
            'user-info'=> new UserResource($this->users)
        ];
    }
}
