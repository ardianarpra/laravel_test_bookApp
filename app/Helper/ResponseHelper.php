<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function successResponse($message = 'Proses berhasil', $data = [], $statusCode = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public static function validationErrorResponse($errors)
    {
        $customErrors = [];

        foreach ($errors as $field => $messages) {
            $customErrors[] = [
                'field' => $field,
                'message' => $messages[0] // Ambil pesan pertama untuk setiap field
            ];
        }

        

        return response()->json([
            'status' => 'error',
            'message' => 'Validasi gagal',
            'errors' => $customErrors
        ], 422);
    }

    public static function serverErrorResponse($exception)
    {
        return response()->json([
            'status' => 'error',
            'message' => 'Terjadi kesalahan Internal Server Error #500',
            'error' => $exception->getMessage()
        ], 500);
    }
}
