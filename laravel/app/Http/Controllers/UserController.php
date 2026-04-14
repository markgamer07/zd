<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return 'User show';
    }
    
    public function all()
    {
    return 'All users';
    }
    public function byName($name)
    {
    return "User: $name";
    }
    public function fullName($surname, $name)
    {
    return "$surname $name";
    }
    public function city($name)
{
    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5',
    ];

    if (!array_key_exists($name, $users)) {
        return 'Пользователь не найден';
    }

    return $users[$name];
}
}
