<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $currentUser;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        /* Hiermee kan je controleren of er een user ingelogd is. Deze variabele wordt doorgegeven aan alle views.
        Je krijgt echter bij de statische pagina's altijd 'False' omdat deze niet de middleware 'web' & 'auth' gebruikt. De routes moeten
        aangepast worden als je een knop 'back-end' of 'admin dashboard' wil toevoegen die enkel verschijnt als de gebruiker ingelogd is.*/

        //$this->auth_status = Auth::check();
        //View::share([ 'auth_status' => $this->auth_status ]);

    }

}
