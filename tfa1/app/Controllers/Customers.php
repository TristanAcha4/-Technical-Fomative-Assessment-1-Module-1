<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Daniel Reyes', 'email' => 'daniel.reyes@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Angela Santos', 'email' => 'angela.santos@example.com', 'phone' => '09182345678'],
            ['full_name' => 'Miguel Navarro', 'email' => 'miguel.navarro@example.com', 'phone' => '09193456789'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '09204567890'],
            ['full_name' => 'Carlo Bautista', 'email' => 'carlo.bautista@example.com', 'phone' => '09215678901'],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}