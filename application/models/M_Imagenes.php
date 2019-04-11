<?php

class M_Imagenes extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
     // metodo que borra recursivamente un directorio y sus contenidos
    public static function rrmdir($dir) { 
       if (is_dir($dir)) { 
         $objects = scandir($dir); 
         foreach ($objects as $object) { 
           if ($object != "." && $object != "..") { 
             if (filetype($dir."/".$object) == "dir") M_Imagenes::rrmdir($dir."/".$object); else unlink($dir."/".$object); 
           } 
         } 
         reset($objects); 
         rmdir($dir); 
       } 
    } 

    // metodo que devuelve todas las supuestas imagenes de una carpeta
    public static function leerCarpeta($carpeta) {
        $churro = "";
        if (file_exists($carpeta)) {
            if ($gestor = opendir($carpeta)) {
                while (false !== ($arch = readdir($gestor))) {
                    if ($arch != "." && $arch != ".." && $arch != "index.php") {
                        $churro.= "<img src='".base_url()."$carpeta$arch' style='width:70px;' class='img-thumbnail'>";
                    }
                }
                closedir($gestor);
            }
        }
        return $churro;
    }

    // método que a partir del array de FILES de un form, una carpeta y un nombre base, realiza upload de uno o varios archivos
    public function upFiles($file, $carpeta, $nombre) {
        $churro = "";
        if (is_dir($carpeta))
            M_Imagenes::rrmdir($carpeta);
            
            mkdir($carpeta, 0777,true);
            if ($file['tmp_name']) {
                //separamos nombre y extension
                $trozos = explode(".", $file["name"]);
                $extension = end($trozos);
                //si la extensión es una de las permitidas
                if ($this->checkExtension($extension) === TRUE) {
                    //comprobamos si el archivo existe, y devuelve un nombre subfijado -i por ejemplo 15-3.jpg
                    //que indica que para un nombre base "15" encontro el 15-1 y el 15-2 por lo que el siguiente en subir será 15-3
                    //con la extensión que toque
                    $nuevo = $this->existe($carpeta, $nombre, $extension);

                    if (move_uploaded_file($file['tmp_name'], $nuevo)) {
                        $churro.= "Subida correctamente<br>";
                        //aqui podemos procesar info de la bd referente a este archivo
                        //yo me sigo basando en id de registro de bbdd
                    }
                } else {
                    $churro.=  "La extension no esta permitida<br>";
                }
            } else {
                $churro.= "Sin imagen<br>";
            }
        
        return $churro;
    }

    /**
     * funcion privada que devuelve true o false dependiendo de la extension
     * @access private
     * @param string 
     * @return boolean - si esta o no permitido el tipo de archivo
     */
    private function checkExtension($extension) {
        //aqui podemos añadir las extensiones que deseemos permitir
        $extensiones = array("jpg", "png", "gif", "pdf");
        if (in_array(strtolower($extension), $extensiones)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * funcion que comprueba si el archivo existe, si es asi, iteramos en un loop 
     * y conseguimos un nuevo nombre para el, finalmente lo retornamos
     * @access private
     * @param array 
     * @return array - archivo con el nuevo nombre
     */
    private function existe($carpeta, $nombre, $extension) {
        //asignamos de nuevo el nombre al archivo
        $archivo = $carpeta . $nombre . '.' . $extension;

        return $archivo;
    }
}