<?php
class Ubicacion
{
	private $pdo;

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


	public function ConsultarPais()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM pais");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function ConsultarProvincia()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM provincia");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

    public function ConsultarCiudad()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM ciudad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


}