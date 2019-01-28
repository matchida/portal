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

    /**
     * @var グループ名
     */
    const GROUP_NAME = [
        '111' => '1課1グループ1班',
        '112' => '1課1グループ2班',
        '113' => '1課1グループ3班',
        '121' => '1課2グループ1班',
        '122' => '1課2グループ2班',
        '123' => '1課2グループ3班',
        '211' => '2課1グループ1班',
        '212' => '2課1グループ2班',
        '213' => '2課1グループ3班',
        '221' => '2課1グループ1班',
        '222' => '2課2グループ2班',
        '223' => '2課2グループ3班',
    ];
}
