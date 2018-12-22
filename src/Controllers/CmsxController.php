<?php

namespace C18app\Cmsx\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use C18app\Cmsx\Models\User;

class CmsxController extends Controller
{
    public function index()
    {
        return view(Config('cmsx.app.template').'::cmsx', ['user' => new User]);
    }
}
