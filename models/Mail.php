<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    protected $mail;

    public function __construct(PHPMailer $mail)
    {
        $this->mail = $mail;
    }

    public function sendEmail($to, $subject, $body)
    {
        try {
            
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.example.com'; 
            $this->mail->SMTPAuth = true;
            $this->mail->Username = 'your_email@example.com'; 
            $this->mail->Password = 'your_email_password'; 
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port = 587;

            
            $this->mail->setFrom('from@example.com', 'Mailer');
            $this->mail->addAddress($to);

            
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = strip_tags($body);

            if ($this->mail->send()) {
                echo 'Succès!';
            }
        } catch (Exception $e) {
            echo " Erreur du serveur SMTP: SMTP Error: {$this->mail->ErrorInfo}";
        }
    }
}