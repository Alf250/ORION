<?php

include_once 'Config/Conexion.php';

class All extends DB{

    function Show(){
        $query = $this->connect()->query('SELECT * FROM semaforos_all');
        return $query;
    }

    function Select($id){
        $query = $this->connect()->prepare('SELECT * FROM semaforos_all WHERE id= :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function Insert($item){
        $query = $this->connect()->prepare('INSERT INTO semaforos (nombre, tiempo_inicio, status, fecha_creacion, id_horario, id_rango, id_tverde, id_tamarillo, id_trojo) VALUES (:nombre, :tiempo_inicio, :status, :fecha_creacion, :id_horario, :id_rango, :id_tverde, :id_tamarillo, :id_trojo)');
        $query->execute(['nombre' => $item[0]['nombre'], 'tiempo_inicio' => $item[0]['tiempo_inicio'], 'status' => $item[0]['status'],'fecha_creacion' => $item[0]['fecha_creacion'], 'id_horario' => $item[0]['id_horario'], 'id_rango' => $item[0]['id_rango'], 'id_tverde' => $item[0]['id_tverde'], 'id_tamarillo' => $item[0]['id_tamarillo'], 'id_trojo' => $item[0]['id_trojo']]);
        return $query;
    }

    function Update($item,$id){
        $query = $this->connect()->prepare('UPDATE semaforos SET tiempo= :tiempo WHERE id= :id');
        $query->execute(['id' => $id, 'nombre' => $item[0]['nombre'], 'tiempo_inicio' => $item[0]['tiempo_inicio'], 'status' => $item[0]['status'],'fecha_creacion' => $item[0]['fecha_creacion'], 'id_horario' => $item[0]['id_horario'], 'id_rango' => $item[0]['id_rango'], 'id_tverde' => $item[0]['id_tverde'], 'id_tamarillo' => $item[0]['id_tamarillo'], 'id_trojo' => $item[0]['id_trojo']]);
        return $query;
    }

    function Delete($id){
        $query = $this->connect()->prepare('DELETE FROM semaforos WHERE id= :id');
        $query->execute(['id' => $id]);
        return $query;
    }
}

?>