<?php
class Certificados
{
	private $pdo;
	private $msg;

	public $id_certificado;
	public $id_profesional;
	public $id_estudiante;
	public $id_congreso;
	public $id_evento;
	public $total_horas;
	public $certificado;


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

	public function ObtenerCertificadoProfesionalCongreso()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_certificado as ID, concat(p.nombre, ' ',p.apellido) as Profesional, p.correo as Correo, c.titulo as Congreso, total_horas 'Total de Horas', Convert(DATE, c.fecha_fin) as Finalizacion, certificado as 'Certificado'
			FROM Certificado_Prof_C cpc, Profesional p, Congreso c
			WHERE p.id_profesional = cpc.id_profesional 
			and c.id_congreso = cpc.id_congreso 
			and cpc.total_horas > c.horas_minimas");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoProfesionalEvento()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_certificado as ID, concat(p.nombre, ' ',p.apellido) as Profesional, p.correo as Correo, c.titulo as Evento, total_horas 'Total de Horas', Convert(DATE, c.fecha_fin) as Finalizacion, certificado as 'Certificado'
			FROM Certificado_Prof_E cpc, Profesional p, Evento c
			WHERE p.id_profesional = cpc.id_profesional 
			and c.id_evento = cpc.id_evento 
			and cpc.total_horas > c.horas_minimas");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	/* SELECT id_certificado as ID, concat(p.nombre, ' ',p.apellido) as Estudiante, p.correo as Correo, c.titulo as Congreso, total_horas 'Total de Horas', Convert(DATE, c.fecha_fin) as Finalizacion, certificado as 'Certificado'
			FROM Certificado_Est_C cpc, Estudiante p, Congreso c
			WHERE p.id_estudiante = cpc.id_estudiante 
			and c.id_congreso = cpc.id_congreso 
			and cpc.total_horas > c.horas_minimas */
	public function ObtenerCertificadoEstudianteCongreso($id)
	{
		try {
			$stm = $this->pdo->prepare("select c.id_certificado as id, CONCAT(es.nombre,'',es.apellido) as nombre, es.correo, titulo, total_horas 'Total de Horas', Convert(DATE, co.fecha_fin) as Finalizacion, certificado
			from Certificado_Est_C c
			inner join Estudiante es
			on es.id_estudiante = c.id_estudiante
			inner join Congreso co
			on co.id_congreso = c.id_congreso and c.total_horas > co.horas_minimas
			where c.id_estudiante = ?");
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoEstudianteEvento()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_certificado as ID, concat(p.nombre, ' ',p.apellido) as Estudiante, p.correo as Correo, c.titulo as Evento, total_horas 'Total de Horas', Convert(DATE, c.fecha_fin) as Finalizacion, certificado as 'Certificado'
			FROM Certificado_Est_E cpc, Estudiante p, Evento c
			WHERE p.id_estudiante = cpc.id_estudiante
			and c.id_evento = cpc.id_evento 
			and cpc.total_horas > c.horas_minimas");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


}

