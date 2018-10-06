<?php
/**
 * PortalController.php
 * 
 * @author SEP Machida <smachidatakahiro@se-project.co.jp>
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index() {
        return view('top', [
            'title' => 'Portal',
        ]);
    }
}
