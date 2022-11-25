<?php
require_once 'model/db_c.php';
class Usuario
{
	private $pdo;
	private $msg;

	public $id_estudiante;
	public $id_administrador;
	public $id_conferencista;
	public $id_autor;
	public $id_profesional;
	public $cod_estudiante;
	public $tipo_usuario;
	public $nombre;
	public $apellido;
	public $telefono;
	public $sexo;
	public $correo;
	public $contrasena;
	public $gafete;
	public $id_residencia;
	public $id_ocupacion;
	public $id_entidad;
	public $id_ieee;
	public $id_wpa;
	public $id_pago;


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
			$stm = $this->pdo->prepare("SELECT correo, contraseña FROM estudiante UNION
			SELECT correo, contraseña FROM profesional UNION
			SELECT correo, contraseña FROM autor
			WHERE correo = ? AND contraseña = ?");
			$stm->execute(array($data->correo, $data->contrasena));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	
}
