<?php
class Areas
{
	private $pdo;
	private $msg;

	public $nombre;
	public $id_area;

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
				VALUES (?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombre
					)
				);
			$this->msg = "¡Área creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger".$data->nombre;
		}
		return $this->msg;
	}

	public function EliminarArea($data)
	{
		try {
			$sql = "DELETE FROM Area WHERE id_area = ? ";
			$this->pdo->prepare($sql)->execute(array($data));
			$this->msg = "¡El area ha sido eliminada!&t=text-success".$data;
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger".$data;
		}
		return $this->msg;
	}

}
