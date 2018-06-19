<?php

namespace Ntwklr\Shariff\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Ntwklr\Shariff\Services\Backend;

class ShariffController extends BaseController
{
    public function backend(Request $request, Backend $shariff)
    {
        if ($request->query->has('url')) {
            \Log::notice("Looking up Statistics for: {$request->query->get('url')}");

            return $shariff->get($request->query->get('url'));
        }

        return $shariff->get($request->getSchemeAndHttpHost());
    }
}