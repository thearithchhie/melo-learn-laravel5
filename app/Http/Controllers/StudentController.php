<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\StudentTrait;

class StudentController extends Controller
{
    use StudentTrait;

    public function index() {
        $students = $this->getAll();
        return view('layouts.student')->with(compact('students'));
    }
}
