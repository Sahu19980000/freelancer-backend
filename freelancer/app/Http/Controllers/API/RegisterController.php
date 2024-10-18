<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

use function PHPUnit\Framework\countOf;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {

        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'country'    => 'required',
            'joinas'     => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['country'] =  $user->country;
        $success['joinas'] =  $user->joinas;
        $success['is_email_verified'] =  $user->is_email_verified;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }



    /**
     * email verify api
     *
     * @return \Illuminate\Http\Response
     */


    public function sendVerfyEmail($email)
    {
        // return $email;
        if (auth()->user()) {

            $user = User::where('email', $email)->get();
            if (count($user) > 0) {

                // return $user[0]['id'];
                $encrypted = Crypt::encrypt($email);
                $random = Str::random(40);
                $domain = URL::to('/');
                // $url = $domain.'/verify-mail/'.$random;
                  $url = $domain.'/emailveryfication/'.$encrypted;


                $data['url'] = $url;
                $data['email'] = $email;
                $data['title'] = "Email Verification";
                $data['body']  = "please click here to verify your mail";

                Mail::send('verifyMail', ['data' => $data], function ($message) use ($data) {
                    $message->to($data['email'])->subject($data['title']);
                });

                $user = User::find($user[0]['id']);
                $user->remember_token = $random;
                $user->save();

                return response()->json(['success' => true, 'msg' => 'Mail Send Successfully.']);
            }
        } else {
            return response()->json(['success' => false, 'msg' => 'User is not Authenticated.']);
        }
    }
    
    public function EmailVerfication($email)
    {
        // return $email;
        $decrypted = Crypt::decrypt($email);
        $uid = User::where('email','=',$decrypted)->pluck('id')->first();
        $user = User::find($uid);
        $user->is_email_verified = 1;
        $user->update();
        return view('email_verify');
    }
    

}
