<?php
namespace App\Http\Controllers\Api;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        //set validation
    15    $validator = Validator::make($request->all(), [
    16    'username' => 'required',
    17    'nama' => 'required',
    18    'password' => 'required|min:5|confirmed',
    19    'level_id' => 'required'
    20]);
    21//if validations fails
    22if($validator->fails()){
    23    return response()->json($validator->errors(), 422);
    24}
    25//create user
    26$user = UserModel::create([
    27    'username' => $request->username,
    28    'nama' => $request->nama,
    29    'password' => bcrypt($request->password),
    30    'level_id' => $request->level_id,
    31]);
    32//return response JSON user is created
    33if($user){
    34    return response()->json([
    35        'success' => true,
    36        'user' => $user,
    37    ], 201);
    38}
    39//return JSON process insert failed
    40return response()->json([
    41    'success' => false,
    42],
    }
}