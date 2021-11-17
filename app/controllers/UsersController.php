<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsersController
{
    public function login()
    {
        $errors = [];

        $email = cleanInput($_POST['email']);
        $password = cleanInput($_POST['password']);

        if (empty($email)) {
            $errors['email'] = "Email is required!";
        }

        if (empty($password)) {
            $errors['password'] = "Password is required!";
        }

        if (count(array_keys($errors))) {
            return view('/login', compact('errors'));
        }

        try {
            $user = App::get('database')->login(
                $email,
                md5($password),
            );
        } catch (\Throwable $th) {
            $errors['login'] =  $th->getMessage();

            return view('/login', compact('errors'));
        }

        $_SESSION['name'] = $user->name;

        return redirect('/');
    }

    public function store()
    {
        $errors = [];

        $name = ucwords(cleanInput($_POST['name']));
        $email = cleanInput($_POST['email']);
        $password = cleanInput($_POST['password']);
        $confirmPassword = cleanInput($_POST['confirm_password']);

        if (empty($email)) {
            $errors['email'] = "Email is required!";
        }

        if (empty($name)) {
            $errors['name'] = "Name is required!";
        }

        if (empty($password)) {
            $errors['password'] = "Password is required!";
        } elseif (!$this->validatePassword($password)) {
            $errors['password'] = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        }

        if ($password !== $confirmPassword) {
            $errors['confirm_password'] = "Passwords do not match!";
        }

        if (count(array_keys($errors))) {
            return view('/register', compact('errors'));
        }

        try {
            App::get('database')->insert('users', [
                'name' => $name,
                'email' => $email,
                'password' => md5($password),
            ]);
        } catch (Exception $e) {
            $errors['register'] =  "Error occurred while registering. " . $e->getMessage();

            return view('/register', compact('errors'));
        }

        $_SESSION['name'] = $name;

        return redirect('/');
    }

    public function logout()
    {
        session_destroy();

        return redirect('/login');
    }

    private function validatePassword($password)
    {
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        return !(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars);
    }
}
