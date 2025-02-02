<?php
namespace App\Controllers;

use App\Providers\View;

class ProductController
{
    public function index()
    {
        return View::render('products');
    }
    public function productdetails()
    {
        return View::render('productdetails');
    }
}
