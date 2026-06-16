<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // GET метод — просто показує список подій
    public function index() {
        return response()->json([
            ['id' => 1, 'title' => 'Tech Conference 2026', 'date' => '2026-09-15', 'location' => 'Житомир'],
            ['id' => 2, 'title' => 'AIEO Workshop', 'date' => '2026-10-22', 'location' => 'Онлайн']
        ]);
    }

    // POST метод — імітує створення нової події
    public function store(Request $request) {
        return response()->json([
            'message' => 'Подію успішно створено (POST)',
            'data' => $request->all()
        ], 201);
    }

    // PATCH метод — імітує оновлення події за її ID
    public function update(Request $request, $id) {
        return response()->json([
            'message' => "Подію з ID {$id} успішно оновлено (PATCH)",
            'data' => $request->all()
        ]);
    }

    // DELETE метод — імітує видалення події
    public function destroy($id) {
        return response()->json([
            'message' => "Подію з ID {$id} успішно видалено (DELETE)"
        ]);
    }
}