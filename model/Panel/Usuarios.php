<?php
class Usuarios
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
		try
		{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosUsuarios()
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			          
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosRegistros()
	{
		try {
			$stm = $this->pdo->prepare("SELECT fecha, metodo, tipo.monto, descuento, cena, comision, comision_pago, monto_total, estado
			FROM Pago, Tipo");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function RegistrarConferencista(Conferencias $data)
	{
		try {

			$sql = "INSERT INTO conferencista(id_conferencista, nombre, apellido, telefono, sexo, correo, contraseña, id_pais, id_ciudad, id_provincia, id_ocupacion, id_entidad)
					VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_conferencista,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contraseña,
						$data->id_pais,
						$data->id_ciudad,
						$data->id_provincia,
						$data->id_ocupacion,
						$data->id_entidad
					)
				);
			$this->msg = "¡Conferencsita registrado con éxito!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "La cédula ya está registrada en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al registrar el conferencista&t=text-danger";
			}
		}
		return $this->msg;
	}

	public function ObtenerTodosLosConferencistas()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_conferencista, con.nombre as nombre_c, apellido, telefono,  sexo, correo,nombre_pais, nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Conferencista con
			inner join Pais pa
			on con.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = con.id_provincia
			inner join Ciudad c
			on c.id_ciudad = con.id_ciudad
			inner join Ocupacion o
			on o.id_ocupacion = con.id_ocupacion
			inner join Entidad e
			on e.id_entidad = con.id_entidad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function EliminarConferencista(Usuario $data)
	{
		try {
			$sql = "DELETE FROM Conferencista
					WHERE id_conferencista = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_administrador
					)
				);
			$this->msg = "¡El conferencista ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerGafete()
	{
		try {
			$stm = $this->pdo->prepare("SELECT gafete FROM Conferencista WHERE id_conferencista = ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosAutores()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_autor, a.nombre as nombre_a, apellido, telefono,  sexo, correo,nombre_pais, nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Autor a
			inner join Pais pa
			on a.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = a.id_provincia
			inner join Ciudad c
			on c.id_ciudad = a.id_ciudad
			inner join Ocupacion o
			on o.id_ocupacion = a.id_ocupacion
			inner join Entidad e
			on e.id_entidad = a.id_entidad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function EliminarAutor(Usuario $data)
	{
		try {
			$sql = "DELETE FROM Autor
					WHERE id_Autor = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_administrador
					)
				);
			$this->msg = "¡El autor ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerGafeteAutor()
	{
		try {
			$stm = $this->pdo->prepare("SELECT gafete FROM Autor WHERE id_autor = ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosProfesionales()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_profesional, prof.nombre as nombre_p, apellido, telefono,  sexo, correo,nombre_pais, nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Profesional prof
			inner join Pais pa
			on prof.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = prof.id_provincia
			inner join Ciudad c
			on c.id_ciudad = prof.id_ciudad
			inner join Ocupacion o
			on o.id_ocupacion = prof.id_ocupacion
			inner join Entidad e
			on e.id_entidad = prof.id_entidad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function EliminarProfesional(Usuario $data)
	{
		try {
			$sql = "DELETE FROM Profesional
					WHERE id_profesional = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_profesional
					)
				);
			$this->msg = "¡El profesional ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerGafeteProfesional()
	{
		try {
			$stm = $this->pdo->prepare("SELECT gafete FROM Profesional WHERE id_profesional = ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoProfesional()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_profesional, nombre, apellido, correo, certificado FROM Profesional WHERE id_profesional ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosEstudiantes()
	{
		try {
			$stm = $this->pdo->prepare("
			SELECT id_estudiante, cod_estudiante, est.nombre as nombre_estudiante, apellido, telefono,  sexo, correo,nombre_pais, nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Estudiante est
			inner join Pais pa
			on est.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = est.id_provincia
			inner join Ciudad c
			on c.id_ciudad = est.id_ciudad
			inner join Ocupacion o
			on o.id_ocupacion = est.id_ocupacion
			inner join Entidad e
			on e.id_entidad = est.id_entidad");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function EliminarEstudiante(Usuario $data)
	{
		try {
			$sql = "DELETE FROM Estudiante
					WHERE id_estudiante = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_profesional
					)
				);
			$this->msg = "¡El estudiante ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerGafeteEstudiante(Usuario $data)
	{
		try {
			$stm = $this->pdo->prepare("SELECT gafete FROM Estudiante WHERE id_estudiante = ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoEstudiante()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_estudiante, nombre, apellido, correo, certificado FROM Estudiante WHERE id_estudiante = ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerUsuariosCertificado()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_estudiante, nombre, apellido, correo
			FROM Estudiante  
			UNION  
			SELECT  id_profesional, nombre, apellido, correo  
			FROM Profesional  
			ORDER BY nombre; ");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function RegistrarAdmin(Usuario $data)
	{
		try {

			$sql = "INSERT INTO Administrador(nombre, apellido, telefono, sexo, correo, contraseña, id_residencia, id_ocupacion, id_ieee, id_wpa)
					VALUES(?,?,?,?,?,?,?,?,?,?)
					INSERT INTO residencia(id_pais, id_provincia, id_ciudad)
					VALUES(?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->id_residencia,
						$data->id_ocupacion,
						$data->id_ieee,
						$data->id_wpa,
					)
				);
			$this->msg = "El registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	}

	public function EliminarAdmin(Usuario $data)
	{
		try {
			$sql = "DELETE FROM Administrador
					WHERE id_administrador = ? ";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_administrador
					)
				);
			$this->msg = "¡El administrador ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerTodosLosAdmin()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM administrador");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


}