<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Group;

class GroupController extends Controller
{
    public function index() {
        return view('groups.index', [
            'title' => 'Groups',
            'groups' => Group::all(),
        ]);
    }
}
