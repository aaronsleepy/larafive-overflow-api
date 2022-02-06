<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class WelcomeController extends Controller
{
  public function index(): JsonResponse
  {
    return response()->json([
      'message' => 'Welcome Restful API',
    ], 200, [], JSON_PRETTY_PRINT);
  }
}
