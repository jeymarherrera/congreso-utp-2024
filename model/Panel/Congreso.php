<?php
class Congreso
{
	private $pdo;
	private $msg;

	public $titulo;
	public $cantidad_boletos;
	public $horas_minimas;
	public $fecha_inicio;
	public $fecha_fin;

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
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function CrearCongreso(Congreso $data)
	{
		try {

			$sql = "INSERT INTO congreso (titulo, cantidad_boletos, horas_minimas, fecha_inicio, fecha_fin)
				VALUES (?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->cantidad_boletos,
						$data->horas_minimas,
						$data->fecha_inicio,
						$data->fecha_fin 
					)
				);
			$this->msg = "¡Congreso creado con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger&a=".$e->getMessage();
		}
		return $this->msg;
	}

}
