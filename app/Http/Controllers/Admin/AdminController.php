<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User as ModelUser;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::guest()){
            return Redirect::to('auth/login');
        }
        
        $data = array();

        $data['section'] = 'Home';

        $data['url'] = '/';
        
        return view('admin.home')->with($data);
    }

    public function administradores()
    {
        $data = array();
        if(Auth::guest()){
            return Redirect::to('auth/login');
        }

        $data['users'] = ModelUser::all();

        $data['section'] = 'Administradores';

        $data['url'] = '/administradores';
        
        return view('admin.administradores.home')->with($data);
    }

    public function create()
    {
        $data['section'] = 'Administradores - Nuevo';

        $data['url'] = '/administradores/nuevo';
        
        return view('admin.administradores.new')->with($data);
    }

    public function save_create(Request $request)
    {
        $data = $request->all();
        ModelUser::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $this->administradores();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
