<?php

namespace app;

/**
 * Description of DbConfig
 *
 * @author osi
 */
class DbConfig
{
    const HOST = "localhost";
    const USERNAME = "tog92395_u2020";
    const PASSWORD = "@tog.2020";
    const DB_NAME = "tog92395_tractoronthego_db";



    public static function getConnection()
    {
        return new \mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
    }
}
