<?php

namespace App\Http\Controllers;

use App\Models\Trick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrickController extends Controller
{
    //トップページの情報取得と受け渡し
    public function toppage()
    {
        $user = Auth::user();
        if($user){              //ログイン中ならサジェストの内容をカスタマイズ取得
            $suggestions = Trick::getSuggestions($user->tags);
        } else {
            $suggestions = null;
        };
        return view('toppage',compact('suggestions'));
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        return to_route('toppage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tricks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //エラー処理を後々
        $trick = Trick::create([
            'user_id' => $request->user_id,
            'question_id' => $request->question_id,
            'title' => $request->title,
            'body' => $request->body,
            // 'tags' =>
        ]);

        if(isset($trick)){//これで書き込みが成功したとみなせるのか？ここに書き込み成功画面を表示しリダイレクトさせるか、showで書き込み成功と表示する

        }


        // return to_route('tricks.show', ['trick' => $trick, 'newCreatedFlag' => true]);
        return to_route('tricks.show',compact('trick'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Trick $trick, bool $newCreatedFlag = false)
    {
        // dd($newCreated);
        return view('tricks.show', compact('trick','newCreatedFlag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trick $trick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trick $trick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trick $trick)
    {
        //
    }
}
