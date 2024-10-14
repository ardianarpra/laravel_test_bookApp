<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ResponseHelper;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function show(Request $req){
        try {
            $data = DB::table("book")->get();
            return ResponseHelper::successResponse(data:$data,statusCode:200);
        } catch (\Throwable $th) {
            return ResponseHelper::serverErrorResponse($th);
        }
    }

    public function store(Request $req){
        try {
            $validated = $req->validate([
                'judul'=> 'required',
                'penulis'=> 'required',
                'tahun_terbit'=> 'required',
            ]);
            if($validated){
                $storeData = [
                    "judul" => $validated['judul'],
                    "penulis" => $validated['penulis'],
                    "tahun_terbit" => $validated['tahun_terbit'],
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ];
                DB::table("book")->insert($storeData);
            }
            return ResponseHelper::successResponse(data:$storeData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return ResponseHelper::validationErrorResponse($e->errors());
        } catch (\Throwable $th) {
            return ResponseHelper::serverErrorResponse($th);
        }
    }
}
