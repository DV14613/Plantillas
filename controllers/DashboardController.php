<?php
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';

class DashboardController
{
    public function dashboard()
    {
        //DOC:2022-05-06:Data de la consulta
        $consulta = BASE_SERVER . "ws/Usuario/getOne&id=" . $_SESSION["idUser"];
        $data = file_get_contents($consulta);
        $tupla = json_decode($data, true);       
        $nombreUsuario = $tupla[0]['nombre'];

        //Cargue de Vista
        require_once 'views/layouts/dashboard/vi_dashboard.php';
    }

    public function vistaUno()
    {
        //DOC:2022-05-06: Verificacion de Administrador
        Utils::adminAutorization();
        require_once 'views/layouts/dashboard/vi_gestionCategorias.php';
    }

    public function vistaDos()
    {
        require_once 'views/layouts/dashboard/vi_crearCategoria.php';
    }

}
