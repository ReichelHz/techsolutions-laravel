<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UFService
{
    public static function obtenerValorUF()
    {
        $response = Http::get('https://mindicador.cl/api/uf');

        if ($response->successful()) {
            $data = $response->json();
            return $data['serie'][0]['valor'] ?? null;
        }

        return null;
    }
}
