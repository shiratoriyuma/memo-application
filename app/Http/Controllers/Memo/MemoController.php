<?php

namespace App\Http\Controllers\Memo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function memoRegister(Request $request, $id)
    {
        $data = $request->all();
        $usersId = $id;

        Memo::insertGetId([
            'users_id' => $usersId,
            'memos_title' => $data['title'],
            'memos_text' => $data['text']
        ]);

        return view('home', compact('usersId'));
    }
}
