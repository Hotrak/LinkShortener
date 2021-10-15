<?php

namespace App\Services;

use App\Models\v1\Link;

class LinkService {
    public function getShortLinks()
    {
        return Link::all();
    }

    public function createShortLink($link, $userId)
    {
        return Link::create([
            'name' => $link,
            'user_id' => $userId,
        ]);
    }

    public function getUserLinks($userId){
        return Link::where('user_id', $userId)->get();
    }
}
