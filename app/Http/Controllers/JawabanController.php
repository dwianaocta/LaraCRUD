<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\JawabanModel;
use Redirect;

class JawabanController extends Controller
{
    //
    public function index($idx) {
        $id = $idx;
        $items = JawabanModel::get_all($idx);
        $pertanyaan = $items[0];
        $jawaban = $items[1];
        //dd($id);
        return view('larahub.jawaban.index', compact('pertanyaan', 'jawaban', 'id'));
    }

    public function create($idx) {
        //dd($idx);
        $id = $idx;
        return view('larahub.jawaban.form', compact('id'));
    }

    public function store(Request $request, $idx){
        
        $data = $request->all();
        unset($data["_token"]);
        $dt = array("tanggal_dibuat" => Carbon::now('Asia/Jakarta')->toDateTimeString());
        $pertanyaan_id = array("pertanyaan_id" => $idx);
        $data = array_merge($data, $dt, $pertanyaan_id);
        //dd($data);
        $item = JawabanModel::save($data);
        $link = "/jawaban/" . $idx;
        //dd($link);
        if($item){
            return Redirect::to($link);
        }
        else{
            return view('larahub.exception');
        }
    }
}
