<?php

class Granjero extends BaseModel {
    private $Gra_cedula;
    private $Gra_nombre;
    private $Gra_apellido;
    private $Gra_password;
    private $Gra_telefono;
    private $Gra_email;
    private $Gra_direccion;
    private $Gra_fecha_nacimiento;
    private $Gra_fecha_creacion;
    private $Gra_perfil_laboral;
    

    public function __construct($Gra_ced=null, $Gra_nom=null, $Gra_ape=null, $Gra_pas=null, $Gra_tel=null, $Gra_ema=null, $Gra_dir=null, $Gra_fecha_nac=null, $Gra_fecha_cre=null, $Gra_per=null ){
        $this->table = "granjero"; // tabla asociada en la base de datos
        $this->Gra_cedula= $Gra_ced;
        $this->Gra_nombre = $Gra_nom;
        $this->Gra_apellido = $Gra_ape;
        $this->Gra_password = $Gra_pas;
        $this->Gra_telefono = $Gra_tel;
        $this->Gra_email = $Gra_ema;
        $this->Gra_direccion = $Gra_dir;
        $this->Gra_fecha_nacimiento = $Gra_fecha_nac;
        $this->Gra_fecha_creacion = $Gra_fecha_cre;
        $this->Gra_perfil_laboral = $Gra_per;
        parent::__construct();
    }


    /**
     * Get the value of Gra_cedula
     */ 
    public function getGra_cedula()
    {
        return $this->Gra_cedula;
    }

    /**
     * Set the value of Gra_cedula
     *
     * @return  self
     */ 
    public function setGra_cedula($Gra_cedula)
    {
        $this->Gra_cedula = $Gra_cedula;

        return $this;
    }

    /**
     * Get the value of Gra_nombre
     */ 
    public function getGra_nombre()
    {
        return $this->Gra_nombre;
    }

    /**
     * Set the value of Gra_nombre
     *
     * @return  self
     */ 
    public function setGra_nombre($Gra_nombre)
    {
        $this->Gra_nombre = $Gra_nombre;

        return $this;
    }

    /**
     * Get the value of Gra_apellido
     */ 
    public function getGra_apellido()
    {
        return $this->Gra_apellido;
    }

    /**
     * Set the value of Gra_apellido
     *
     * @return  self
     */ 
    public function setGra_apellido($Gra_apellido)
    {
        $this->Gra_apellido = $Gra_apellido;

        return $this;
    }

    /**
     * Get the value of Gra_password
     */ 
    public function getGra_password()
    {
        return $this->Gra_password;
    }

    /**
     * Set the value of Gra_password
     *
     * @return  self
     */ 
    public function setGra_password($Gra_password)
    {
        $this->Gra_password = $Gra_password;

        return $this;
    }

    /**
     * Get the value of Gra_telefono
     */ 
    public function getGra_telefono()
    {
        return $this->Gra_telefono;
    }

    /**
     * Set the value of Gra_telefono
     *
     * @return  self
     */ 
    public function setGra_telefono($Gra_telefono)
    {
        $this->Gra_telefono = $Gra_telefono;

        return $this;
    }

    /**
     * Get the value of Gra_email
     */ 
    public function getGra_email()
    {
        return $this->Gra_email;
    }

    /**
     * Set the value of Gra_email
     *
     * @return  self
     */ 
    public function setGra_email($Gra_email)
    {
        $this->Gra_email = $Gra_email;

        return $this;
    }

    /**
     * Get the value of Gra_direccion
     */ 
    public function getGra_direccion()
    {
        return $this->Gra_direccion;
    }

    /**
     * Set the value of Gra_direccion
     *
     * @return  self
     */ 
    public function setGra_direccion($Gra_direccion)
    {
        $this->Gra_direccion = $Gra_direccion;

        return $this;
    }

    /**
     * Get the value of Gra_fecha_nacimiento
     */ 
    public function getGra_fecha_nacimiento()
    {
        return $this->Gra_fecha_nacimiento;
    }

    /**
     * Set the value of Gra_fecha_nacimiento
     *
     * @return  self
     */ 
    public function setGra_fecha_nacimiento($Gra_fecha_nacimiento)
    {
        $this->Gra_fecha_nacimiento = $Gra_fecha_nacimiento;

        return $this;
    }

    /**
     * Get the value of Gra_fecha_creacion
     */ 
    public function getGra_fecha_creacion()
    {
        return $this->Gra_fecha_creacion;
    }

    /**
     * Set the value of Gra_fecha_creacion
     *
     * @return  self
     */ 
    public function setGra_fecha_creacion($Gra_fecha_creacion)
    {
        $this->Gra_fecha_creacion = $Gra_fecha_creacion;

        return $this;
    }

    /**
     * Get the value of Gra_perfil_laboral
     */ 
    public function getGra_perfil_laboral()
    {
        return $this->Gra_perfil_laboral;
    }

    /**
     * Set the value of Gra_perfil_laboral
     *
     * @return  self
     */ 
    public function setGra_perfil_laboral($Gra_perfil_laboral)
    {
        $this->Gra_perfil_laboral = $Gra_perfil_laboral;

        return $this;
    }


    public function save()
    {
        // Preparar la consulta para insertar un granjero en la BD
    $sql = $this->dbConnection->prepare("INSERT INTO granjero (gra_cedula, gra_nombre, gra_apellido, gra_password, gra_telefono, gra_email, gra_direccion, gra_fecha_nacimiento, gra_fecha_creacion, gra_perfil_laboral) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)");

        $Gra_cedula= $this-> getGra_cedula();
        $Gra_nombre= $this-> getGra_nombre();
        $Gra_apellido= $this-> getGra_apellido();
        $Gra_password= $this-> getGra_password();
        $Gra_telefono= $this-> getGra_telefono();
        $Gra_email= $this->getGra_email();
        $Gra_direccion= $this-> getGra_direccion();
        $Gra_fecha_nacimiento= $this-> getGra_fecha_nacimiento();
        
        $Gra_perfil_laboral= $this-> getGra_perfil_laboral();


        $sql->bindParam(1, $Gra_cedula);
        $sql->bindParam(2, $Gra_nombre);
        $sql->bindParam(3, $Gra_apellido);
        $contra = password_hash($Gra_password, PASSWORD_BCRYPT);
        $sql->bindParam(4, $contra);
        $sql->bindParam(5, $Gra_telefono);
        $sql->bindParam(6, $Gra_email);
        $sql->bindParam(7, $Gra_direccion);
        $sql->bindParam(8, $Gra_fecha_nacimiento);
        
        $sql->bindParam(9, $Gra_perfil_laboral);
        // Excecute
        $sql->execute();

    }

    public function selectedItem()
    {
         try {
        // FETCH_OBJ
        $sql = $this->dbConnection->prepare("SELECT * FROM granjero where gra_cedula = ".$this->Gra_cedula);
        
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
        $sql = $this->dbConnection->prepare("UPDATE granjero SET gra_nombre=?,gra_apellido=?,gra_password=?,gra_telefono=?,gra_email=?,gra_direccion=?,gra_fecha_nacimiento=?,gra_fecha_creacion=NOW(),gra_perfil_laboral=? WHERE gra_cedula=?");
       
        
        $Gra_nombre= $this-> getGra_nombre();
        $Gra_apellido= $this-> getGra_apellido();
        $Gra_password= $this-> getGra_password();
        $Gra_telefono= $this-> getGra_telefono();
        $Gra_email= $this->getGra_email();
        $Gra_direccion= $this-> getGra_direccion();
        $Gra_fecha_nacimiento= $this-> getGra_fecha_nacimiento();
        
        $Gra_perfil_laboral= $this-> getGra_perfil_laboral();
        $Gra_cedula= $this-> getGra_cedula();

     
        
        $sql->bindParam(1, $Gra_nombre);
        $sql->bindParam(2, $Gra_apellido);
        $sql->bindParam(3, $Gra_password);
        $sql->bindParam(4, $Gra_telefono);
        $sql->bindParam(5, $Gra_email);
        $sql->bindParam(6, $Gra_direccion);
        $sql->bindParam(7, $Gra_fecha_nacimiento);
        
        $sql->bindParam(8, $Gra_perfil_laboral);
        $sql->bindParam(9, $Gra_cedula);
        // Excecute
        $sql->execute(); 

    }

    public function delete()
    {
        // Preparar la consulta para insertar un granjero en la BD
            $sql = $this->dbConnection->prepare("DELETE from granjero WHERE gra_cedula=?");
        $Gra_cedula = $this->getGra_cedula();
        
        $sql->bindParam(1, $Gra_cedula);
        // Excecute
        $sql->execute(); 

    }
    public function validarLogin(){
        try{
            //FETCH_OBJ
            $sql = $this->dbConnection->prepare("SELECT * FROM granjero WHERE gra_cedula = ?");
            $Gra_cedula = $this->getGra_cedula();
            $sql->bindParam(1, $this->Gra_cedula);
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
                /*$contra = password_hash($this->Gra_password, PASSWORD_BCRYPT);//, $option);
                echo"contra> ".$contra."<b>";*/
                $hash = $resultSet[0]->gra_password;
                
                if (password_verify($this->Gra_password, $hash)) {
                    //session_start();
                    $_SESSION['documento'] = $resultSet[0]->gra_cedula;
                    $_SESSION['nombre'] = $resultSet[0]->gra_nombre;
                    $_SESSION['tipo_usuario'] = "granjero";
                    $_SESSION['email'] = $resultSet[0]->gra_email;
                    $_SESSION['timeout'] = time();
                    return true;
                }else{
                    return false;
                }
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

}
