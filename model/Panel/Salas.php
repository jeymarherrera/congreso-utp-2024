<?php
class Salas
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

	public function ObtenerTodasLasSalas()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Sala");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarSala(Salas $data)
	{
		try {

			$sql = "INSERT INTO Sala(num_sala, cantidad_asientos)
			VALUES ('?','?')";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->numero,
						$data->cantidad
					)
				);
			$this->msg = "¡Sala creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}
}