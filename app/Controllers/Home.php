<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data[ "titulo"]="index";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Front/index');
        echo view('Front/footer');
    }
    public function navbar(): string
    {
        $data[ "titulo"]="index";
        echo view("Front/head",$data);
        return view('Front/navbar');
    }
    public function quienes_somos(): string
    {
        $data[ "titulo"]="quienes_somos";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Front/Quienes Somos');
        return view('Front/footer');
    }
    public function acercade(): string
    {
        $data[ "titulo"]="acercade";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Front/Acerca de');
        return view('Front/footer');
    }
    public function registro(): string
    {
        $data[ "titulo"]="registro";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Back/usuario/registro');
        return view('Front/footer');
    }
    public function login(): string
    {
        $data[ "titulo"]="login";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Back/usuario/login');
        return view('Front/footer');
    }
    public function cards_autoridades(): string
    {
        $data[ "titulo"]="cards_autoridades";
        echo view("Front/head",$data);
        echo view('Front/navbar');
        echo view('Front/Cards Autoridades');
        return view('Front/footer');

    }
    public function CrearUsuario(): string
    {
       /* $data[ "titulo"]="CrearUsuario";
        echo view("Front/head",$data) */
        return view('Back/usuario/CrearUsuario');
        
    }
}