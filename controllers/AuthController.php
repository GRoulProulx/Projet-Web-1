<?php
namespace App\Controllers;
use App\Models\User;
use App\Providers\View;
use App\Providers\Validator;

class AuthController {

    public function index(){
        return View::render('login');
    }

    public function store($data){
        $validator = new Validator;
        $validator->field('username', $data['username'])->min(2)->max(50);
        $validator->field('password', $data['password'])->min(6)->max(20);
        
        if($validator->isSuccess()){
            $user = new User;
            $checkuser = $user->checkuser($data['username'], $data['password']);
            if($checkuser){
                return View::redirect('login');
            }else{
                $errors['message'] = "Vous n'avez pas de compte, incrivez-vous!";
                return View::render('login', ['errors'=>$errors, 'inputs'=>$data]);
            }
        }else{
            $errors = $validator->getErrors();
            return View::render('login', ['errors'=>$errors, 'inputs'=>$data]);
        }
    }

    public function delete(){
        session_destroy();
        return View::redirect('login');
    }

    public function resetPassword(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $message = $_SESSION['message'] ?? null;
        unset($_SESSION['message']);
        return View::render('/resetpassword', ['message' => $message]);
    }

    public function resetStore($data){
        $validator = new Validator;
        $validator->field('email', $data['email'])->email();
        if($validator->isSuccess()){
            $user = new User();
            $checkuser = $user->checkEmail($data['email']);
            if($checkuser){
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['message'] = 'Un courriel a été envoyé.';
                return View::redirect('/resetpassword');
            }else{
                $errors['message'] = 'Le courriel n\'existe pas.';
                return View::render('/resetpassword', ['errors'=>$errors, 'user'=>$data]);
            }
        }else{
            $errors = $validator->getErrors();
            return View::render('/resetpassword', ['errors'=>$errors, 'User'=>$data]);
        }
    }
}

?>