<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\UserInformation as UserInfo;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserInfo::all();
        return view('users.index', [
            'title' => 'Users',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', [
            'title' => 'Create User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // トランザクション開始
        DB::beginTransaction();
        try {
            // ユーザマスタ情報登録
            $user = new User;
            $userId = $user->_getLastUserId();
            $user->user_id = $userId;
            $user->password = $request->password;
            $user->user_type = $request->user_type;
            $user->save();

            // ユーザ情報登録
            $userInfo = new UserInfo;
            $userInfo->user_id = $userId;
            $userInfo->first_name = $request->first_name;
            $userInfo->last_name = $request->last_name;
            $userInfo->email = $request->email;
            $userInfo->save();
            DB::commit();
        } catch (Exception $e) {
            echo $e->getMessage();
            DB::rollback();
            throw new Exception;
        }
        
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = new User;
        return view('users.show', [
            'title' => $id,
            'user' => $user->_getuserByUserId($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = new User;
        return view('users.edit', [
            'title' => $id,
            'user' => $user->_getuserByUserId($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
