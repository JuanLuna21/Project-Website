<?php
require_once('../tpe/libs/smarty-3.1.39/libs/Smarty.class.php');

class StoreView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function ShowHome($check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->display('templates/home.tpl');
    }
    function ShowGamesStore($games, $company, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('juegos', $games);
        $this->smarty->assign('company', $company);
        $this->smarty->display('templates/store.tpl');
    }

    function ShowGamesOfCompany($games, $company, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('titulo', $company->empresa);
        $this->smarty->assign('games', $games);
        $this->smarty->display('templates/juegosdeempresa.tpl');
    }

    function ShowGame($user, $game, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('titulo', $game->juego);
        $this->smarty->assign('juego', $game);
        $this->smarty->display('templates/ViewGame.tpl');
    }
    function UpdateViewGame($game, $company, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('titulo', $game->juego);
        $this->smarty->assign('juego', $game);
        $this->smarty->assign('company', $company);
        $this->smarty->display('templates/updategame.tpl');
    }
    function UpdateViewCompany($company, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('empresa', $company->empresa);
        $this->smarty->assign('id', $company->id_empresa);
        $this->smarty->assign('informacion', $company->informacion);
        $this->smarty->display('templates/update.tpl');
    }
    function ShowCompanys($companys, $check)
    {
        $this->smarty->assign('check', $check);
        $this->smarty->assign('companys', $companys);
        $this->smarty->display('templates/companys.tpl');
    }

    function showHomeLocation()
    {
        header("Location: " . BASE_URL . "home");
    }
    function showStoreLocation()
    {
        header("Location: " . BASE_URL . "store");
    }
    function showCompanysLocation()
    {
        header("Location: " . BASE_URL . "Companys");
    }
}
