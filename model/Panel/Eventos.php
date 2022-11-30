<?php
class Eventos
{
	private $pdo;
	private $msg;

	public $titulo;
	public $ponente;
	public $horas;
    public $cantidad_ponencias;
    public $fecha_inicio;
    public $fecha_fin;
    public $id_sala;
	public $id_evento;
    public $id_congreso;

	

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

	public function ObtenerTodasLosEventos()
	{
		try {
			$stm = $this->pdo->prepare("select id_evento, e.titulo,e.horas_minimas, cantidad_ponencias, e.fecha_inicio, e.fecha_fin, s.num_sala, co.titulo as congreso
					from Evento e
					inner join sala as s on e.id_sala = s.id_sala
					inner join Congreso co on e.id_congreso = co.id_congreso");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodasLasPonencias()
	{
		try {
			$stm = $this->pdo->prepare("Select CONCAT( au.nombre,' ', au.apellido) as Nombre, e.titulo as titulo, a.fecha_inicio ,a.fecha_fin, a.titulo as ponencia
								from Autor_Evento a
								inner join Autor au
								on a.id_autor = au.id_autor
								inner join Evento e
								on e.id_evento = a.id_evento");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	

	public function CrearConferencia(Eventos $data)
	{
		try {

			$sql = "INSERT INTO evento (titulo,horas_minimas, cantidad_ponencias, fecha_inicio, fecha_fin, id_sala, id_congreso)
				VALUES (?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->titulo,
						$data->horas,
						$data->cantidad_ponencias,
						$data->fecha_inicio,
						$data->fecha_fin,
						$data->id_sala,
						$data->id_congreso
					)
				);
			$this->msg = "¡Evento creado con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerTodosLosAutores()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM autor");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function CrearPonencia(Eventos $data)
	{
		try {
			$sql = "INSERT INTO autor_Evento (id_autor, titulo, fecha_inicio, fecha_fin, id_evento)
				VALUES (?,?,?,?,?)";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ponente,
						$data->titulo,
						$data->fecha_inicio,
						$data->fecha_fin,
						$data->id_evento
					)
				);
			$this->msg = "¡Ponencia creada con éxito!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "¡Error de creación!&t=text-danger";
		}
		return $this->msg;
	}
}