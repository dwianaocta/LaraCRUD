<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use Redirect;

class PertanyaanController extends Controller
{
    //
    public function index() {
        $items = PertanyaanModel::get_all();
        //dd($items);
        return view('larahub.pertanyaan.index', compact('items'));
    }

    public function create() {
        return view('larahub.pertanyaan.form');
    }

    public function store(Request $request) {
        //dd($request->all());
        
        $data = $request->all();
        unset($data["_token"]);
        $dt = array("tanggal_dibuat" => Carbon::now('Asia/Jakarta')->toDateTimeString());
        $data = array_merge($data, $dt);
        //dd($data);
        $item = PertanyaanModel::save($data);
        if($item){
            return Redirect::to('/pertanyaan');
        }
        else{
            return view('larahub.exception');
        }
        //return view('larahub.pertanyaan.form');
    }

}
