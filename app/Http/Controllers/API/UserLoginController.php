<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function loginUser(Request $request): JsonResponse
    {
        $validateUser = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validateUser->fails()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors(),
                ], 401
            );
        }
        if (!Auth::attempt($request->only([ 'username', 'password' ]))) {
            return response()->json([
                'status' => false,
                'message' => 'Username & Password doesn\'t match',
            ], 401);
        }
        $user = User::whereUsername($request->username)->first();
        return response()->json([
            'status' => true,
            'message' => 'User Logged in Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }

    public function getUser(): JsonResponse
    {
        $user = Auth::user();
        $user->profile_image = storage_path($user->profile_image);
        return response()->json($user);
    }
}
