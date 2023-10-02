<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' =>"cant authorize all data",
        ]);
    }
    public function register(UserStoreRequest $request)
    {
        $validated = $request->validated();
        $newUser = User::create($validated);
        return response()->json([
            "attempt" => true,
            "message" => "success"
        ]);
    }
    public function show($username)
    {
        $users = QueryBuilder::for(User::where('username', $username))
            ->get(['name', 'email', 'role_id', 'address','points']);

        return response()->json([
            'user' => $users,
        ]);
    }
}
