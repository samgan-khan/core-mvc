<?php
namespace Repositories;

use Models\DemoModel;

/**
 * Class DemoRepository
 * @package Repositories
 */
class DemoRepository {

    /**
     * @var DemoModel
     */
    protected $Demo;

    /**
     * DemoRepository constructor.
     */
    function __construct()
    {
        $this->Demo = new DemoModel();
    }

    public function listing()
    {
        return $this->Demo->listing();
    }
}
