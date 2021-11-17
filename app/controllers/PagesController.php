<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function login()
    {
        redirectIfAuthenticated();

        return view('login');
    }

    public function register()
    {
        redirectIfAuthenticated();

        return view('register');
    }

    public function results()
    {
        $users = [];

        $searchTerm = isset($_GET['search']) ? cleanInput($_GET['search']) : null;

        if ($searchTerm) {
            $users = App::get('database')->searchUsers($searchTerm);
        }

        return view('results', compact('users'));
    }


    public function searchUsers()
    {
        $searchTerm = isset($_POST['search']) ? cleanInput($_POST['search']) : null;

        $errors = [];

        if (!$searchTerm) {
            $errors['search'] = "Search term is required!";

            return view('index', compact('errors'));
        }

        return redirect("/results?search=$searchTerm");
    }
}
