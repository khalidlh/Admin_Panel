<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    public function SettingView($id){
        //$user = User::find($id);
        return view('admin.setting');
    }
    //Change password
    public function ChangePassword(Request $request,$id){
           $request->validate([
              'old_password'=>'required',
              'new_password'=>'required',
              'confirm_password'
           ]);
           $user = User::find($id);
    }

    //Enable Tow Factor
    public function EnableTowFactorauthenticate(Request $request,$id){
      /*
      Add phone number
      Activation colmun in table user for enable tow factor equivalent enable tow factor == 1
       */
     
    }

    //Disable Tow Factor
    public function DisableTowFactorauthenticate($id){
      //Disable enable tow factor equivalent enable tow factor ==0

    }

    public function DeletAccount($id){
      //$user = User::find($id)
    }

}
