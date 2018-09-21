<?php
namespace Models;

/**
 * Class DemoModel
 * @package Models
 */
class DemoModel extends BaseModel {

    /**
     * DemoModel constructor.
     */
    public function __construct()
    {
        $this->table = 'demos';
    }

    public function listing()
    {
        return  $this->formatter(
            $this->execute('Query Goes Here')
        );
    }
}