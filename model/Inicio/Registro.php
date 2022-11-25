<?php
class Registro
{
	private $pdo;
	private $msg;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarEstudiante(Usuario $data)
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
	}

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
				$this->msg = "Error al guardar los datos autor &t=text-danger";
			}
		}
		return $this->msg;
	}


	public function RegistrarProfesional(Usuario $data)
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
	}
}
