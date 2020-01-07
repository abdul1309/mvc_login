<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 06.03.19
 * Time: 14:37
 */

require 'db/database.php';

/**
 * class Model
 *
 * Methods:
 * __constructor: get the connection with the database.
 *
 * fromDatabase: get information from the database.
 */
class Model
{
    private $_connection;

    /**
     * Model constructor.
     * return mysqli a connection with the database und put that in $connection.
     */
    public function __construct()
    {
        $connection = new Database();
        $this->_connection = $connection->getConnection();
    }

    /**
     * fromDatabase.
     * @param string $option the name of case.
     * @param string $sql.
     * @return array|string
     */
    public function fromDatabase($option, $sql)
    {
        $rows = null;
        switch ($option) {
            case 'show':
            $result_sql = mysqli_query($this->_connection, $sql);
            if (!$result_sql) {
                    print "Error: " . $result_sql . "<br>" . mysqli_error($this->_connection);
            } else {
                while ($row = mysqli_fetch_array($result_sql, MYSQLI_ASSOC)) {
                        $rows[] = $row;
                }
                return $rows;
            }
            break;
            case 'insert':
            $result_sql = mysqli_query($this->_connection, $sql);
            if (!$result_sql) {
                print "Error: " . $result_sql . "<br>" . mysqli_error($this->_connection);
            } else {
                return "success";
            }
            break;
        }

    }
}

