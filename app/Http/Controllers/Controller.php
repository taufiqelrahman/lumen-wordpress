<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Corcel\Model\Post;

class Controller extends BaseController
{
    //
    public function test()
	{
        // $posts = Post::published()->get();
        $posts = Post::find(264)->post_content;
        return response()->json([
    		"posts" => $posts
    	]);
    }   
}
