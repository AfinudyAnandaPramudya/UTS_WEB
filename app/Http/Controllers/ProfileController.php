<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index() {
        $breadcrumb = (object) [
            'title' => 'Profile',
            'list' => ['Home', 'Profile']
        ];

        $page = (object)[
            'title' => 'Pengaturan profil akun'
        ];

        $activeMenu = 'profile';

        return view('profile.index', array(
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ));
    }

    public function updateAvatar(Request $request, string $user_id) {
        $validator = Validator::make($request->all(), [
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal.',
                'msgField' => $validator->errors()
            ]);
        }

        $user = UserModel::find($user_id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Data user tidak ditemukan'
            ]);
        } else {
            if ($user->avatar !== null) {
                $oldFile = 'profile_pictures/' . $user->avatar;

                if (Storage::disk('public')->exists($oldFile)) {
                    Storage::disk('public')->delete($oldFile);
                }
            }

            $fileExtension = $request->file('avatar')->getClientOriginalExtension();
            $fileName = 'profile_' . $user->user_id . '.' . $fileExtension;
            $request->file('avatar')->storeAs('public/profile_pictures', $fileName);

            UserModel::find($user_id)->update([
                'avatar' => $fileName
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Foto profil berhasil diupdate',
                'data' => array(
                    'avatar' => $fileName
                )
            ]);
        }
    }

    public function updateAccount(Request $request, string $user_id) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:3|unique:m_users,username,' . $user_id . ',user_id',
            'nama' => 'required|string|max:100',
            'password' => 'nullable|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal.',
                'msgField' => $validator->errors()
            ]);
        }

        UserModel::find($user_id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password ? bcrypt($request->password) : UserModel::find($user_id)->password
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Akun berhasil diupdate',
            'data' => array(
                'user_id' => $user_id,
                'username' => $request->username,
                'nama' => $request->nama
            )
        ]);
    }
}
