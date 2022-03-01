<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Device;
use App\Models\Following;
use App\Models\Like;
use App\Models\Notification;
use App\Models\User;

use App\Models\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTest()
    {

        $result = User::find(1)->tooti;


        return response()->json([

            'result' => $result

        ]);


    }

    public function getInverseTest()
    {

        $result = View::find(5)->user;


        return response()->json([
            'result' => $result
        ]);

    }
}
