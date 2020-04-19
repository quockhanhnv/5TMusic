<?php

namespace App\Http\Controllers\Admin;

use App\Services\ReservationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminReservationController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function index(Request $request)
    {
        $reservations = $this->reservationService->orderByField('created_at', 'desc');
        if($name = $request->name) $reservations = $this->reservationService->filter($reservations,'reservation_name', 'like', '%'.$name.'%');

        if($email = $request->email) $reservations = $this->reservationService->filter($reservations,'reservation_email', 'like', '%'.$email.'%');

        if($status = $request->status) $reservations = $this->reservationService->filter($reservations,'reservation_status', '=', $status);



        $reservations = $this->reservationService->withRelation($reservations, ['course']);
        $reservations = $this->reservationService->paginate($reservations, 10);

        return view('admin.reservations.index', compact('reservations'));
    }

    public function changeStatus($action, $id)
    {
        $reservation = $this->reservationService->findById($id);
        if ($reservation) {
            switch ($action) {
                case 'UNACCEPTED_RESERVATION':
                    $reservation->reservation_status = UNACCEPTED_RESERVATION;
                    break;
                case 'ACCEPTED_RESERVATION':
                    $reservation->reservation_status = ACCEPTED_RESERVATION;
                    break;
                case 'CANCELED_RESERVATION':
                    $reservation->reservation_status = CANCELED_RESERVATION;
                    break;
            }

            $reservation->save();
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $reservation = $this->reservationService->findById($id);
        if ($reservation) $reservation->delete();

        return redirect()->back();
    }
}
