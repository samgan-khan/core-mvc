<?php
namespace Controllers;

use Repositories\DemoRepository;

/**
 * Class HomeController
 * @package Controllers
 */
class PagesController extends BaseController {

    /**
     * @var DemoRepository
     */
    protected $demoRepository;

    /**
     * HomeController constructor.
     */
    function __construct()
    {

        parent::__construct();
        $this->demoRepository = new DemoRepository();
    }

    public function index()
    {
        $this->View->renderView('Pages/home');
    }

    public function demoList()
    {
        $list = $this->demoRepository->listing();

        /**
         * render this list with view for the data in views.
         * $this->View->renderView('Pages/demo-list', $list);
         */
    }
}