<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;

class AttendeeController extends Controller
{
  public function  all() {
      $attendees = Attendee::get();
      $names = $attendees->pluck('name');
      return view("pages.attendee",compact("names"));
  }
}
