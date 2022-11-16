<?php
class Conferencias
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

	public function ObtenerTodasLasConferencias()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Conferencia");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodasLasPonencias()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Conferencia");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function CrearConferencia(Conferencias $data)
	{
		try {

			$sql = "INSERT INTO Conferencia (titulo, cantidad_ponencias, fecha_inicio, fecha_fin, id_sala, id_congreso)
				VALUES (?,?,?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->cantidad,
						$data->horas,
						$data->fechaIni,
						$data->fecha_fin
					)
				);
			$this->msg = "¡Conferencia creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}

	public function CrearPonencia(Conferencias $data)
	{
		try {

			$sql = "INSERT INTO Conferencia (titulo, cantidad_ponencias, fecha_inicio, fecha_fin, id_sala, id_congreso)
				VALUES ('?','?','?', '?', ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->cantidad,
						$data->horas,
						$data->fechaIni,
						$data->fecha_fin
					)
				);
			$this->msg = "¡Ponencia creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}
}