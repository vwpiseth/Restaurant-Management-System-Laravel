<?php

namespace App\Http\Controllers\Admin;

use \App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use Session;

class ReservationController extends Controller
{
    public function index() {
         $reservations =  Reservation::all();
         return view('admin.reservation.index', compact('reservations'));
    }
    
    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        Session::flash('reservation_status','Reservation confirmed succesfully. Click to dismiss message ');
        return redirect('admin/reservation');
    }

        public function destroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        Session::flash('reservation_delete','Reservation deleted succesfully. Click to dismiss message ');
        return redirect('admin/reservation');
    }
}
