<?php
class Salas
{
	private $pdo;
	private $msg;

	public $num_sala;
	public $cantidad_asientos;

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
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarSala(Salas $data)
	{
		try {

			$sql = "INSERT INTO Sala(num_sala, cantidad_asientos)
			VALUES (?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->num_sala,
						$data->cantidad_asientos
					)
				);
			$this->msg = "¡Sala creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}

	public function EliminarSala($id)
	{
		try {
			$sql = "DELETE FROM  sala
					WHERE id_sala = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡La sala ha sido eliminada!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
		}
		return $this->msg;
	}
}