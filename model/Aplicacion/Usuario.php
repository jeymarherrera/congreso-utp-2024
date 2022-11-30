<?php
require_once 'model/db_c.php';
class Usuario
{
	private $pdo;
	private $msg;

	public $nombre;
	public $apellido;
	public $nivel;
	public $correo;
	public $contrasena;
	public $resultado;
	public $id_administrador;


	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function ObtenerTodosLosUsuarios(Usuario $data)
	{
		try {
			$stm = $this->pdo->prepare("SELECT correo, contrasena FROM estudiante UNION
			SELECT correo, contrasena FROM profesional UNION
			SELECT correo, contrasena FROM autor
			WHERE correo = ? AND contrasena = ?");
			$stm->execute(array($data->correo, $data->contrasena));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosAdmin(Usuario $data)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM administrador
			WHERE correo = ? AND contrasena = ?");
			$stm->execute(array($data->correo, $data->contrasena));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	

	
}
