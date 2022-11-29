<?php
class Registro
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
	public $cedula;
	public $contrasena;
	public $gafete;
	public $id_pais;
	public $id_ciudad;
	public $id_provincia;
	public $id_ocupacion;
	public $id_entidad;
	public $id_ieee;
	public $id_wpa;

	public $id_pago;
	public $fecha;
	public $id_tipo;
	public $metodo;
 	public $descuento;
	public $cena;
    public $comision;
    public $comision_pago;
	public $monto;
    public $monto_total;
    public $estado;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}



	public function Registro(Usuario $data)
	{
		try {
			$sql = "declare @fecha datetime	Set @fecha=GETDATE() Select CONVERT(varchar,@fecha,20) as [YYYY-MM-DD HH:MM:SS]; declare @id_pago int
			EXEC PagoEst  @fecha, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,@id_pago";

			/* $sql = "INSERT INTO Estudiante ( cod_estudiante, tipo_estudiante, nombre, apellido, telefono, sexo, correo, gafete, id_residencia, id_ocupacion, id_entidad, id_ieee, id_wpa, id_pago)
				VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; */

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_tipo,
						$data->metodo,
						$data->descuento,
						$data->cena,
						$data->monto,
						$data->comision,
						$data->comision_pago,
						$data->monto_total,
						$data->estado,
						$data->cedula,
						$data->cod_estudiante,
						$data->tipo_usuario,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->gafete,
						$data->id_pais,
						$data->id_provincia,
						$data->id_ciudad,
						$data->id_ocupacion,
						$data->id_entidad,
						// $data->id_ieee,
						// $data->id_wpa,
						$data->id_pago
					)
				);
				var_dump($data);

			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}

		return $this->msg;
	}



	/* public function RegistrarEstudiante(Usuario $data)
	{
		try {

			$sql = "INSERT INTO Estudiante ( cod_estudiante, tipo_estudiante, nombre, apellido, telefono, sexo, correo, gafete, id_residencia, id_ocupacion, id_entidad, id_ieee, id_wpa, id_pago)
				VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->cod_estudiante,
						$data->tipo_usuario,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->gafete,
						$data->id_residencia,
						$data->id_ocupacion,
						$data->id_entidad,
						$data->id_ieee,
						$data->id_wpa,
						$data->id_pago
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	}


	public function RegistrarPago(Usuario $data)
	{
		try {

			$sql = "INSERT INTO Pago (fecha, id_tipo, metodo, descuento, cena, comision, comision_pago, monto_total, estado)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->fecha,
						$data->id_tipo,
						$data->metodo,
						$data->descuento,
						$data->cena,
						$data->comision,
						$data->comision_pago,
						$data->monto_total,
						$data->estado = 1
					)
				);
			$this->msg = "Su pago se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			$this->msg = "Error al guardar los datos&t=text-danger";
		}
		return $this->msg;
	} */

	public function ObtenerTodosLosEstudiantes(Usuario $data)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM estudiante");
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}



	public function RegistrarAutor(Usuario $data)
	{
		try {

			$sql = "declare @fecha datetime	Set @fecha=GETDATE() Select CONVERT(varchar,@fecha,20) as [YYYY-MM-DD HH:MM:SS]; declare @id_pago int
			EXEC PagoAutor  @fecha, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,@id_pago";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_tipo,
						$data->metodo,
						$data->descuento,
						$data->cena,
						$data->monto,
						$data->comision,
						$data->comision_pago,
						$data->monto_total,
						$data->estado,
						$data->cedula,
						$data->tipo_usuario,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->gafete,
						$data->id_pais,
						$data->id_provincia,
						$data->id_ciudad,
						$data->id_ocupacion,
						$data->id_entidad,
						// $data->id_ieee,
						// $data->id_wpa,
						$data->id_pago
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos autor &t=text-danger";
			}
		}
		return $this->msg;
	}


	/* public function RegistrarProfesional(Usuario $data)
	{
		try {

			$sql = "INSERT INTO Autor (tipo_autor, nombre, apellido, telefono, sexo, correo, gafete, id_residencia, id_ocupacion, id_entidad, id_ieee, id_wpa, id_pago)
				VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->tipo_autor,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->gafete,
						$data->id_residencia,
						$data->id_ocupacion,
						$data->id_entidad,
						$data->id_ieee,
						$data->id_wpa,
						$data->id_pago
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	} */

	public function RegistrarProfesional(Usuario $data)
	{
		try {

			$sql = "declare @fecha datetime	Set @fecha=GETDATE() Select CONVERT(varchar,@fecha,20) as [YYYY-MM-DD HH:MM:SS]; declare @id_pago int
			EXEC PagoEst  @fecha, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,@id_pago";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id_tipo,
						$data->metodo,
						$data->descuento,
						$data->cena,
						$data->monto,
						$data->comision,
						$data->comision_pago,
						$data->monto_total,
						$data->estado,
						$data->cedula,
						$data->tipo_usuario,
						$data->nombre,
						$data->apellido,
						$data->telefono,
						$data->sexo,
						$data->correo,
						$data->contrasena,
						$data->gafete,
						$data->id_pais,
						$data->id_provincia,
						$data->id_ciudad,
						$data->id_ocupacion,
						$data->id_entidad,
						// $data->id_ieee,
						// $data->id_wpa,
						$data->id_pago
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	}
}
