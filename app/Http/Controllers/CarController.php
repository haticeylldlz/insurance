<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('owner')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $owners = Owner::all();
        return view('cars.create', compact('owners'));
    }

    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->validated());

        // 🔥 FOTO UPLOAD
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {

                $path = $file->store('cars', 'public');

                $car->photos()->create([
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('cars.index');
    }

    public function edit(Car $car)
    {
        $car->load('photos');
        $owners = Owner::all();
        return view('cars.edit', compact('car', 'owners'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $validated = $request->validated();
        $car->update($validated);

        if (! empty($validated['delete_photo_ids'])) {
            $photosToDelete = $car->photos()->whereIn('id', $validated['delete_photo_ids'])->get();

            foreach ($photosToDelete as $photo) {
                Storage::disk('public')->delete($photo->path);
                $photo->delete();
            }
        }

        // 🔥 YENİ FOTO EKLEME (editte)
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {

                $path = $file->store('cars', 'public');

                $car->photos()->create([
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('cars.index');
    }

    public function destroy(Car $car)
    {
        foreach ($car->photos as $photo) {
            Storage::disk('public')->delete($photo->path);
        }

        $car->delete();
        return redirect()->route('cars.index');
    }

    public function show(Car $car)
    {
        $car->load(['owner', 'photos']);
        return view('cars.show', compact('car'));
    }
}
