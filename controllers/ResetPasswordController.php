<?php

namespace App\Controllers;

use App\Providers\View;
use App\Models\User;

class ResetPasswordController
{
    public function index()
    {
        return View::render('resetPassword');
    }

}

