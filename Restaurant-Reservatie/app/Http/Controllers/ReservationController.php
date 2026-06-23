<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reservation_date' => 'required|date|after:now',
            'number_of_guests' => 'required|integer|min:1|max:20',
            'special_requests' => 'nullable|string|max:500',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'reservation_date' => $validated['reservation_date'],
            'number_of_guests' => $validated['number_of_guests'],
            'special_requests' => $validated['special_requests'],
            'status' => 'pending',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservering succesvol ingediend!');
    }

    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())
            ->orderBy('reservation_date', 'desc')
            ->get();
            
        return view('reservations.index', compact('reservations'));
    }

    public function cancel($id)
    {
        $reservation = Reservation::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        
        $reservation->update(['status' => 'cancelled']);
        
        return redirect()->route('reservations.index')->with('success', 'Reservering geannuleerd.');
    }

    public function checkAvailability(Request $request)
    {
        $date = $request->input('date');
        
        if (!$date) {
            return response()->json(['available' => true, 'available_tables' => 50, 'message' => 'Selecteer eerst een datum']);
        }
        
        $existingReservations = Reservation::where('reservation_date', 'like', $date . '%')
            ->where('status', '!=', 'cancelled')
            ->get();
        
        $totalGuests = $existingReservations->sum('number_of_guests');
        $maxCapacity = 50;
        $availableTables = max(0, $maxCapacity - $totalGuests);
        
        if ($availableTables > 0) {
            return response()->json([
                'available' => true,
                'available_tables' => $availableTables,
                'message' => "Er zijn nog $availableTables plaatsen beschikbaar."
            ]);
        } else {
            return response()->json([
                'available' => false,
                'available_tables' => 0,
                'message' => 'Helaas is deze datum volgeboekt.'
            ]);
        }
    }
}
