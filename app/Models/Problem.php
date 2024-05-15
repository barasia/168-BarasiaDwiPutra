<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Problem extends Model
{

    public static function getList()
    {
        $sql = "
            SELECT
                p.*,
                u.name AS user,
                a.name AS assignment

            FROM
                problem AS p
                LEFT JOIN user AS u ON u.id = p.id_user
                LEFT JOIN user AS a ON a.id = p.id_assignment
        ";
        $db = DB::select(DB::raw($sql));

        return $db;
    }
}
