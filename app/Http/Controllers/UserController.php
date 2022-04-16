<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\SettingsModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserController extends Controller
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
    public function company()
    {
        $set = $this->settingModel->set();
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $advert = $this->advert->advert();

        return view('company',compact('advert','pop','set'));
    }

    public function edit()
    {
        $set = $this->settingModel->set();
        $advert = $this->advert->advert();
        $com=DB::table('users')
            ->find(FacadesAuth::id());
        return view('edit',compact('com','advert','set'));
    }

    public function editpost(Request $request)
    {
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $advert = $this->advert->advert();
        $request->validate([
            'companyName' => 'required',
            'companyRole' => 'required',
            'category' => 'required',
            'companyLocation' => 'required',
            'companyPhone' => 'required',
            'companyTeamSize' => 'required',
            'companyWebSite' => 'required',
            'companyFounded' => 'required',
            'companyAbout' => 'required',
        ]);
        $data = DB::table('users')
            ->where('id',Auth::id())
            ->update(
                [
                    'companyName' => $request->companyName,
                    'companyRole' => $request->companyRole,
                    'category' => $request->category,
                    'companyLocation' => $request->companyLocation,
                    'companyPhone' => $request->companyPhone,
                    'companyTeamSize' => $request->companyTeamSize,
                    'companyWebSite' => $request->companyWebSite,
                    'companyFounded' => $request->companyFounded,
                    'companyAbout' => $request->companyAbout,
                ]);
        if($data){
            Alert::success('Success!', 'Update successful...');
            return redirect()->route('company',compact('data','pop','advert'));
        }else{
            Alert::error('Error!', 'An error occurred while updating...');
            return back();
        }
    }

    public function update()
    {
        $set = $this->settingModel->set();
        $com=DB::table('users')
            ->find(FacadesAuth::id());
        return view('update',compact('com','set'));
    }
    public function updatepost (Request $request)
    {
        $set = $this->settingModel->set();
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $advert = $this->advert->advert();

        $request->validate([
            'companyName' => 'required',
            'companyRole' => 'required',
            'category' => 'required',
            'companyLocation' => 'required',
            'companyPhone' => 'required',
            'companyTeamSize' => 'required',
            'companyWebSite' => 'required',
            'companyFounded' => 'required',
            'county'=>'required',
            'city'=>'required',
        ]);

        $update = DB::table('users')
            ->where('id',Auth::id())
            ->update(
                [
                    'companyName' => $request->companyName,
                    'companyRole' => $request->companyRole,
                    'category' => $request->category,
                    'companyLocation' => $request->companyLocation,
                    'companyPhone' => $request->companyPhone,
                    'companyTeamSize' => $request->companyTeamSize,
                    'companyWebSite' => $request->companyWebSite,
                    'companyFounded' => $request->companyFounded,
                    'county' => $request->county,
                    'city' => $request->city,
                ]);
        if($update){
            Alert::success('Success!', 'Update successful...');
            return redirect()->route('company',compact('pop','advert','set'));
        }else{
            Alert::error('Error!', 'An error occurred while updating...');
            return back();
        }
    }
    public function advert(){
        $set = $this->settingModel->set();
        return view('advert',compact('set'));
    }

    public function advertpost(Request $request){
        $advert = $this->advert->advert();
        $com = DB::table("advert")->insert([
            'companyContent'=>$request->companyContent,
            'companyName' => $request->companyName,
            'companyEmail' => $request->companyEmail,
            'companyRole' => $request->companyRole,
            'operationTime' => $request->operationTime,
            'companyLocation' => $request->companyLocation,
            'companyPhone' => $request->companyPhone,
            'price' => $request->price,
            'companyWebSite'=>$request->companyWebSite,
            'companyAbout' => $request->companyAbout,
            'users_id'=>$request->users_id,
            'isonline'=>0,
        ]);
        if ($com){
            Alert::alert('Başarılı', 'İlan verildi...', 'success');
            return redirect()->route('company',compact('com','advert'));
        }else{
            Alert::alert('Hata', 'İlan verilmedi...', 'error');
            return back();
        }
    }

    public function details($id){
        $set = $this->settingModel->set();
        $data = DB::table('advert')
            ->join('users','users.id','=','advert.users_id')
            ->where('advert_id','=',$id)->get();
        return view('details',compact('data','set'));
    }

    public function contact(){
        $set = $this->settingModel->set();
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $advert = $this->advert->advert();
        return view('contact',compact('set','pop','advert'));
    }

    public function contactpost(Request $request){
        $request->validate([
            'name_surname'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $contact=DB::table("contact")->insert([
            "name_surname"=>$request->name_surname,
            "email"=>$request->email,
            "message"=>$request->message,
        ]);

        if ($contact){
            Alert::alert('Başarılı', 'En yakın zamanda sizinle ilgileneceğiz...', 'success');
            return back();
        }else{
            Alert::alert('Hata', 'İletişim kurarken sorun oluştu...', 'error');
            return back();
        }

    }

    public function delete($id)
    {
        $delete = DB::table('advert')
            ->where('advert_id',$id)
            ->delete();
        if ($delete) {
            Alert::success('Great!', 'The product has been deleted.');
            return view('company');
        } else {
            Alert::error('Error!', 'Product could not be deleted.');
        }
        return back();
    }

    public function companylist(){
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $set = $this->settingModel->set();
        $advert = $this->advert->advert();
        $company = $this->user->company();
        return view('companylist',compact('set','advert','company','pop'));
    }

    public function comdetails($id){
        $pop = DB::table('users')->where('id','=',Auth::user()->id)->get();
        $set = $this->settingModel->set();
        $advert = $this->advert->advert();
        $company = $this->user->company();
        return view('comdetails',compact('set','advert','company','pop'));
    }

}
