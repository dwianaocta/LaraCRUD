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
}

?>