<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    private string $apiBase;

    public function __construct()
    {
        $this->apiBase = env('API_BASE_URL', 'http://localhost:8000/api');
    }

    public function catalogo()
    {
        try {
            $response = Http::timeout(5)->get("{$this->apiBase}/products");
            $productos = $response->successful() ? $response->json() : [];
        } catch (\Exception $e) {
            $productos = [];
        }
        return view('pages.catalogo', compact('productos'));
    }

    public function detalle($id)
    {
        try {
            $response = Http::timeout(5)->get("{$this->apiBase}/products/{$id}");
            if (!$response->successful()) abort(404);
            $producto = $response->json();
        } catch (\Exception $e) {
            abort(404);
        }
        return view('pages.detalle', compact('producto'));
    }
}