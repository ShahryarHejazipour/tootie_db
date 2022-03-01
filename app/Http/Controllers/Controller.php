<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Device;
use App\Models\Following;
use App\Models\Image;
use App\Models\Like;
use App\Models\Mention;
use App\Models\Notification;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tooti;
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

        $result = User::find(1)->mentioned;


        return response()->json([
            'result' => $result
        ]);


    }

    public function getInverseTest()
    {

        $result = Mention::find(1)->userMentioned;


        return response()->json([
            'result' => $result
        ]);

    }
}
