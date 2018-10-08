<?php
/**
 * PortalController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index() {
        // @TODO ログインユーザの情報を取得 ログイン機能未実装
        $user = User::get(['user_id', 'user_type', 'group_id'])->where('user_id', '1')->toArray();
        return view('top', [
            'title' => 'Portal',
            'user' => $user,
        ]);
    }
}
