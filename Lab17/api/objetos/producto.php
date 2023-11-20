<?php
classProducto{
   
    private $conn;
    private $nombre_tabla="productos";
    
    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $categoria_id;
    public $categoria_desc;
    public $creado;
    
    public function__construct($db){
        $this->conn=$db;
    }

    functionread(){
        
        $query="SELECT
                c.nombreascategoria_desc,p.id,p.nombre,p.descripcion,p.precio,p.categoria_id,p.creado
                FROM
                   ".$this->nombre_tabla." p
                   LEFT JOIN
                      categorias c 
                           ON p.categoria_id=c.id
                ORDER BY 
                   p.creadoDESC";
                   
        $stmt=$this->conn->prepare($query);
        
        $stmt->execute();
        
        return$stmt;
    }

    functioncrear(){
        
        $query="INSERT INTO
                 ".$this->nombre_tabla."
                SET
                nombre=:nombre,precio=:precio,descripcion=:descripcion,categoria_id=:categoria_id,creado=:creado";
                
                $stmt=$this->conn->prepare($query);
                
                $this->nombre=htmlspecialchars(strip_tags($this->nombre));
                $this->precio=htmlspecialchars(strip_tags($this->precio));
                $this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
                $this->categoria_id=htmlspecialchars(strip_tags($this->categoria_id));
                $this->creado=htmlspecialchars(strip_tags($this->creado));
                
                $stmt->bindParam(":nombre",$this->nombre);
                $stmt->bindParam(":precio",$this->precio);
                $stmt->bindParam(":descripcion",$this->descripcion);
                $stmt->bindParam(":categoria_id",$this->categoria_id);
                $stmt->bindParam(":creado",$this->creado);
                
                if($stmt->execute()){
                    return true;
                }
                return false;
            }

    functionreadOne(){
      
        $query="SELECT
                   c.nombre as categoria_desc,p.id,p.nombre,p.descripcion,p.precio,p.categoria_id,p.creado
                FROM
                   ".$this->nombre_tabla." p
                   LEFT JOIN
                       categorias c 
                            ON p.categoria_id= c.id
                WHERE
                   p.id=?
                LIMIT
                   0,1";
                   
            $stmt=$this->conn->prepare($query);
            
            $stmt->bindParam(1,$this->id);
             
            $stmt->execute();
            
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->nombre=$row['nombre'];
            $this->precio=$row['precio'];
            $this->descripcion=$row['descripcion'];
            $this->categoria_id=$row['categoria_id'];
            $this->categoria_desc=$row['categoria_desc'];
        }
}
?>