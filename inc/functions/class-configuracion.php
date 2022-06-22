<?php
/**
 * Configuracion class
 * crea la conexion a la base de datos
 */
class Configuracion {

    public $id;
    public $logo;
    public $banner;
    public $telefono;
    public $email;
    public $direccion;
    public $atencion;
    public $whatsapp;
    public $facebook;
    public $instagram;
    public $twitter;
    public $google_api;
    public $site_key;
    public $color;
    protected $obj;

    
	function __construct() {	

		$this->obj = new sQuery();
        $result = $this->obj->executeQuery("SELECT * FROM configuracion WHERE id='1'");
        $row = mysqli_fetch_assoc($result);

        $this->id = $row['id'];
        $this->logo = $row['logo'];
        $this->banner = $row['banner'];
        $this->telefono = $row['telefono'];
        $this->email = $row['email'];
        $this->direccion = $row['direccion'];
        $this->atencion = $row['atencion'];
        $this->whatsapp = $row['whatsapp'];
        $this->facebook = $row['facebook'];
        $this->instagram = $row['instagram'];
        $this->twitter = $row['twitter'];
        $this->google_api = $row['google_api'];
        $this->site_key = $row['site_key'];
        $this->color = $row['color'];
	}

    public function getGoogleAPIKey() {
        return $this->google_api;
    }

    public function getSiteKey() {
        return $this->site_key;
    }

    public function update() {
        $this->obj = new sQuery();
        $this->obj->executeQuery("UPDATE configuracion SET id = '$this->id', logo = '$this->logo', banner = '$this->banner', telefono = '$this->telefono', email = '$this->email', direccion = '$this->direccion', atencion = '$this->atencion', whatsapp = '$this->whatsapp', facebook = '$this->facebook', instagram = '$this->instagram', twitter = '$this->twitter', google_api = '$this->google_api', site_key = '$this->site_key', color = '$this->color' WHERE (id = '1')");
    }
    
    public function closeConnection(){
        @$this->obj->Clean();
		$this->obj->Close();
	}	
}
?>