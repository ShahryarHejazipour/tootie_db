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

        ])->send();


    }

    public function getInverseTest()
    {

        $user = Like::find(1);
        $username = $user->user;


        return response()->json([

            $username


        ])->send();

    }
}
