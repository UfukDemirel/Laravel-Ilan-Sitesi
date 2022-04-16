<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\SettingsModel;
use App\Models\User;
use App\Models\Users;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * * @var User|Model
     * @return RedirectResponse
     * @var SettingsModel|Model
     * @var Advert|Model
     */

    public $user;
    public $settingsModel;
    public $advert;

    public function __construct(User $user,SettingsModel $settingsModel, Advert $advert)
    {
        $this->user = $user;
        $this->advert = $advert;
        $this->settingModel = $settingsModel;
    }

    public function login(){
        $advert = $this->advert->ad();
        $set = $this->settingModel->set();
        return view('login',compact('set','advert'));
    }

    public function logpost(Request $request)
    {
        $advert = $this->advert->ad();
        $set = $this->settingModel->set();
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $isNewUser = User::where("email", $credentials["email"])->value('companyName');

        if(Auth::attempt($credentials, $request->rememberMe)){
            if ($isNewUser==Null and Auth::user()->permission_level=='user'){
                Alert::success('Başarılı!', 'Giriş yaptınız.');
                return redirect()->route('update',);
            }if (Auth::user()->permission_level=='admin'){
                Alert::success('Başarılı!', 'Giriş yaptınız.');
                return view('admins.home');
            }
            else{
                Alert::success('Başarılı!', 'Giriş yaptınız.');
                return redirect()->route('company');
            }
        }else{
            Alert::error('Hata!','Kullanıcı veya şifre hatalı...');
            return back();
            }

        return view('company',compact('set'));
    }

    public function reg(Request $request){
        $request->validate([
            "name"=>'required',
            "surname"=>'required',
            "email"=>'required',
            "password"=>'required',
        ]);

        $regr = DB::table('users')->insert([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "permission_level"=>"user",
        ]);

        if($regr){
            Alert::success('Başarılı!', 'Kayıt işlemi gerçekleşti..');
            return redirect('login');
        }else{
            Alert::error('Hata!', 'Kayıt işlemi gerçekleşmedi..');
        }
        return back();
    }


    public function exit()
    {
        Auth::logout();
        Alert::success('Başarılı!', 'Çıkış yaptınız');
        return redirect()->route('login');
    }
}
