<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Notification\NotificationController as Notification;
use App\Http\Controllers\Notification\Template\NotificationTemplateController as NotificationTemplate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login_id' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error'    => 1,
                'errorMsg' => $validator->errors()->all(),
            ]);
        }

        // Define credentials with the login_id field as required by your system
        $credentials = [
            'login_id' => $request->input('login_id'),
            'password' => $request->input('password'),
        ];

        // Attempt to log in with the provided credentials
        if (Auth::attempt($credentials)) {
            return response()->json([
                'error'    => 0,
                'errorMsg' => 'Successfully logged in',
            ]);
        }

        return response()->json([
            'error'    => 1,
            'errorMsg' => 'User info is not correct',
        ]);
    }

    public function getRandomString($len = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $randomString = '';
        for ($i = 0; $i < $len; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'nick_name' => 'required',
            'user_type' => 'required',
            'email'     => 'required|email'
            // 'phone'     => 'required|regex:/^((01)[0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error'    => 1,
                'errorMsg' => $validator->errors()->all(),
            ]);
        }

        $data = $request->except('_token');
        $password = $this->getRandomString(6); // Generate random password
        $data['login_id'] = $this->getRandomString(10); // Generate random login_id
        $data['password'] = bcrypt($password); // Hash the password for storage

        // Create user and get the ID
        $user = User::create($data);

        $loginIdPrefix = substr($request->input('user_type'), 0, 1);
        $loginId = $loginIdPrefix . '-' . $user->id;

        // Update login_id in the database
        $user->update(['login_id' => $loginId]);

        // Send notifications
        $notificationTemplate = NotificationTemplate::set('welcome', [
            'nick_name' => $data['nick_name'],
            'login_id'  => $loginId,
            'password'  => $password,
        ]);

        Notification::send('mail', [
            'to'        => $data['email'],
            'from_name' => $notificationTemplate['from_name'],
            'subject'   => $notificationTemplate['subject'],
            'body'      => $notificationTemplate['mail_body'],
        ]);

        Notification::send('sms', [
            'to'   => $data['phone'],
            'body' => $notificationTemplate['sms_body'],
        ]);

        return view('home/registration_success', ['loginId' => $loginId, 'password' => $password]);
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
