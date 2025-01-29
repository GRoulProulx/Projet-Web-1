<?php

namespace App\Models;

use App\Models\CRUD;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class User extends CRUD
{
    protected $table = "membre";
    protected $primaryKey = "id";
    protected $fillable = ['nom', 'username', 'password', 'email', 'privilege_id'];


    public function hashPassword($password, $cost = 10)
    {
        $options = [
            "cost" => $cost
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public function checkuser($username, $password)
    {
        $user = $this->unique('username', $username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                session_regenerate_id();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['privilege_id'] = $user['privilege_id'];
                $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function checkEmail($email)
    {
        $user = $this->unique('email', $email);
        if ($user) {
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'sandbox.smtp.mailtrap.io';
                $mail->SMTPAuth = true;
                $mail->Username = '2e62c38040480c';
                $mail->Password = '9b15b292b94d06';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 2525;
                $mail->setFrom('from@example.com');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'ResetPassword';
                $mail->Body = 'Cliquez sur le lien pour réinitialiser votre mot de passe';
                $mail->AltBody = 'Cliquez sur le lien pour réinitialiser votre mot de passe';
                $mail->send();
                return true;
            } catch (Exception $e) {
                echo "Le message n'a pas pu être envoyer. Courriel Erreur: {$mail->ErrorInfo}";
                return false;
            }
        } else {
            return false;
        }
    }
}
