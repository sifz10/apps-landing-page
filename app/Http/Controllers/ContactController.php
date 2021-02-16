<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function ContactUsPost(Request $request)
    {
      DB::table('contacts')->insert($request->except('_token'));
      return back();
    }
    public function ContactUsDelete(Request $request)
    {
        DB::table('contacts')->where('id', $request->id)->delete();
        return back();
    }
}
