<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTest()
    {

        $user = User::find(1)->like;


        return response()->json([

            'user' => $user

        ]);


    }

    public function getInverseTest()
    {

        $like = Like::find(1);
        $user_id = $like->user_id;
        // $user=User::find($user_id);
        $notification = $like->notification;
        // $tooti = $like->tooti;
        // $user = $like->user;


        return response()->json([

            'user' => $notification

        ]);

    }
}
