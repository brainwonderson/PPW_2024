<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public $status;
    public $message;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->status  = $status;
        $this->message = $message;
    }

    public function toArray(Request $request): array
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->resource,
            'links'     => $this->when($this->resource !== null, [
                [
                    'rel' => 'self',
                    'href' => route('posts.show', ['post' => $this->id]),
                    'method' => 'GET',
                ],
                [
                    'rel' => 'update',
                    'href' => route('posts.update', ['post' => $this->id]),
                    'method' => 'PUT',
                ],
                [
                    'rel' => 'delete',
                    'href' => route('posts.destroy', ['post' => $this->id]),
                    'method' => 'DELETE',
                ],
                [
                    'rel' => 'create',
                    'href' => route('posts.store'),
                    'method' => 'POST',
                ]
            ])
        ];
    }
}
