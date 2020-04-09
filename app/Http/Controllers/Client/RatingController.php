<?php

namespace App\Http\Controllers\Client;

use App\Services\RatingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    //get request from views\client\pages\courses\detail.blade.php by transfer ajax
    public function ratingCourse(Request $request)
    {
        $userId = Auth::id() ?? 0; // nếu chưa đăng nhập thì default là 0
        $data = $request->merge(['rating_user_id' => $userId])->toArray();
        $this->ratingService->storeAndStatistic($data);
        return response()->json(['code' => 200, 'data' => 'rating successfully']);
    }
}
