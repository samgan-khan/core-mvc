<?php
namespace Core\Nucleus;

/**
 * Class Initializer
 * @package Core\Nucleus
 */
class Initializer {

    /**
     * Initializer constructor.
     */
    public function __construct()
    {
    }

    /**
     * running Server at :1122
     */
    public function server()
    {
        echo 'Server running at http://localhost:1122';
        shell_exec('php -S localhost:1122 ' . __DIR__ . '/../init.php');
    }

    /**
     *
     */
    public function version()
    {
        echo 'V1.0 (beta)';
    }

}