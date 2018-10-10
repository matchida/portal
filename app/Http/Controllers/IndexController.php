<?php
/**
 * IndexController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('index', [
            'title' => 'Portal',
        ]);
    }
}
