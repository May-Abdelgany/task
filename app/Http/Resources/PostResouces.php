<?php

namespace App\Http\Resources;
namespace App\Http\Resources\postResources;
use App\Models\post;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
class PostResouces extends JsonResource
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
               'title'=>$this->title,
               'descreption'=>$this->descreption,
        ];
    }
    public function show(Request $request ,post $product){
        return new PostResouces($product);
    }
}
