<?php
require_once 'config/config.php';
class Db
{

    public static function StartUp()
    {
        // PHP Data Objects(PDO) Sample Code:
        try {
            $pdo = new PDO("sqlsrv:server = tcp:profsql.database.windows.net,1433; Database = Congreso_Db", "adminsql", "{your_password_here}");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "adminsql", "pwd" => "{AdmPfsql1}", "Database" => "Congreso_Db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:profsql.database.windows.net,1433";
        $pdo = sqlsrv_connect($serverName, $connectionInfo);
        return $pdo;
        // $pdo = new PDO('mysql:host='.constant('DB_HOST').';dbname='.constant('DB').';charset=utf8', ''.constant('DB_USER').'', ''.constant('DB_PASS').'');
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        // return $pdo;
    }
}
