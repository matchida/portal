<?php
/**
 * WorkInfoController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\UserInformation;
use App\Model\WorkInformation;
use Illuminate\Http\Request;

class WorkInfoController extends Controller
{
    /**
     * Function index
     * 
     */
    public function index() {

        // @TODO ログイン機能
        $userId = User::get(['user_id'])
                    ->where('user_id', 1)
                    ->where('del_flg', UserInformation::DEL_FLG_FALSE)
                    ->toArray()[0]['user_id'];
        $workInfo = $this->__getWorkInfoByUserId($userId);

        return view('work', [
            'title' => '常駐先情報',
            'workInfo' => $workInfo,
        ]);
    }

    /**
     * Function __getWorkInfoByUserId
     * ユーザIDより常駐先情報を取得する
     * 
     * @param  int $userId ユーザID
     * 
     * @return array
     */
    private function __getWorkInfoByUserId($userId) {
        $array = array();

        $workInfo = WorkInformation::get()->where('user_id', $userId)->toArray();

        // 存在確認
        if (empty($workInfo)) {
            return array();
        }

        $array = [
            'vendor' => $workInfo[0]['vendor_name'] . '様',
            'anken' => $workInfo[0]['anken_name'],
            'place' => $workInfo[0]['station'],
            'start_time' => date('H:i', strtotime($workInfo[0]['start_time'])),
            'end_time' => date('H:i', strtotime($workInfo[0]['end_time'])),
            'start_brake_time' => date('H:i', strtotime($workInfo[0]['start_brake_time'])),
            'end_brake_time' => date('H:i', strtotime($workInfo[0]['end_brake_time'])),
            'start_agreement' => date('Y年m月d日', strtotime($workInfo[0]['start_agreement'])),
            'end_agreement' => date('Y年m月d日', strtotime($workInfo[0]['end_agreement'])),
            'unit_price' => $workInfo[0]['unit_price'] . '万',
            'tool' => $workInfo[0]['tool'],
        ];

        return $array;
    }
}
