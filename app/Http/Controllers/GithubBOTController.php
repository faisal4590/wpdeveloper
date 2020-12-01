<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DAL\ViewDAL;
use App\Http\Controllers\DAO\DaoFactory;

use Illuminate\Http\Request;

class GithubBOTController extends Controller
{
    //
    public function search_user(Request $request)
    {
        // dd("reached");
        $username = $request->username;

        $view_dal = new ViewDAL;
        $user_info = $view_dal->search_user($username);

        if (count($user_info) > 0) {
            $response_message = "User found in database!";

            $dao = new DaoFactory;

            $payload = array();
            $payload["response"] = $response_message;
            $payload["user_info"] = $user_info;
            $response = $dao->make_response(200, $payload);
            return $response;
        } else {
            $response_message = "User not found in database!";

            $dao = new DaoFactory;

            $payload = array();
            $payload["response"] = $response_message;
            $response = $dao->make_response(400, $payload);
            return $response;
        }
    }

    public function get_user_repo_from_db(Request $request)
    {
        // dd("reached");
        $user_id = $request->user_id;

        $view_dal = new ViewDAL;
        $repo_list = $view_dal->get_user_repo_from_db($user_id);

        if (count($repo_list) > 0) {
            $response_message = "Repo fetched!";

            $dao = new DaoFactory;

            $payload = array();
            $payload["response"] = $response_message;
            $payload["repo_list"] = $repo_list;
            $response = $dao->make_response(200, $payload);
            return $response;
        } else {
            $response_message = "No repo!";

            $dao = new DaoFactory;

            $payload = array();
            $payload["response"] = $response_message;
            $response = $dao->make_response(400, $payload);
            return $response;
        }
    }
}
