<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    /**
     * 
     * @param $table table name
     */
    protected $table = 'tbl_user_information';

    // 更新対象(テーブル定義にない)ではないため、nullとする
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * @var 削除フラグ 0:無効 1:有効
     */
    const DEL_FLG_FALSE = 0;
}
