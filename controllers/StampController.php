<?php

namespace App\Controllers;

use App\Models\Privilege;
use App\Models\Stamp;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;


class StampController
{
    public function create()
    {
        return View::render('stamp/create');
    }

    public function store($data)
    {
        $validator = new Validator;
        $validator->field('nom', $data['nom'])->min(2)->max(50);
        $validator->field('date', $data['date'])->required();
        $validator->field('couleur', $data['couleur']);
        $validator->field('`condition`', $data['condition'])->required();
        $validator->field('tirage', $data['tirage'])->required();
        $validator->field('dimension', $data['dimension'])->required();
        $validator->field('certification', $data['certification'])->required();
        $validator->field('pays_id', $data['pays_id']);

        if ($validator->isSuccess()) {
            $stamp = new Stamp;

            $insert  = $stamp->insert($data);
            if ($insert) {
                return View::redirect('create/stamp');
            } else {
                return View::render('error');
            }
        } 
    }
}