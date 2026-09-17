<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Maria Santos', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'John Ramirez', 'role' => 'Manager'],
            ['username' => 'cashier01', 'full_name' => 'Nicole Garcia', 'role' => 'Cashier'],
            ['username' => 'sales01', 'full_name' => 'Kevin Mendoza', 'role' => 'Sales Staff'],
            ['username' => 'inventory01', 'full_name' => 'Andrea Cruz', 'role' => 'Inventory Clerk'],
        ];

        return view('users/index', ['users' => $users]);
    }
}