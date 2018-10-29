<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    /**
     * 
     * @param $table table name
     */
    protected $table = 'tbl_user';

    // 更新対象(テーブル定義にない)ではないため、nullとする
    const CREATED_AT = null;
    const UPDATED_AT = null;

    /**
     * Function _getLastUserId
     * 登録されている最後のユーザIDに+1をして返却
     * 
     * @return int $userId
     */
    public function _getLastUserId() {
        $user = DB::table($this->table)
            ->select('user_id')
            ->orderBy('user_id')
            ->first();
        
        return $user->user_id + 1;
    }
}
