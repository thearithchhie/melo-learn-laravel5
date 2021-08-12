<?php

namespace App\Http\Traits;
use App\Models\Student;

trait StudentTrait {
    public function getAll() {
        // Fetch all the students from the 'student' table.
        $students = Student::all();
        return $students;
    }
}
