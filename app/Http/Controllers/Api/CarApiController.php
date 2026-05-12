<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarApiController extends Controller
{
    // GET all cars
    public function index()
    {
        $cars = Car::with('owner')->get();

        return response()->json([
            'status' => true,
            'data' => $cars
        ]);
    }

    // GET single car
    public function show($id)
    {
        $car = Car::with('owner')->find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Car not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $car
        ]);
    }

    // CREATE car
    public function store(Request $request)
    {
        $car = Car::create([
            'reg_number' => $request->reg_number,
            'brand' => $request->brand,
            'model' => $request->model,
            'owner_id' => $request->owner_id
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Car created',
            'data' => $car
        ]);
    }

    // UPDATE car
    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Car not found'
            ], 404);
        }

        $car->update([
            'reg_number' => $request->reg_number,
            'brand' => $request->brand,
            'model' => $request->model,
            'owner_id' => $request->owner_id
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Car updated',
            'data' => $car
        ]);
    }

    // DELETE car
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json([
                'status' => false,
                'message' => 'Car not found'
            ], 404);
        }

        $car->delete();

        return response()->json([
            'status' => true,
            'message' => 'Car deleted'
        ]);
    }
}
