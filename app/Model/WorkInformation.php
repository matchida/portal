<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkInformation extends Model
{
    protected $table = 'tbl_work_information';

    /**
     * @var 削除フラグ 0:無効 1:有効
     */
    const DEL_FLG_FALSE = 0;
}
