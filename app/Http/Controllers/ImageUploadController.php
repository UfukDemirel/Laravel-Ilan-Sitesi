<?php

namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\ImageUpload;
use App\Models\SettingsModel;
use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Mod;

class ImageUploadController extends BaseController
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
        $this->middleware('auth');
        $this->user = $user;
        $this->advert = $advert;
        $this->settingModel = $settingsModel;
    }
    public function dropzone()
    {
        $set = $this->settingModel->set();
        return view('dropzone',compact('set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $old_file = Auth::user()->file;

        if ($old_file!=Null){
            $path=public_path().'/public/images/'.$old_file;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('/public/images'),$imageName);

        $data = DB::table("users")
            ->where('id',Auth::id())
            ->update([
                'file'=>$imageName
            ]);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();

        return response()->json(['success'=>$imageName],$filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy(Request $request)
    {

    }
}
