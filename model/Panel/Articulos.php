<?php
class Articulos
{
	private $pdo;
	private $msg;

    public $id_articulo;
    public $cod_aprobado;
    public $nombre;
    public $id_autor;

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

    public function ObtenerTodosLosArticulos()
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Articulo");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}