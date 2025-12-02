<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // --- 会員登録関連 ---

    // 1. 入力画面表示
    public function showRegister()
    {
        return view('auth.register');
    }

    // 2. 入力内容のチェック -> セッション保存 -> 確認画面へ
    public function postRegister(Request $request)
    {
        // バリデーション（入力チェック）
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'address' => 'required|max:255', // 住所追加
        ], [
            // エラーメッセージの日本語化（簡易）
            'name.required' => '氏名は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'password.required' => 'パスワードは必須です。',
            'address.required' => '住所は必須です。',
        ]);

        // セッションに一時保存（確認画面で使うため）
        $request->session()->put('register_data', $validated);

        // 確認画面へリダイレクト
        return redirect()->route('register.check');
    }

    // 3. 確認画面表示
    public function check(Request $request)
    {
        // セッションからデータ取得
        $data = $request->session()->get('register_data');

        // データがない場合（直接アクセスなど）は入力画面に戻す
        if (!$data) {
            return redirect()->route('register');
        }

        return view('auth.check', ['data' => $data]);
    }

    // 4. 登録実行（DB保存）
    public function complete(Request $request)
    {
        $data = $request->session()->get('register_data');

        if (!$data) {
            return redirect()->route('register');
        }

        // ユーザー作成
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // 暗号化
            'address' => $data['address'],
        ]);

        // セッションデータを削除
        $request->session()->forget('register_data');

        // ログイン画面へ移動
        return redirect()->route('login')->with('success', '会員登録が完了しました。ログインしてください。');
    }

    // --- ログイン関連 ---

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('top');
        }

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが違います。',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}