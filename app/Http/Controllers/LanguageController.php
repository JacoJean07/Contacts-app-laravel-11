<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // Verifica si el idioma es válido
        if (in_array($locale, ['en', 'es', 'fr', 'de', 'pt', 'ja'])) {
            // Cambia el idioma
            App::setLocale($locale);

            // Guarda el idioma en la sesión
            session()->put('locale', $locale);
        }

        // Redirige a la página anterior
        return Redirect::back();
    }
}
