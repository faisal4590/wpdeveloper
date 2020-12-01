<?php

namespace App\Http\Controllers\DAL;

use App\User;
use App\Repository;


class ViewDAL
{
    public function search_user($username)
    {
        
        $user_list = User::where('username','=',$username)
            ->get();

        if (count($user_list->toArray()) > 0) {
            return $user_list->toArray();
        } else {
            return NULL;
        }
    }

    public function get_user_repo_from_db($user_id)
    {
        $repo_list = Repository::where('user_id','=',$user_id)
            ->get();

        if (count($repo_list->toArray()) > 0) {
            return $repo_list->toArray();
        } else {
            return NULL;
        }
    }
}
