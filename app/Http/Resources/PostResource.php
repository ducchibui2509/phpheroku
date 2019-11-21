<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'title'=>$this->title,
            'image' =>"/storage/" . $this->image,
            'total_comments' => $this->total_comments,
            'avg_rating' => $this->avg_rating,
            'updated_at'=> $this-> updated_at,
            'created_at'=> $this-> created_at
        ];
        //return parent::toArray($request);
    }
}
