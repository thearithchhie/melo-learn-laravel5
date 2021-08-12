<?php

namespace App\Repositories;

use App\Models\Attendee;

class AttendeeRepository {
    public function getall() {
        $attendees = Attendee::get();
        $names = $attendees->pluck('name');
        return view("pages.attendee",compact("names"));
    }
}

