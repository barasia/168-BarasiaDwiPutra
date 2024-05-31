<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Model
use App\Models\{
    Problem
};

class HomeController extends Controller
{
    public function index()
    {
        $problems = Problem::getList();

        return view('home', compact('problems'));
    }
    public function detail()
    {
        $problems = Problem::getList();

        return view('detail', compact('problems'));
    }
    public function create()
    {
        $problems = Problem::getList();

        return view('create', compact('problems'));
    }
    public function store()
    {
        $problems = Problem::getList();

        return view('home', compact('problems'));
    }
    public function edit(Request $request)
    {
        $problems = Problem::getList();
        $data = array(
            'id' => $request->id
        );

        return view('edit', $data);
    }
    public function update()
    {
        $problems = Problem::getList();

        return view('home', compact('problems'));
    }
    public function delete()
    {
        $problems = Problem::getList();

        return view('home', compact('problems'));
    }

    public function login(Request $request)
    {

        $query = DB::table('users');
        $query->where('users.email', $request->email);
        $data = $query->first();

        if (isset($data)) {

            // Cek Password
            if ($data->password === crypt($request->password, $data->password)) {

                $token = md5(uniqid($request->email, true));
                $token_expired = date('Y-m-d H:i:s', strtotime(NOW(). ' + 7 days'));
                $model = DB::table('users')
                    ->where('email', $request->email)
                    ->update(['token' => $token, 'token_expired' => $token_expired]);

                $save_auth = Auth::loginUsingId($data->id);

                Session::put('email', $data->email);
                Session::put('user_id', $data->id);
                Session::put('name', $data->name);
                Session::put('token', $token);
                Session::put('login', TRUE);
                return redirect('/');
            }

            return redirect('/login')
                ->with('error', 'Salah Password.');
        } else {

            return redirect('/login')
                ->with('error', 'Data tidak ditemukan');
        }
    }


    public function logout()
    {
        $query = DB::table('users')
                ->where('email', Session::get('email'))
                ->update(['token' => NULL,'token_expired' =>NULL]);

        Session::flush();
        Auth::logout();
        return redirect('login')->with('alert','You Have Been Logged Out.');
    }
}
