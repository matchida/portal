<?php
/**
 * PortalController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\UserInformation;
use Illuminate\Http\Request;
use DateTime;

class PortalController extends Controller
{
    public function index() {
        // @TODO ログイン機能(ローカルでしか使わんけんいらんかも)

        // @TODO ログインユーザの情報を取得
        $userInfo = $this->__getUserInfo(1);

        return view('top', [
                'title' => 'Portal',
                'userInfo' => $userInfo,
        ], $userInfo);
    }

    /**
     * function __getUserInfo
     * ユーザIDよりログインユーザの情報を取得
     * 
     * @param  int userId
     * 
     * @return array
     */
    private function __getUserInfo(int $userId) {
        $array = array();
        // @TODO ログインユーザの情報を取得
        $user = User::get(['user_id', 'user_type', 'group_id'])
                    ->where('user_id', $userId)
                    ->where('del_flg', UserInformation::DEL_FLG_FALSE)
                    ->toArray();

        // 存在確認
        if (empty($user)) {
            return array();
        }
        
        $userInfo = UserInformation::get()->where('user_id', $userId)->toArray();

        // 存在確認
        if (empty($user)) {
            return array();
        }
        
        $array = [
            'user_id' => $user[0]['user_id'],
            'user_type' => $user[0]['user_type'],
            'group_id' => $user[0]['group_id'],
            'user_name' => $userInfo[0]['first_name'] . ' ' . $userInfo[0]['last_name'],
            'birthday' => date('Y年m月d日', strtotime($userInfo[0]['birthday'])),
            'joined' => date('Y年m月d日', strtotime($userInfo[0]['joined'])),
            'like_program' => $userInfo[0]['like_program'],
            'like_database' => $userInfo[0]['like_database'],
            'interested' => $userInfo[0]['interested'],
            'listening' => $userInfo[0]['listening'],
            'comment' => $userInfo[0]['comment'],
        ];

        $joinedDay = explode('-', $userInfo[0]['joined']);
        $array['working_year'] = $this->__calcWorkingYearFromJoined($joinedDay[0], $joinedDay[1], $joinedDay[2]) . '年';

        return $array;
    }

    /**
     * function __calcWorkingYearFromJoined
     * 入社日より勤続年数を求める
     * 
     * @param string  $year  年
     * @param string  $month 月
     * @param string  $day   日
     * 
     * @return string $year  勤続年数
     */
    private function __calcWorkingYearFromJoined(string $year, string $month, string $day) {
        $now = new DateTime();
        $joinedDay = new DateTime($year.sprintf('%02d', $month). sprintf('%02d', $day));
        $interval = $now->diff($joinedDay);

        return $interval->y;
    }
}
