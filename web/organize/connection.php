<?php
/* 
 * Database Connections
 * PDO Attempt, wish me luck
 * Shaela Sutton
 *host=67.60.89.156
 * host=ec2-23-23-130-158.compute-1.amazonaws.com
 */
function connect()
{   
    try
    {
        $user= 'aaxshfcnahrbwi';
        $password = 'ff8800c7b186b1134b1b5059e5306d47926abf3599e6fba861d9a10555cc0ecc';
        $db = new PDO('pgsql:host=67.60.89.156;dbname=dbilarss332cbp', $user, $password);
        return $db;
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
}