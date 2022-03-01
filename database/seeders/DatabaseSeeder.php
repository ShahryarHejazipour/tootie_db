<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Device;
use App\Models\Follower;
use App\Models\Following;
use App\Models\Hashtag;
use App\Models\HashtagMain;
use App\Models\Image;
use App\Models\Like;
use App\Models\Mention;
use App\Models\Notification;
use App\Models\Profile;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Tooti;
use App\Models\TootiImage;
use App\Models\User;
use App\Models\View;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Tooti::factory(10)->create();
        Bookmark::factory(10)->create();
        Comment::factory(10)->create();
        Device::factory(10)->create();
        Follower::factory(10)->create();
        Following::factory(10)->create();
        Hashtag::factory(10)->create();
        HashtagMain::factory(10)->create();
        Image::factory(10)->create();
        Like::factory(10)->create();
        Mention::factory(10)->create();
        Notification::factory(10)->create();
        Profile::factory(10)->create();
        Role::factory(10)->create();
        TootiImage::factory(10)->create();
        View::factory(10)->create();
        RoleUser::factory(10)->create();

    }
}
