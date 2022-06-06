<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\SettingsModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * @var User|Model
     * @var SettingsModel|Model
     * @var Advert|Model
     */

    public $user;
    public $settingsModel;
    public $advert;

    public function __construct(User $user, SettingsModel $settingsModel, Advert $advert)
    {
        $this->user = $user;
        $this->advert = $advert;
        $this->settingModel = $settingsModel;
    }

    public function admin()
    {
        return view('admins.admin');
    }

    public function adminpost(Request $request)
    {
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
                return redirect()->route('dashboard');
            }
            else{
                Alert::success('Başarılı!', 'Giriş yaptınız.');
                return redirect()->route('company');
            }
        }else{
            Alert::error('Hata!','Kullanıcı veya şifre hatalı...');
            return back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        Alert::success('Great!', 'You logged out..');
        return redirect()->route('admin');
    }

    public function dashboard(){
        return view('admins.dashboard');
    }

    public function adminadvert(){
        $advert = $this->advert->get();
        return view('admins.adminadvert',compact('advert'));
    }

    public function create($id){
        $advert = $this->advert->create($id);
        return view('admins.create',compact('advert'));
    }

    public function createpost(Request $request,$id){
        $request->validate([
            'companyEmail' => 'required',
            'companyContent' => 'required',
            'companyName' => 'required',
            'companyRole' => 'required',
            'companyLocation' => 'required',
            'companyPhone' => 'required',
            'price' => 'required',
            'companyAbout' => 'required',
            'isonline' => 'required',
        ]);
        $create = DB::table('advert')
            ->where('advert_id',$id)
            ->update(
                [
                    'companyEmail' => $request->companyEmail,
                    'companyContent' => $request->companyContent,
                    'companyName' => $request->companyName,
                    'companyRole' => $request->companyRole,
                    'companyLocation' => $request->companyLocation,
                    'companyPhone' => $request->companyPhone,
                    'price' => $request->price,
                    'companyAbout' => $request->companyAbout,
                    'isonline' => $request->isonline,
                ]);
        if($create){
            Alert::success('Success!', 'Update successful...');
            return redirect()->route('adminadvert');
        }else{
            Alert::error('Error!', 'An error occurred while updating...');
            return back();
        }
    }

    public function remove($id)
    {
        $delete = DB::table('advert')
            ->where('advert_id',$id)
            ->delete();
        if ($delete) {
            Alert::success('Great!', 'The product has been deleted.');
            return back();
        } else {
            Alert::error('Error!', 'Product could not be deleted.');
            return back();
        }
    }

    public function companies(){
        $companies = $this->user->companies();
        return view('admins.companies',compact('companies'));
    }

    public function companiesedit($id){
        $post = $this->user->post($id);
        return view('admins.companiesedit',compact('post'));
    }

    public function companieseditpost(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'companyRole' => 'required',
            'companyName' => 'required',
            'companyPhone' => 'required',
            'companyWebSite' => 'required',
            'county' => 'required',
            'city' => 'required',
            'active' => 'required'
        ]);
        $companies = DB::table('users')
            ->where('id',$id)
            ->update(
                [
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'companyRole' => $request->companyRole,
                    'companyName' => $request->companyName,
                    'companyPhone' => $request->companyPhone,
                    'companyWebSite' => $request->companyWebSite,
                    'county' => $request->county,
                    'city' => $request->city,
                    'active' => $request->active,
                ]);
        if($companies){
            Alert::success('Success!', 'Update successful...');
            return redirect()->route('companies');
        }else{
            Alert::error('Error!', 'An error occurred while updating...');
            return back();
        }
    }

    public function stop($id)
    {
        $delete = DB::table('users')
            ->where('id',$id)
            ->delete();
        if ($delete) {
            Alert::success('Great!', 'The product has been deleted.');
            return back();
        } else {
            Alert::error('Error!', 'Product could not be deleted.');
            return back();
        }
    }
}

