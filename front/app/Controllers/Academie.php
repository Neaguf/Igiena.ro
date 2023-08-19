<?php

namespace App\Controllers;

class Academie extends BaseController
{
    public function index()
    {
        return view('structure/header') . view('pages/academie') . view('structure/footer');
    }



    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $ret = new \stdClass();
            $ret->status = "error";
            $ret->message = "Invalid request method";
            echo json_encode($ret);
            return;
        }

        $requiredFields = ['tip-formular', 'nume-formular', 'telefon-formular', 'email-formular'];
        foreach ($requiredFields as $field) {
            if (!isset($_POST[$field]) || empty($_POST[$field])) {
                $ret = new \stdClass();
                $ret->status = "error";
                $ret->message = "Please fill in all the required fields";
                echo json_encode($ret);
                return;
            }
        }

        $email = \Config\Services::email();

        $email->setFrom("contact@brk-dev.ro", "formulat academie");
        $email->setTo('florin@breakingpoint.ro');

        $content =
            "Tip formular: {$_POST['tip-formular']},
Nume: {$_POST['nume-formular']},
Telefon: {$_POST['telefon-formular']},
Email: {$_POST['email-formular']},";

        $email->setSubject("Igiena");
        $email->setMessage($content);

        if ($email->send()) {
            // Email sent successfully
            $ret = new \stdClass();
            $ret->status = "ok";
            $ret->message = "Email sent successfully";
            echo json_encode($ret);
        } else {
            // Failed to send email
            $ret = new \stdClass();
            $ret->status = "error";
            $ret->message = "Failed to send email";
            echo json_encode($ret);
        }
    }
}
