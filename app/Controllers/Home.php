<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Vista principal
    public function index()
    {
        $data = ["titulo" => "Sneaker Society - Inicio"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_principal");
        echo view("vista_footer");
    }
    // Vista de contacto
    public function contacto()
    {
        $data = ["titulo" => "Sneaker Society - Contacto"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_contacto");
        echo view("vista_footer");
    }
    // Vista quienes somos
    public function quienes()
    {
        $data = ["titulo" => "Sneaker Society - Quienes Somos"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_quienes_somos");
        echo view("vista_footer");
    }
    // Vista de comercialización
    public function comercializacion()
    {
        $data = ["titulo" => "Sneaker Society - Comercialización"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_comercializacion");
        echo view("vista_footer");
    }
    // Vista de terminos y usos
    public function terminos()
    {
        $data = ["titulo" => "Sneaker Society - Términos y Usos"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_terminos_usos");
        echo view("vista_footer");
    }

    // Vista de como comprar
    public function como_comprar()
    {
        $data = ["titulo" => "Sneaker Society - Cómo Comprar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("pagina_como_comprar");
        echo view("vista_footer");
    }
}