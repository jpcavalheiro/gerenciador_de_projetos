<?php

namespace App\Controllers;

use jpcavalheiro\GP\CrudController;

class UsersController extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}