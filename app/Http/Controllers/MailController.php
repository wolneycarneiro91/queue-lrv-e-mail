<?php

namespace App\Http\Controllers;

use App\Jobs\EnviaEmail;
use Illuminate\Http\Request;
use stdClass;

class MailController extends Controller
{
    public function enviarEmail(Request $request)
    {
        EnviaEmail::dispatch($request->email);
    }
}
