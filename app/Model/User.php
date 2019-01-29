<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Model\UserInformation;

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
     * @var ユーザタイプ
     */
    const USER_TYPE = [
        '1' => '主任',
        '2' => 'リーダー',
        '3' => 'メンバー',
    ];

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

    /**
     * Function _getuserByUserId
     * ユーザIDを元にユーザの基本情報を取得する
     *
     * @param  string $id ユーザID
     * @return array  ユーザ情報
     */
    public function _getuserByUserId($id) {
        $ret = [];
        $user = self::where('tbl_user.user_id', $id)
            ->join('tbl_user_information', 'tbl_user.user_id', '=', 'tbl_user_information.user_id')
            ->get();

        // 存在チェック
        if (!count($user)) {
            return $ret;
        }

        $user = $user[0];
        $ret['user_id'] = $user->user_id;
        $ret['user_type'] = self::USER_TYPE[$user->user_type];
        $ret['group'] = !empty($user->group_id) ? $user->group_id : '';
        $ret['group'] = !empty($user->group_id) ? self::GROUP_NAME[$user->group_id] : '';
        $ret['name'] = $user->first_name . ' ' . $user->last_name;
        $ret['email'] = $user->email;
        $ret['birthday'] = !empty($user['birthday']) ? date('Y年n月j日', strtotime($user['birthday'])) : '';
        $ret['joined'] = !empty($user['joined']) ? date('Y年n月j日', strtotime($user['joined'])) : '';
        $ret['program'] = $user->like_program;
        $ret['database'] = $user->like_database;
        $ret['interested'] = $user->interested;
        $ret['listening'] = $user->listening;
        $ret['comment'] = $user->comment;

        return $ret;
    }

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
