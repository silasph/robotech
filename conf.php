<?php

/*
 *----------------------------------------------
 * APPLICATION ENVIRONMENT
 *----------------------------------------------
 * Define o ambiente de trabalho, aceita os valores:
 *  - development (desenvolvimento)
 *  - testing (testes)
 *  - production (produção)
 *
 * Conforme o ambiente definido, irá mostrar ou não os erros
 *
 */

define("ENVIRONMENT", "development");

if (defined("ENVIRONMENT"))
{
    switch (ENVIRONMENT)
    {
        case "development":
            error_reporting(E_ALL);
            define ("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/robotech/");
            break;

        case "testing":
        case "production":
            define ("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/");
            break;

        default:
            exit("The application environment is not set correctly.");
    }
}

/*
 *----------------------------------------------
 * URL CONTROL
 *----------------------------------------------
 */

$currentURL = (isset($_GET["load"])) ? $_GET["load"] : "home";

if (substr_count($currentURL, "/") > 0) {
    $currentURL = explode("/",$currentURL);

    $pagina = (file_exists($currentURL[0].".php")) ? $currentURL[0] : "404";

    for ($i = 0; $i < count($currentURL); $i++) {
        $params[$i] = addslashes((isset($currentURL[$i+1]) && !empty($currentURL[$i+1])) ? $currentURL[$i+1] : "");
    }
} else {
    $pagina = (file_exists($currentURL.".php")) ? $currentURL : "404";
}

/*
 *----------------------------------------------
 * DEMAIS CONFIG
 *----------------------------------------------
 */

define ("PATH", dirname(__FILE__));

// require_once(PATH."/admin/dao/crud_configuracao.php");
session_start();

// require_once(PATH."/app/db/crud_configuracao.php");
require_once(PATH."/app/funcoes.php");

if (substr_count($_SERVER['REQUEST_URI'], "cms") > 0) {
    require_once(PATH."/cms/messages.php");
}

define ("TITLE_SITE", "Robotech Automação");
