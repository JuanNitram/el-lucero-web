<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Inscripcion as ModelInscripciones;

class InscripcionesController extends Controller
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

        $data['inscripciones'] = ModelInscripciones::all();

        $data['section'] = 'Inscripciones';

        $data['url'] = '/inscripciones';
        
        return view('admin.inscripciones.home')->with($data);        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function search(Request $request){
        $from_date = date_to_YMD_format_00($request->from_date);
        $to_date = date_to_YMD_format_23($request->to_date);    
        $query = ModelInscripciones::whereBetween('created_at', [$from_date, $to_date])->orderBy('created_at', 'desc')->get();

        return response()->json([
            "data" => $query,
        ]);
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
       ModelInscripciones::find($id)->delete();

       return response()->json([
           "status" => "OK",
       ]);  
    }
}
