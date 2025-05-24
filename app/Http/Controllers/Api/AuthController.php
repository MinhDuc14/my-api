<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'message' => 'Sai email hoặc mật khẩu.',
                'status' => 401,
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'status' => 200,
            'message' => 'Đăng nhập thành công.',
            'user' => $user,
            'token' => $token,
        ]);
    }
}