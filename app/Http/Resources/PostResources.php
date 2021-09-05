<?php
namespace App\Http\Resources;
namespace App\Http\Resources\PostResources;
use App\Models\post;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
class PostResources extends JsonResource
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
               'description'=>$this->description,
        ];
    }
    public function show(Request $request ,post $post){
        return new PostResources($post);
}
}
