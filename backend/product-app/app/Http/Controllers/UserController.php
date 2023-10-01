<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list() {
        $user = User::get();

        return view('dashboard.user', compact('user'));
    }

    public function create(Request $request) {
        // dd($request->all());
        $this->validate(
            $request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|max:12',
        ], [
            'required' => 'Form Tidak Boleh Kosong!',
            'unique' => 'Email sudah terdaftar!',
        ]);

        $data = $request->all();
        $password = Str::random(6);
        $data['password'] = bcrypt($password);
        $data['role'] = 2;

        if(!$request->status) {
            $data['status'] = 0;
        }

        User::create($data);
        return redirect('/users')->with('status', 'Registrasi berhasil. Password : ' . $password);
    }

    public function update(User $user, Request $request) {
        $this->validate(
            $request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:12',
        ], [
            'required' => 'Form Tidak Boleh Kosong!',
            'unique' => 'Email sudah terdaftar!',
        ]);


        $data = $request->all();
        $user->update($data);
        return redirect('/users')->with('status', 'Edit Data berhasil');
    }

    public function edit($id) {
        $data = User::find($id);
        return view('dashboard.edit_user', compact('data'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/users')->with('status', 'Data User Berhasil dihapus');
    }

}
