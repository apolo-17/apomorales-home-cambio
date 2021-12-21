<?php

namespace App\Http\Controllers;

use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

class InicioController extends Controller
{
    public function welcome()
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
    public function login()
    {
        return Inertia::render('Ingreso',[
            'canLogin'>=Route::has('login')
        ]);
    }
    public function registro()
    {
        return Inertia::render('registro',[
            'canRegister'=>Route::has('register'),
            'canReclamo'=>Route::has('reclamo')
        ]);
    }
    public function help()
    {
        return Inertia::render('Help', [
            // 'canLogin'=>Route::has('login')
        ]  );
    }
    public function reclamo()
    {
        return Inertia::render('Clain');
    }
    public function movements()
    {
        return Inertia::render('Dashboard/Movements');
    }
    public function profile()
    {
        return Inertia::render('Dashboard/Profile');
    }
    public function bill()
    {
        return Inertia::render('Dashboard/Bill');
    }

}
