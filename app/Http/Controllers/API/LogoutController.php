<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(): JsonResponse
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();
        return response()->json([
            'status' => true,
            'message' => 'User Logged out Successfully' ]);
    }
}
