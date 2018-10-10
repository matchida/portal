<?php
/**
 * WorkInfoController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\WorkInformation;
use Illuminate\Http\Request;

class WorkInfoController extends Controller
{
    public function index() {

        return view('work', [
            'title' => '常駐先情報',
        ]);
    }
}
