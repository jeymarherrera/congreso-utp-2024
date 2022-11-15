<?php
class Membresias
{
	private $pdo;
	private $msg;

    public $id_ieee;
    public $id_wpa;
    public $cod_membresia;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function ObtenerTodasLasMembresiasIEEE()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM ieee");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

    public function ObtenerTodasLasMembresiasWPA()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM wpa");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}