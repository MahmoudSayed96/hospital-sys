<?php

namespace App\Traits;
/**
 * This trait for handling json response.
 */
trait JsonResponseTrait
{
    public function  jsonResponse($data = [], $statusCode = 200, $error = []) {
        return response()->json([
            'status' => $statusCode,
            'data'   => $data,
            'error'  => !empty($error) ? $error : ''
        ]);
    }

    public function notFoundResponse($data = [], $error = []) {
        $this->jsonResponse($data, 404, 'Not Found.');
    }

    public function serverErrorResponse($data = [], $error = []) {
        $this->jsonResponse($data, 500, 'Server Error.');
    }
}
