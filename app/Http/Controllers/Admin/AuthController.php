<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function view(Request $request)
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|exists:users,login',
            'password' =>'required'
        ]);

        if($validator->fails()) {
            return response(['status'=> false, 'errors' => $validator->errors(), 'data' => []], 400);
        }

        $user = (new User())->where([
            'login' => $request->post('login'), 'password' => md5($request->post('password'))])->first();

        if(!$user) {
            return response(['status'=> false, 'errors' => ['login' => 'User is not exist'], 'data' => []], 400);
        }

        $request->session()->put('app_key', md5($request->post('login') . md5($request->post('password')) . env('APP_KEY')));

        return response(['status'=> true], 200);
    }
}
