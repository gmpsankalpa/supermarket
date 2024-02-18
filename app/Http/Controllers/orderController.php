<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multi;
use illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    
    public function viewOder()
    {
        $allorder=multi::get();
        return view('order',compact('allorder'));
    }

    public function viewplaceorder()
    {
        return view('placeorder');
    }


    public function ordernow(Request $req)
    {

        $user=Auth::id();

        $req->validate([

            'name'=>'required|string|max:100',
            'quantity'=>'required|max:1000',
            'date'=>'required',
            'desc'=>'required|string|max:1000',
        ]);

        $data['user_id']=$user;
        $data['name']=$req->name;
        $data['quantity']=$req->quantity;
        $data['date']=$req->date;
        $data['desc']=$req->desc;

        $newOreder=multi::create($data);
      
        if($newOreder)
        {
             return redirect('order')->with('status',"User place order Sucessfully");
        }else
        {
            return redirect('placeorder')->with('status'," place order Error");
        }

    }



    public function editorderview(int $id)
    {
        $edititeam = multi::findorFail($id);

        return view('editOrder',compact('edititeam'));
    }



    public function updateorder(Request $req,int $id)
    {
        $req->validate([

            'name'=>'required|string|max:100',
            'quantity'=>'required|max:1000',
            'date'=>'required',
            'desc'=>'required|string|max:1000',
        ]);

        
        $data['name']=$req->name;
        $data['quantity']=$req->quantity;
        $data['date']=$req->date;
        $data['desc']=$req->desc;

        $update=multi::findorFail($id)->update($data);

        if($update)
        {
             return redirect('order')->with('status',"Update Sucessfully");
        }else
        {
            return redirect('editorder')->with('status',"Update not sucess");
        }

    }


    public function deleteorder(int $id)
    {
        $oderrecored=multi::find($id);

        if( $oderrecored->delete())
        {
            return redirect('order')->with('status',"delete Sucessfully");
       }else
       {
           return redirect('order')->with('status',"delte not sucess");
       }


    }

}
