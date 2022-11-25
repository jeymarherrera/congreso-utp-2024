<?php
class Areas
{
	private $pdo;
	private $msg;

	public $nombre;

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
			$stm = $this->pdo->prepare("SELECT * FROM AREA");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
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
						$data->nombre
					)
				);
			$this->msg = "¡Área creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}

	public function EliminarArea($idArea)
	{
		try {
			$sql = "DELETE FROM Areas
					WHERE id_area = ? ";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$idArea
					)
				);
			$this->msg = "¡El area ha sido eliminada!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar &t=text-danger".$idArea;
		}
		return $this->msg;
	}
}
