<?php

class Mpersona extends CI_model {

    function __construct() {
        parent::__construct();
    }

    public function guardar($param) {
        $campos = array(
            'dni' => $param['dni'],
            'nombre' => $param['nombre'],
            'appaterno' => $param['appaterno'],
            'apmaterno' => $param['apmaterno'],
            'edad' => $param['edad'],
            'fecha' => $param['fecha'],
            'dxpre' => $param['dxpre'],
            'procqx' => $param['procqx'],
            'hrinicio' => $param['hrinicio'],
            'hrtermino' => $param['hrtermino'],
            'medanestesio' => $param['medanestesio'],
            'medciruja' => $param['medciruja'],
            'ayudante' => $param['ayudante'],
            'instrumen' => $param['instrumen'],
            'circula' => $param['circula'],
            'tecaneste' => $param['tecaneste'],
            'difiere' => $param['difiere'],
            'fecdiferi' => $param['fecdiferi'],
            'motivo' => $param['motivo']
        );
        $this->db->insert('persona', $campos);


    }

    public function reporteProcedimentos(){

        $this->db->select("count(dni), medciruja", FALSE);
        $this->db->group_by("medciruja");

        $result = $this->db->get_where("persona");

        return $result;

    }

}


