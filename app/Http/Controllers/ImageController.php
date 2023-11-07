<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Carga la imagen del formulario de solicitud
        $image = load_image($request->file('image'));

        // Cambia el tamaño de la imagen a 100 píxeles de ancho y 100 píxeles de alto
        $image = resize_image($image, 250, 350);

        // Guarda la imagen en el directorio `images` con el nombre `my-image.jpg`
        save_image($image, 'images/uno.jpg');

        // Almacena la imagen generada en una variable
        $image_generated = $image;

        return redirect('/');
    }
}
