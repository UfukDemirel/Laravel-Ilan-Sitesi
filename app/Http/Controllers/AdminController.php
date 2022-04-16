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

    public function home()
    {
        return view('admins.home');
    }

    public function adsdetails()
    {
        $advert = DB::table('advert')->orderBy('advert_id', 'desc')->get();
        return view('admins.adsdetails', compact('advert'));
    }

    public function companydetails()
    {
        return view('admins.companydetails');
    }

    public function userdetails($id)
    {
        $data = Advert::where('advert_id', '=',$id)->get();
        return view('admins.userdetails', compact('data'));
    }

    public function userdetailspost(Request $request,$id){
        $request->validate([
            'isonline'=>'required'
        ]);
        $user = DB::table('advert')
            ->where('advert_id',$id)
            ->update([
                'isonline'=>$request->isonline
            ]);
        if ($user) {
            Alert::success('Success!', 'Update successful...');
            return back();
        } else {
            Alert::error('Error!', 'Your nickname must be unique...');
            return back();
        }
    }

    public function userdelete($id)
    {
        $advert = DB::table('advert')->orderBy('advert_id', 'desc')->get();
        $delete = DB::table('advert')
            ->where('advert_id',$id)
            ->delete();
        if ($delete) {
            Alert::success('Great!', 'The product has been deleted.');
            return view('company',compact('advert'));
        } else {
            Alert::error('Error!', 'Product could not be deleted.');
        }
        return back();
    }

    public function del(){
        Auth::logout();
        Alert::success('Başarılı!', 'Çıkış yaptınız..');
        return redirect()->route('login');
    }

}
