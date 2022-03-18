<?php

namespace App\Http\Controllers\Api;

use App\Models\Column;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CardResource;
use App\Http\Resources\ColumnResource;

class ColumnController extends Controller
{
    public function index()
    {
        $data = Column::with('cards')->get();
        return response()->json(ColumnResource::collection($data), 200);
    }


    public function store(Request $request)
    {
        //
    }



    public function update(Request $request, Column $column)
    {
        //
    }

    public function destroy(Column $column)
    {
        //
    }
}
