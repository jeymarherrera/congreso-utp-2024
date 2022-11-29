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
	public $id_pais;
	public $ciudad;
	public $id_provincia;
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

	public function ObtenerTodosLosUsuarios()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM usuarios");

			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerTodosLosRegistros()
	{
		try {
			/* $stm = $this->pdo->prepare("SELECT id_pago, fecha, metodo, tipo.monto, descuento, cena, comision, comision_pago, monto_total, estado
			FROM Pago, Tipo"); */
			$stm = $this->pdo->prepare("SELECT * FROM pago ORDER BY fecha DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function RegistrarConferencista(Conferencias $data)
	{
		try {

			$sql = "INSERT INTO conferencista(id_conferencista, nombre, apellido, telefono, sexo, correo, contraseña, id_pais, ciudad, id_provincia, id_ocupacion, id_entidad)
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
						$data->ciudad,
						$data->id_provincia,
						$data->id_ocupacion,
						$data->id_entidad
					)
				);
			$this->msg = "¡Conferencista registrado con éxito!&t=text-success";
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
			$stm = $this->pdo->prepare("SELECT id_conferencista, con.nombre as nombre_c, apellido, telefono,  sexo, correo,nombre_pais, c.nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e
			from Conferencista con
			inner join Pais pa
			on con.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = con.id_provincia
			inner join ciudad c
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

	public function EliminarConferencista($id)
	{
		try {
			$sql = "DELETE FROM Conferencista
					WHERE id_conferencista = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡El conferencista ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
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
			$stm = $this->pdo->prepare("SELECT id_autor, a.nombre as nombre_a, apellido, telefono,  sexo, correo,nombre_pais, c.nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Autor a
			inner join Pais pa
			on a.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = a.id_provincia
			inner join ciudad c
			on c.id_ciudad = a.ciudad
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

	public function EliminarAutor($id)
	{
		try {
			$sql = "DELETE FROM Autor
					WHERE id_Autor = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡El autor ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
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
			$stm = $this->pdo->prepare("SELECT id_profesional, prof.nombre as nombre_p, apellido, telefono,  sexo, correo,nombre_pais, c.nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Profesional prof
			inner join Pais pa
			on prof.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = prof.id_provincia
			inner join ciudad c
			on c.id_ciudad = prof.ciudad
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

	public function EliminarProfesional($id)
	{
		try {
			$sql = "DELETE FROM Profesional
					WHERE id_profesional = ?";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡El profesional ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
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

	/* public function ObtenerCertificadoProfesional()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_profesional, nombre, apellido, correo, certificado FROM Profesional WHERE id_profesional ? ");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	} */

	public function ObtenerCertificadoProfesional()
	{
		try {
			$sql = $this->pdo->prepare("SELECT c.id_profesional,CONCAT (p.nombre,' ',p.apellido )as nombre, correo,co.titulo ,c.total_horas,co.fecha_fin ,c.certificado
			FROM Certificado_Prof_C c
			inner join Profesional p on p.id_profesional = c.id_profesional
			inner join Congreso co on co.id_congreso = c.id_congreso
			and  c.total_horas >= co.horas_minimas");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoProfesionalEvento()
	{
		try {
			$sql = $this->pdo->prepare("SELECT c.id_profesional,CONCAT (p.nombre,' ',p.apellido )as nombre, correo,e.titulo ,c.total_horas,e.fecha_fin ,c.certificado
			FROM Certificado_Prof_E c
			inner join Profesional p on p.id_profesional = c.id_profesional
			inner join Evento e on e.id_evento = c.id_evento
			and  c.total_horas >= e.horas_minimas");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function ObtenerCertificadoEstudianteEvento()
	{
		try {
			$sql = $this->pdo->prepare("SELECT c.id_estudiante,CONCAT (p.nombre,' ',p.apellido )as nombre, correo,e.titulo ,c.total_horas,e.fecha_fin ,c.certificado
			FROM Certificado_Est_E c
			inner join Profesional p on p.id_profesional = c.id_estudiante
			inner join Evento e on e.id_evento = c.id_evento
			and  c.total_horas >= e.horas_minimas");
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function ObtenerTodosLosEstudiantes()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_estudiante, cod_estudiante, est.nombre as nombre_estudiante, apellido, telefono,  sexo, correo,nombre_pais, c.nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e, cod_ieee, cod_wpa
			from Estudiante est
			inner join Pais pa
			on est.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = est.id_provincia
			inner join ciudad c
			on c.id_ciudad = est.ciudad
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

	public function EliminarEstudiante($id)
	{
		try {
			$sql = "DELETE FROM Estudiante	WHERE id_estudiante = ?";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$id
					)
				);
			$this->msg = "¡El estudiante ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerGafeteEstudiante($id)
	{

		try {
			$stm = $this->pdo->prepare("SELECT * FROM Estudiante WHERE id_estudiante = ?");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function ObtenerCertificadoEstudiante()
	{
		try {
			$sql = $this->pdo->prepare("SELECT e.id_estudiante,CONCAT (e.nombre,' ',e.apellido )as nombre, correo,co.titulo ,c.total_horas,co.fecha_fin ,c.certificado
			FROM Certificado_Est_C c
			inner join Estudiante e on e.id_estudiante = e.id_estudiante
			inner join Congreso co on co.id_congreso = c.id_congreso
			and  c.total_horas >= co.horas_minimas");
			$sql->execute();
			return $sql->fetch(PDO::FETCH_OBJ);
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

			$sql = "INSERT INTO Administrador(id_administrador, nombre, apellido, telefono, sexo, correo, contraseña, id_pais, ciudad, id_provincia, id_ocupacion, id_entidad)
					VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_administrador,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->id_pais,
						$data->ciudad,
						$data->id_provincia,
						$data->id_ocupacion,
						$data->id_entidad
					)
				);
			$this->msg = "El registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "La cedula ya esta registrada en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	}

	public function EliminarAdmin($id_admin)
	{
		try {
			$sql = "DELETE FROM Administrador
					WHERE id_administrador = ? ";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$id_admin
					)
				);
			$this->msg = "¡El administrador ha sido eliminado!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al eliminar, recuerde que no debe exitir ninguna relación con estos datos para obtener una eliminación exitosa&t=text-danger";
		}
		return $this->msg;
	}

	public function ObtenerTodosLosAdmin()
	{
		try {
			$stm = $this->pdo->prepare("SELECT id_administrador, a.nombre as nombre_a, apellido, telefono,  sexo, correo, contraseña,nombre_pais, c.nombre_ciudad, p.nombre as nombre_p, o.nombre as nombre_o, e.nombre as nombre_e
			from Administrador a
			inner join Pais pa
			on a.id_pais = pa.id_pais
			inner join Provincia p
			on p.id_provincia = a.id_provincia
			inner join ciudad c
			on c.id_ciudad = a.ciudad
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
}
