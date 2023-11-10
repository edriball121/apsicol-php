<?php

class Administrador extends BaseModel {
    private $adm_cedula;
    private $adm_nombre;
    private $adm_apellido;
    private $adm_password;
    private $adm_telefono;
    private $adm_email;
    private $adm_direccion;
    private $adm_fecha_nacimiento;
    private $adm_fecha_creacion;
    private $adm_rol;
    

    public function __construct($adm_ced=null, $adm_nom=null, $adm_ape=null, $adm_pas=null, $adm_tel=null, $adm_ema=null, $adm_dir=null, $adm_fecha_nac=null, $adm_fecha_cre=null,$adm_rol=null){
        $this->table = "administrador"; // tabla asociada en la base de datos
        $this->adm_cedula= $adm_ced;
        $this->adm_nombre = $adm_nom;
        $this->adm_apellido = $adm_ape;
        $this->adm_password = $adm_pas;
        $this->adm_telefono = $adm_tel;
        $this->adm_email = $adm_ema;
        $this->adm_direccion = $adm_dir;
        $this->adm_fecha_nacimiento = $adm_fecha_nac;
        $this->adm_fecha_creacion = $adm_fecha_cre;
        $this->adm_rol = $adm_rol;
        parent::__construct();
    }

    
  /**
     * Get the value of adm_cedula
     */ 
    public function getAdm_cedula()
    {
        return $this->adm_cedula;
    }

    /**
     * Set the value of adm_cedula
     *
     * @return  self
     */ 
    public function setAdm_cedula($adm_cedula)
    {
        $this->adm_cedula = $adm_cedula;

        return $this;
    }

    /**
     * Get the value of adm_nombre
     */ 
    public function getAdm_nombre()
    {
        return $this->adm_nombre;
    }

    /**
     * Set the value of adm_nombre
     *
     * @return  self
     */ 
    public function setAdm_nombre($adm_nombre)
    {
        $this->adm_nombre = $adm_nombre;

        return $this;
    }

    /**
     * Get the value of adm_apellido
     */ 
    public function getAdm_apellido()
    {
        return $this->adm_apellido;
    }

    /**
     * Set the value of adm_apellido
     *
     * @return  self
     */ 
    public function setAdm_apellido($adm_apellido)
    {
        $this->adm_apellido = $adm_apellido;

        return $this;
    }

    /**
     * Get the value of adm_password
     */ 
    public function getAdm_password()
    {
        return $this->adm_password;
    }

    /**
     * Set the value of adm_password
     *
     * @return  self
     */ 
    public function setAdm_password($adm_password)
    {
        $this->adm_password = $adm_password;

        return $this;
    }

    /**
     * Get the value of adm_telefono
     */ 
    public function getAdm_telefono()
    {
        return $this->adm_telefono;
    }

    /**
     * Set the value of adm_telefono
     *
     * @return  self
     */ 
    public function setAdm_telefono($adm_telefono)
    {
        $this->adm_telefono = $adm_telefono;

        return $this;
    }

    /**
     * Get the value of adm_email
     */ 
    public function getAdm_email()
    {
        return $this->adm_email;
    }

    /**
     * Set the value of adm_email
     *
     * @return  self
     */ 
    public function setAdm_email($adm_email)
    {
        $this->adm_email = $adm_email;

        return $this;
    }

    /**
     * Get the value of adm_direccion
     */ 
    public function getAdm_direccion()
    {
        return $this->adm_direccion;
    }

    /**
     * Set the value of adm_direccion
     *
     * @return  self
     */ 
    public function setAdm_direccion($adm_direccion)
    {
        $this->adm_direccion = $adm_direccion;

        return $this;
    }

    /**
     * Get the value of adm_fecha_nacimiento
     */ 
    public function getAdm_fecha_nacimiento()
    {
        return $this->adm_fecha_nacimiento;
    }

    /**
     * Set the value of adm_fecha_nacimiento
     *
     * @return  self
     */ 
    public function setAdm_fecha_nacimiento($adm_fecha_nacimiento)
    {
        $this->adm_fecha_nacimiento = $adm_fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of adm_fecha_creacion
     */ 
    public function getAdm_fecha_creacion()
    {
        return $this->adm_fecha_creacion;
    }

    /**
     * Set the value of adm_fecha_creacion
     *
     * @return  self
     */ 
    public function setAdm_fecha_creacion($adm_fecha_creacion)
    {
        $this->adm_fecha_creacion = $adm_fecha_creacion;

        return $this;
    }

    /**
     * Get the value of adm_rol
     */ 
    public function getAdm_rol()
    {
        return $this->adm_rol;
    }

    /**
     * Set the value of adm_rol
     *
     * @return  self
     */ 
    public function setAdm_rol($adm_rol)
    {
        $this->adm_rol = $adm_rol;

        return $this;
    }




    public function save()
    {
        // Preparar la consulta para insertar un administrador en la BD
    $sql = $this->dbConnection->prepare("INSERT INTO administrador  (adm_cedula, adm_nombre, adm_apellido, adm_password, adm_telefono, adm_email, adm_direccion, adm_fecha_nacimiento, adm_fecha_creacion, adm_rol) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)");

        $adm_cedula= $this-> getAdm_cedula();
        $adm_nombre= $this-> getAdm_nombre();
        $adm_apellido= $this-> getAdm_apellido();
        $adm_password= $this-> getAdm_password();
        $adm_telefono= $this-> getAdm_telefono();
        $adm_email= $this->getAdm_email();
        $adm_direccion= $this-> getAdm_direccion();
        $adm_fecha_nacimiento= $this-> getAdm_fecha_nacimiento();
        $adm_rol= $this-> getAdm_rol();


        $sql->bindParam(1, $adm_cedula);
        $sql->bindParam(2, $adm_nombre);
        $sql->bindParam(3, $adm_apellido);
        $contra = password_hash($adm_password, PASSWORD_BCRYPT);//, $option);
        $sql->bindParam(4, $contra);
        //$sql->bindParam(4, md5($adm_password));
        $sql->bindParam(5, $adm_telefono);
        $sql->bindParam(6, $adm_email);
        $sql->bindParam(7, $adm_direccion);
        $sql->bindParam(8, $adm_fecha_nacimiento);
        $sql->bindParam(9, $adm_rol);
        // Excecute
        $sql->execute();

    }

    public function selectedItem()
    {
         try {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM administrador where adm_cedula = ".$this->adm_cedula);
        
        // Ejecutamos
        $sql->execute();
        $resultSet = null;
        // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
        if ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            $resultSet = $row;
        }
        return $resultSet;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
        die();
    }
    }

    public function edit()
    {
        // Preparar la consulta para insertar granjero en la BD
        $sql = $this->dbConnection->prepare("UPDATE administrador SET adm_nombre=?,adm_apellido=?,adm_password=?,adm_telefono=?,adm_email=?,adm_direccion=?,adm_fecha_nacimiento=?,adm_fecha_creacion=NOW(),adm_rol=? WHERE adm_cedula=?");
       
        
        $adm_nombre= $this-> getAdm_nombre();
        $adm_apellido= $this-> getAdm_apellido();
        $adm_password= $this-> getAdm_password();
        $adm_telefono= $this-> getAdm_telefono();
        $adm_email= $this->getAdm_email();
        $adm_direccion= $this-> getAdm_direccion();
        $adm_fecha_nacimiento= $this-> getAdm_fecha_nacimiento();
        
        $adm_rol= $this-> getAdm_rol();
        $adm_cedula= $this-> getAdm_cedula();

     
        
        $sql->bindParam(1, $adm_nombre);
        $sql->bindParam(2, $adm_apellido);
        $sql->bindParam(3, $adm_password);
        $sql->bindParam(4, $adm_telefono);
        $sql->bindParam(5, $adm_email);
        $sql->bindParam(6, $adm_direccion);
        $sql->bindParam(7, $adm_fecha_nacimiento);
        
        $sql->bindParam(8, $adm_rol);
        $sql->bindParam(9, $adm_cedula);
        // Excecute
        $sql->execute(); 

    }

    public function delete()
    {
        // Preparar la consulta para insertar un granjero en la BD
        $sql = $this->dbConnection->prepare("DELETE from administrador WHERE adm_cedula=?");
        $adm_cedula = $this->getAdm_cedula();
        
        $sql->bindParam(1, $adm_cedula);
        // Excecute
        $sql->execute(); 

    }

    public function validarLogin(){
        try{
            //FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM administrador WHERE adm_cedula = ?");
            $adm_cedula = $this->getAdm_cedula();
            $sql->bindParam(1, $this->adm_cedula);
            //Ejecutamos
            $sql->execute();
            $resultSet = array();
            // Ahora vamos a indicar el fetch mod cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
               $resultSet[] = $row;
            }
            //Si en cuentra el usuario
            if (count($resultSet) > 0) {
                //$option = ['cost' =>12];
                /*$contra = password_hash($this->adm_password, PASSWORD_BCRYPT);//, $option);
                echo"contra> ".$contra."<b>";*/
                $hash = $resultSet[0]->adm_password;

                //$contra = password_hash($this->adm_password, PASSWORD_BCRYPT);//, $option);
                // echo"hola";
                if (password_verify($this->adm_password, $hash)) {

                    //if (md5($this->adm_password) === $hash) {
                        $_SESSION['documento'] = $resultSet[0]->adm_cedula;
                        $_SESSION['nombre'] = $resultSet[0]->adm_nombre;
                        $_SESSION['tipo_usuario'] = "administrador";
                        $_SESSION['email'] = $resultSet[0]->adm_email;
                        $_SESSION['timeout'] = time();
                        session_regenerate_id();
                        return true;
                    }else{
                        return false;
                    }
            }

        }catch(PDOException $ex){
            echo $ex->getMessage();
            die();
        }
    
    }
  
}
                       
  




