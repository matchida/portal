<?php

namespace app\Model;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    protected $table = 'tbl_user_information';

    /**
     * @var 削除フラグ 0:無効 1:有効
     */
    const DEL_FLG_FALSE = 0;

    /**
     * Function getData
     * ユーザ情報を取得
     * 
     * @return array
     */
    public function getData() {
        return array('user' => 'takahiro');
    }
}
