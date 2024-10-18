<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;


class UserController extends Controller
{
    public function verificationMail($token)
    {
        $user = User::where('remember_token', $token)->get();
        if (count($user) > 0) {

            $datetime = Carbon::now()->format('Y-m-d H:i:s');

            $user = User::find($user[0]['id']);
            $user->remember_token = '';
            $user->is_email_verified = 1;
            $user->email_verified_at = $datetime;
            $user->save();

            return view('verify-success');
        } else {
            return view('404');
        }
    }


    public function update($id, Request $request)
    {

        // dd($request->all());

        $userprofile = User::find($id);
        $userprofile->name = $request->input("name");
        $userprofile->email = $request->input("email");
        $userprofile->country = $request->input("country");
        $userprofile->joinas = $request->input("joinas");
        $userprofile->revenue = $request->input("revenue");


        if ($request->file('profile_photo_path')) {
            $profileimage = $request->file('profile_photo_path');
            $filename = time() . '.' . $profileimage->getClientOriginalExtension();
            $path = public_path('profile_photo_path');
            $profileimage->move($path, $filename);
            $url = url('profile_photo_path/' . $filename); // Generate URL
            $userprofile->profile_photo_path = $url; // Save URL to database
        }


        $userprofile->no_of_employees = $request->input("no_of_employees");

        $userprofile->save();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $userprofile
        ]);
    }
}
