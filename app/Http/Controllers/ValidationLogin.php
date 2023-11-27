<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationLogin extends Controller
{
    //
    public function View_2FA()
    {
        return view('authentification.TowFactorauthanticate');
    }

    public function View_Login(){
        return view('authentification.login');
    }
    public function ValidationCodeLogin(Request $request, $code)
    {
        //    $request->validate([
        //     'Chiffer_1'=>['integer','required'],
        //     'Chiffer_2'=>['integer','required'],
        //     'Chiffer_3'=>['integer','required'],
        //     'Chiffer_4'=>['integer','required'],
        //    ]);
        //    $code_table = [$request->Chiffer_1,$request->Chiffer_2,$request->Chiffer_3,$request->Chiffer_4];
        //    $code_enter = implode('',$code_table);
        //    if($code_enter == $code){
        //     return redirect()->route('dash');
        //    }else{
        //     return back()->with('fail','error code');
        //    }
    }
}
