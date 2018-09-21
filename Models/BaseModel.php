<?php
namespace Models;

use Config\Connection;

/**
 * Class BaseModel
 * @package Models
 */
class BaseModel
{
    /**
     * @var \mysqli
     */
    protected $DB;

    /**
     * @var string
     */
    protected $table;

    /**
     * BaseModel constructor.
     */
    function __construct()
    {
        $connection = new Connection();
        $this->DB = $connection->getConnected();
    }

    /**
     * return multidimensional associated array from result set.
     * @param $result
     * @return array
     */
    protected function formatter($result)
    {
        $formattedData = array();
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $formattedData[$count] = $row;
            $count++;
        }
        mysqli_free_result($result);

        return $formattedData;
    }

    /**
     * @param $query
     * @return bool|\mysqli_result
     */
    protected function execute($query)
    {
        $result = mysqli_query(
            $this->DB,
            $query
        );

        if ($result) {
            return $result;
        } else {
            printf("error: %s\n", mysqli_error($this->DB)); die;
        }
    }
}