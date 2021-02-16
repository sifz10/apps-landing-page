<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class AppsController extends Controller
{
    public function addNew(Request $request)
    {
      $randomNumber =rand();
      $ss1 = $request->file('ss1');
      $ss1_rename = $randomNumber.'.'.$ss1->getClientOriginalExtension();
      $newLocation = base_path('./public/uploads/'.$ss1_rename);
      Image::make($ss1)->save($newLocation,100);

      $randomNumber2 =rand();
      $ss2 = $request->file('ss2');
      $ss2_rename = $randomNumber2.'.'.$ss2->getClientOriginalExtension();
      $newLocation = base_path('./public/uploads/'.$ss2_rename);
      Image::make($ss2)->save($newLocation,100);
      // ->resize(285, 529)
      DB::table('addapps')->insert([
        'appsName' => $request->appsName,
        'appsDesc' => $request->appsDesc,
        'appsLink' => $request->appsLink,
        'ss1' => $ss1_rename,
        'ss2' => $ss2_rename,
      ]);
      return back();
    }
    public function delete(Request $request)
    {
      DB::table('addapps')->where('id', $request->id)->delete();
      return back();
    }
    public function active(Request $request)
    {
      DB::table('addapps')->where('id', $request->id)->update([
        'status' => 1,
      ]);
      return back();
    }
    public function PrivacyPolicy()
    {
      return view('policy');
    }
    public function Terms()
    {
      return view('terms');
    }
    public function ContactUs()
    {
      return view('contactUs');
    }
}
