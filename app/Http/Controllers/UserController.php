<?php
/**
 * Created by PhpStorm.
 * User: CaguCT
 * Date: 5/17/17
 * Time: 11:41
 */

namespace App\Http\Controllers;

use DB;
//use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Показать список всех пользователей приложения.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);

        return view('user.index', ['users' => $users]);
    }
}