<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 1–5
    public function task1()
    {
        return view('user.task1', [
            'name' => 'Ivan',
            'age' => 20,
            'salary' => 1000,
            'class' => 'red',
            'value1' => 'one',
            'value2' => 'two',
            'value3' => 'three',
            'style' => 'color:red;',
            'text' => 'Google',
            'href' => 'https://google.com',
        ]);
    }

    // 6–11
    public function task2()
    {
        return view('user.task2', [
            'arr' => [1, 2, 3],
            'city' => null,
            'location' => ['country' => null, 'city' => null],
            'year' => null,
            'month' => null,
            'day' => null,
        ]);
    }

    // 12–17
    public function task3()
    {
        return view('user.task3', [
            'html' => '<b>text</b>',
            'age' => 17,
        ]);
    }

    // 18–24
    public function task4()
    {
        return view('user.task4', [
            'arr' => [1, 2, 3, 4, 5],
        ]);
    }

    // 25–28
    public function task5()
    {
        return view('user.task5', [
            'data' => [1, 2, 3],
            'employees' => [
                ['name'=>'user1','surname'=>'s1','salary'=>1000],
                ['name'=>'user2','surname'=>'s2','salary'=>2000],
            ],
        ]);
    }

    // 29–36
    public function task6()
    {
        return view('user.task6', [
            'arr' => [1, 2, 0, 3, 4, 5],
        ]);
    }


}
