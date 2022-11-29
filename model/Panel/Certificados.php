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

	public function ObtenerCertificadoEstudianteCongreso()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_certificado as ID, concat(p.nombre, ' ',p.apellido) as Estudiante, p.correo as Correo, c.titulo as Congreso, total_horas 'Total de Horas', Convert(DATE, c.fecha_fin) as Finalizacion, certificado as 'Certificado'
			FROM Certificado_Est_C cpc, Estudiante p, Congreso c
			WHERE p.id_estudiante = cpc.id_estudiante 
			and c.id_congreso = cpc.id_congreso 
			and cpc.total_horas > c.horas_minimas");
			$stm->execute();
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

