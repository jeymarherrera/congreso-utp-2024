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


	public function ObtenerCertificadoProfesional()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_certificado, id_profesional, id_congreso, total_horas, certificado FROM Certificado_Prof_C WHERE id_profesional ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}

