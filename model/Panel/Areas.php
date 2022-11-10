<?php
class Areas
{
	private $pdo;
	private $msg;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodasLasAreas()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Area");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function CrearArea(Areas $data)
	{
		try {

			$sql = "INSERT INTO Area (nombre)
				VALUES ('?')";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo
					)
				);
			$this->msg = "¡Área creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}
}
