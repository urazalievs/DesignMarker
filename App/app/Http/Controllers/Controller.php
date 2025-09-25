<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use  Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

abstract class Controller extends BaseController
{
    use AuthorizesRequests,ValidatesRequests;

    public function response(array $data = [] ):JsonResponse
    {
        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function success(string $message,array $data = [] ):JsonResponse
    {
        return response()->json([
            'succes' => true,
            'status' => 'success',
            'message' => $message ?? 'operation succesful',
            'data' => $data,
        ], 200);
    }

    public function error(string $message,array $data ):JsonResponse
    {
        return response()->json([
            'succes' => false,
            'status' => 'error',
            'message' => $message ?? 'error occured',
            'data' => $data,
        ], 401);
    }
}
