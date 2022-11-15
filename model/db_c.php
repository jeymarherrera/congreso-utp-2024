<?php
require_once 'config/config.php';
class Db
{

    public static function StartUp()
    {
        // PHP Data Objects(PDO) Sample Code:
        try {
            $pdo = new PDO("sqlsrv:server = tcp:profsql.database.windows.net,1433; Database = Congreso_Db", "adminsql", "{AdmPfsql1}");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }
        return $pdo;
    }
}
