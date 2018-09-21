<?php
namespace Controllers;

use Controllers\BaseController;

/**
 * Class HomeController
 * @package Controllers
 */
class HomeController extends BaseController {

    public function index()
    {
        $this->View->renderView('Pages/home');
    }
}