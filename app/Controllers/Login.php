<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\XSSModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use \Firebase\JWT\JWT;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Exceptions\DatabaseException;





class Login extends BaseController
{
    use ResponseTrait;

    public function xssTest()
    {
        $form = new XSSModel();

        $name = $this->request->getVar('name');
        $umur = $this->request->getVar('age');
        $password = $this->request->getVar('password');
        $id = $this->request->getVar('id');


        // $query = "SELECT * FROM dataform WHERE name = '$name' AND age = '$umur' AND password = '$password'";
        // $result = $form->query($query, [$name, $umur, $password]);

        // if ($result->getNumRows() === 1) {
        //     $names = $result->getRow();
        //     $msg = "You logged in as: " . $names->name . '!<br />';
        // } else {
        //     $msg = "Invalid credentials!<br />";
        // }



        $db = \Config\Database::connect();

        $query = "UPDATE dataform SET password = ''? WHERE name = '$name' ";

        try {
            $db->query($query, [$password, $name]);

            if ($db->affectedRows() <= 0 ) {
                $data['error'] = "No changes were made. Please check your input.";
            } else {
                $data['msg'] = "Password updated successfully!";
            }
        
        } catch (DatabaseException $e) {
            $error = $db->error();
            $data['error'] = "Database Error: " . $error['code'] . " - " . $error['message'];
        }

        // $query = "INSERT INTO dataform (name, age, password) VALUES (?, ?, ?)";

        // try {
        //     $form->query($query, [$name, $umur, $password]);

        //     if ($form->affectedRows() > 0) {
        //         $msg = "Data inserted successfully! <br />";
        //     } else {
        //         $msg = "Failed to insert data!<br />";
        //     }
        // } catch (\Exception $e) {
        //     $msg = "Error inserting data: " . $e->getMessage();
        // }
        echo (isset($msg)) ? $msg : '<br />';

        $data['users'] = $form->findAll();


        return view("loggedin", $data);

    }

    public function handleAjaxRequest()
    {
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $user = $userModel->where('email', $email)->first();


        $response = [
            'status' => $user ? 'OK' : 'NOT_FOUND',
            'message' => $user ? 'User found' : 'User not found',
            'data' => $user ?: null
        ];

        return $this->response->setJSON($response);
    }

    public function ajaxMethod()
    {
        // $model = new XSSModel();
        // $data['users'] = $model->findAll();
        // return view("loggedin", $data);
    }

    public function index()
    {
        $userModel = new UserModel();

        // Get input as POST data instead of JSON
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Input validation
        if (empty($email) || empty($password)) {
            return $this->respond(['error' => 'Email and password are required'], 400);
        }

        $user = $userModel->where('email', $email)->first();

        if (is_null($user)) {
            return $this->respond(['error' => 'Invalid username or password.'], 401);
        }

        $pwd_verify = password_verify($password, $user['password']);

        if (!$pwd_verify) {
            return $this->respond(['error' => 'Invalid username or password.'], 401);
        }


        $key = getenv('JWT_SECRET');
        $iat = time();
        $exp = $iat + 3600;


        $payload = array(
            "iss" => "Issuer of the JWT",
            "aud" => "Audience that the JWT",
            "sub" => "Subject of the JWT",
            "iat" => $iat,
            "exp" => $exp,
            "id" => $user['id'],
            "email" => $user['email'],
        );

        $token = JWT::encode($payload, $key, 'HS256');
        $jakartaTime = new Time('now', 'Asia/Jakarta');
        $created_at = $jakartaTime->format('Y-m-d H:i:s');
        $expires_at = $jakartaTime->addHours(1)->format('Y-m-d H:i:s');

        $userModel->where('id', $user['id'])
            ->set([
                'jwt_token' => $token,
                'created_at' => $created_at,
                'expired_at' => $expires_at
            ])->update();



        $response = [
            'message' => 'Login Successful',
            'token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => 3600,
            'expires_at' => $expires_at,
        ];


        helper('cookie');
        set_cookie([
            'name' => $user['email'],
            'value' => $token,
            'expire' => 10,
        ]);


        $this->response->setContentType('application/json');
        return $this->respond($response, 200);
    }

    public function generateCaptchaImage()
    {
        $session = \Config\Services::session();

        // Generate random number and store in session
        $captchaText = rand(1000, 9999);
        $session->set('secure', $captchaText);
        $text = $captchaText;


        // Image dimensions
        $width = 200;
        $height = 50;

        // Create image
        $image = imagecreatetruecolor($width, $height);

        // Colors
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 0, 0, 0);

        // Fill background
        imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

        // Add some random lines
        for ($i = 0; $i < 5; $i++) {
            $x1 = rand(1, $width - 1);
            $y1 = rand(1, $height - 1);
            $x2 = rand(1, $width - 1);
            $y2 = rand(1, $height - 1);
            imageline($image, $x1, $y1, $x2, $y2, $text_color);
        }

        // Add text
        $font_size = 20;
        $font_path = FCPATH . 'Fonts/arial.ttf'; // Make sure this path is correct

        // Check if font exists
        if (!file_exists($font_path)) {
            // Fallback to built-in font
            imagestring($image, 5, 50, 15, $text, $text_color);
        } else {
            imagettftext($image, $font_size, 0, 50, 35, $text_color, $font_path, $text);
        }

        // Output the image
        header('Content-Type: image/jpeg');
        imagejpeg($image);
        imagedestroy($image);
        exit;
    }

    public function validateCaptcha()
    {
        $session = \Config\Services::session();
        $userCaptcha = $this->request->getPost('captcha_input');
        $storedCaptcha = $session->get('secure');

        // Validate and return JSON response
        return $this->response->setJSON([
            'valid' => ($userCaptcha == $storedCaptcha)
        ]);
    }

    public function log()
    {
        // URL to the CAPTCHA image generator
        $data['captcha_image_url'] = base_url('login/generateCaptchaImage');


        return view('login-user', $data);
    }


}

