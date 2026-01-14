<?php

namespace App\Controllers;

class JQuery extends BaseController
{
    public function Query()
    {
        return view('ajax/dataquery');
    }

    public function PostQuery()
    {
        return view('ajax/postdata');
    }
}