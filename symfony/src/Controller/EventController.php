<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    // GET метод — список подій
    #[Route('/events', name: 'event_index', methods: ['GET'])]
    public function index(): JsonResponse {
        return new JsonResponse([
            ['id' => 1, 'title' => 'Tech Conference 2026', 'date' => '2026-09-15', 'location' => 'Житомир'],
            ['id' => 2, 'title' => 'AIEO Workshop', 'date' => '2026-10-22', 'location' => 'Онлайн']
        ]);
    }

    // POST метод — створення події
    #[Route('/events', name: 'event_store', methods: ['POST'])]
    public function store(Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true) ?? [];
        return new JsonResponse([
            'message' => 'Подію успішно створено (POST)',
            'data' => $data
        ], 201);
    }

    // PATCH метод — оновлення за ID
    #[Route('/events/{id}', name: 'event_update', methods: ['PATCH'])]
    public function update(int $id, Request $request): JsonResponse {
        $data = json_decode($request->getContent(), true) ?? [];
        return new JsonResponse([
            'message' => "Подію з ID {$id} успешно оновлено (PATCH)",
            'data' => $data
        ]);
    }

    // DELETE метод — видалення за ID
    #[Route('/events/{id}', name: 'event_destroy', methods: ['DELETE'])]
    public function destroy(int $id): JsonResponse {
        return new JsonResponse([
            'message' => "Подію з ID {$id} успішно видалено (DELETE)"
        ]);
    }
}