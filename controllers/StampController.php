<?php

namespace App\Controllers;

use App\Models\Privilege;
use App\Models\Stamp;
use App\Models\Image;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;


class StampController
{
    public function create()
    {
        return View::render('stamp/create');
    }
    public function imageUpload($data)
    {
        $target_dir = "public/img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                return $target_file;
            } else {
                return false;
            }
        }
    }
    public function store($data)
    {
        $validator = new Validator;
        $validator->field('nom', $data['nom'])->min(5)->max(50);
        $validator->field('date', $data['date'])->required();
        $validator->field('couleur', $data['couleur'])->required();
        $validator->field('etat', $data['etat'])->required();
        $validator->field('tirage', $data['tirage'])->required()->min(2)->max(50);
        $validator->field('dimension', $data['dimension'])->required()->min(2)->max(50);
        $validator->field('certification', $data['certification'])->required();

        if ($validator->isSuccess()) {
            $stamp = new Stamp;
            $imagePath = $this->imageUpload($data);

            if ($imagePath) {
                $data['image'] = $imagePath;
                $timbreId = $stamp->insert($data);

                if ($timbreId) {
                    $image = new Image;
                    $imageData = [
                        'image_url' => $imagePath,
                        'timbre_id' => $timbreId
                    ];
                    $insert = $image->insert($imageData);

                    if ($insert) {
                        return View::render('stamp/create');
                    }
                } else {
                    return View::render('error');
                }
            } else {
                echo "L'image n'a pas été téléversée.";
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('stamp/create', ['errors' => $errors, 'inputs' => $data]);
        }
    }
}
