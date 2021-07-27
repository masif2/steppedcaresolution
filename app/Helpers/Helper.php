<?php

use Illuminate\Support\Facades\Auth;
//
if (!function_exists('user_email')) {
    function user_email()
    {
        //
        $email = Auth::user()->email;
        //
        return $email;
    }
}

//
if (!function_exists('users_roles')) {
    function users_roles()
    {
        //
        $roles = ["Admin", "Manager", "User"];
        //
        return  $roles;
    }
}
//

//
if (!function_exists('user_status')) {
    function user_status()
    {
        //
        $roles = ["Active", "Disable"];
        //
        return  $roles;
    }
}

//
if (!function_exists('created_BY')) {
    function created_BY($id)
    {
        //
        $user = \DB::table("users")->select(DB::raw("CONCAT(firstname,lastname) as username"))->where("id", $id)->get()->first();
       
        if (!empty($user)) {
            return $user->username;
        } else {
            return null;
        }

        //
    }
}

//
if (!function_exists('updated_BY')) {
    function updated_BY($id)
    {
        //
        $user = \DB::table("users")->select(DB::raw("CONCAT(firstname,lastname) as username"))->where("id", $id)->get()->first();
        if (!empty($user)) {
            return $user->username;
        } else {
            return null;
        }
        //
    }
}
//
