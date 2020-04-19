<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\ReservationRequest;
use App\Http\Controllers\Controller;
use App\Services\ReservationService;
use Carbon\Carbon;

class ReservationController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function reservation(ReservationRequest $request)
    {
        if($request->ajax()) {
            $reservation = $this->reservationService->store($request);
            if($reservation) {
                return response()->json(['status' => 200, 'type' => 'success', 'message' => 'Đăng ký lịch học thành công, 5T-Guitar sẽ phản hồi bạn sớm nhất có thể']);
            }
            return response()->json(['status' => 200, 'type' => 'warning', 'message' => 'Xảy ra lỗi trong quá trình đăng ký, vui lòng liên hệ email của trung tâm ở trên website']);
        }
    }
}
