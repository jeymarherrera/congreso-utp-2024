<?php
class Congreso
{
	private $pdo;
	private $msg;

	public $titulo;
	public $cantidad;
	public $horas;
	public $fechaIni;
	public $fechaFin;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function ObtenerTodosLosCongresos()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_congreso, titulo, cantidad_boletos, horas_minimas, fecha_inicio, fecha_fin
			FROM Congreso");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function CrearCongreso(Congreso $data)
	{
		try {

			$sql = "INSERT INTO Congreso (titulo, cantidad_boletos, horas_minimas, fecha_inicio, fecha_fin)
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
			$this->msg = "¡Congreso creado con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}
}
