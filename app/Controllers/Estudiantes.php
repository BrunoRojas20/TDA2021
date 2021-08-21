<?php

namespace App\Controllers;

class Estudiantes extends BaseController
{
    public function index()
    {
        $data = $this->db->get('estudiantes');
    }
}