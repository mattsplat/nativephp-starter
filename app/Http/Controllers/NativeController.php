<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Native\Laravel\Dialog;

class NativeController extends Controller
{

    public function dialog(Request $request)
    {
        $dialog = Dialog::new();
        if($request->folders) {
            $dialog->folders();
        }

        if($request->title) {
            $dialog->title($request->title);
        }

        if($request->button) {
            $dialog->button($request->button);
        }

        return $dialog->open();
    }
}
