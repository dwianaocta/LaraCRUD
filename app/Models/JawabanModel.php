<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all($idx) {
        $items = DB::table('jawaban')->get();

        $items2 = DB::table('pertanyaan')
            ->where('id', '=', $idx)
            ->get();

        $items3 = DB::table('jawaban')
            ->where('pertanyaan_id', '=', $idx)
            ->get();

        return [$items2, $items3];
    }

    public static function save($data) {
        $new_item = DB::table('jawaban')->insert($data);
        return $new_item;
    }
}


?>