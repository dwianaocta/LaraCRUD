<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {

    public static function get_all() {
        $items = DB::table('pertanyaan')->get();
        return $items;
    }

    public static function save($data) {
        $new_item = DB::table('pertanyaan')->insert($data);
        return $new_item;
    }

    public static function findById($id) {
        $item = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->first();
        return $item;
    }

    public static function update($request, $id){
        $item = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi'   => $request['isi'],
                        'tanggal_diperbarui' => $request['tanggal_diperbarui']
                    ]);
        return $item;
    }

    public static function delete($id) {
        $del = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->delete();
        return $del;
    }
}

?>