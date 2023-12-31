<?php
namespace App\Helper;

use Illuminate\Http\JsonResponse;


class ResponseHelper
{

    static function success($data, string $message = "Request successful", int $code = 200): JsonResponse
    {
        return response()->json([
            "status" => "success",
            "message" => $message,
            "data" => $data
        ], $code);
    }

    static function fail(string $message = "Request failed", int $code = 400): JsonResponse
    {
        return response()->json([
            "status" => "fail",
            "message" => $message
        ], $code);
    }
}