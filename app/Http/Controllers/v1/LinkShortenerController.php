<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkRequest;
use App\Http\Resources\v1\LinkResource;
use App\Models\v1\Link;
use App\Services\LinkService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LinkShortenerController extends Controller
{

    protected $linkService;

    public function __construct(LinkService $linkService)
    {
        $this->linkService = $linkService;
    }

    public function index(){
        return LinkResource::collection($this->linkService->getShortLinks());
    }

    public function store(LinkRequest $request)
    {
        return new LinkResource($this->linkService->createShortLink($request->name, $request->user_id));
    }

    public function userLinks($id){
        return LinkResource::collection($this->linkService->getUserLinks($id));
    }

    public function redirect(Link $link){

        return Redirect::to($link->name);
    }
}
