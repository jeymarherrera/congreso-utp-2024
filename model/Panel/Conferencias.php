<?php
class Conferencias
{
	private $pdo;
	private $msg;

	public $id_conferencista;
	public $titulo;
	public $fecha_inicio;
	public $fecha_fin;
	public $id_conferencia;

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
			$stm = $this->pdo->prepare("select id_conferencia, c.titulo, cantidad_ponencias, c.fecha_inicio, c.fecha_fin, s.num_sala, co.titulo as congreso
			from Conferencia c
			inner join sala as s on c.id_sala = s.id_sala
			inner join Congreso co on c.id_congreso = co.id_congreso");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodasLasPonencias()
	{
		try {
			$stm = $this->pdo->prepare("select CONCAT( co.nombre,' ', co.apellido) as Nombre, con.titulo as titulo, c.fecha_inicio ,c.fecha_fin, c.titulo as ponencia
			from Conferencista_Conferencia c
			inner join Conferencista co
			on c.id_conferencista = co.id_conferencista
			inner join Conferencia con
			on con.id_conferencia = c.id_conferencia");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function EliminarPonenteProf($id)
	{
		try {
			$sql = "DELETE FROM  Conferencista_Conferencia
					WHERE titulo = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡La ponencia ha sido eliminada!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerTodosLosPonentes()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM conferencista");
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
				VALUES (?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->cantidad_ponencias,
						$data->fecha_inicio,
						$data->fecha_fin,
						$data->id_sala,
						$data->id_congreso
					)
				);
			$this->msg = "¡Conferencia creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}

	public function EliminarConferencia($id)
	{
		try {
			$sql = "DELETE FROM  Conferencia
					WHERE id_conferencia = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡La conferencia ha sido eliminada!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
		}
		return $this->msg;
	}

	public function CrearPonencia(Conferencias $data)
	{
		try {

			$sql = "INSERT INTO Conferencista_Conferencia (id_conferencista, titulo, fecha_inicio, fecha_fin, id_conferencia)
				VALUES (?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_conferencista,
						$data->titulo,
						$data->fecha_inicio,
						$data->fecha_fin,
						$data->id_conferencia
					)
				);
			$this->msg = "¡Ponencia creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Ponencia no creada!&t=text-danger";
		}
		return $this->msg;
	}
}
