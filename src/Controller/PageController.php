<?php
// Gère les pages de base

namespace App\Controller;

class PageController extends Controller
{
    public function home(): void
    {
        $gretting = "Hello";
        $name = "John";

        $this->render("page/home", [
            "greetings"=>$gretting,
            "name"=>$name,
        ]);
    }

    public function about(): void
    {
        $this->render("page/about");
    }
}
