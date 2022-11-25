<?php
class Entidades
{
	private $pdo;
	private $msg;


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

	public function ObtenerTodasLasEntidades()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Entidad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

    public function ObtenerTodasLasOcupacion()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Ocupacion");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}