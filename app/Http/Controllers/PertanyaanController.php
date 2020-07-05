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
        return view('tugasCRUD.pertanyaan.index', compact('items'));
    }

    public function create() {
        return view('tugasCRUD.pertanyaan.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $dt = array("tanggal_dibuat" => Carbon::now('Asia/Jakarta')->toDateTimeString());
        $data = array_merge($data, $dt);
        $item = PertanyaanModel::save($data);
        if($item){
            return Redirect::to('/pertanyaan');
        }
        else{
            return view('tugasCRUD.exception');
        }
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::findById($id);
        return view('tugasCRUD.pertanyaan.formEdit', compact('pertanyaan'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $dt = array("tanggal_diperbarui" => Carbon::now('Asia/Jakarta')->toDateTimeString());
        $data = array_merge($data, $dt);
        $item = PertanyaanModel::update($data, $id);
        $link = "/jawaban/" . $id;
        return Redirect::to($link);
    }

    public function delete($id) {
        $delete = PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }

}
