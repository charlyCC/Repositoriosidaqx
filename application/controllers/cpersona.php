<?php

class Cpersona extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->model('mpersona');
    }

    public function index() {
        $this->load->view('persona/vpersona');
    }

    public function guardar() {
        //persona
        
        //var_dump($this->input->post()); //PARA PROBAR que los datos e alamecenen en las variables y la base de datos
        

        $param['dni'] = $this->input->post('txtDNI');
        $param['nombre'] = $this->input->post('txtNombre');
        $param['appaterno'] = $this->input->post('txtApPaterno');
        $param['apmaterno'] = $this->input->post('txtApMaterno');
        $param['edad'] = $this->input->post('txtedad');
        $param['fecha'] = $this->input->post('datfecha');
        $param['dxpre'] = $this->input->post('txtdxpre');
        $param['procqx'] = $this->input->post('procqx');
        $param['hrinicio'] = $this->input->post('timeHora_Inicio');
        $param['hrtermino'] = $this->input->post('timeHora_Termino');
        $param['medanestesio'] = $this->input->post('medanestesio');
        $param['medciruja'] = $this->input->post('medciruja');
        $param['ayudante'] = $this->input->post('txtAyudante');
        $param['instrumen'] = $this->input->post('txtInstrumentista');
        $param['circula'] = $this->input->post('txtCirculante');
        $param['tecaneste'] = $this->input->post('tecaneste');
        $param['difiere'] = $this->input->post('difiere');
        $param['fecdiferi'] = $this->input->post('datfecdiferi');
        $param['motivo'] = $this->input->post('txtmotivo');

        $this->mpersona->guardar($param);
        return;

       
    }

    public function reporteProcedimentos(){

        $param  = $this->input->post();
        $result = $this->mpersona->reporteProcedimentos($param);

        $pageData = array(
            "depedences" => array(
                "css"  => array(
                    array(
                        "fileName" => "bootstrap.min",
                        "path"     => "bootstrap/css/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "font-awesome.min",
                        "path"     => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/",
                        "local"    => FALSE
                    ),
                    array(
                        "fileName" => "ionicons.min",
                        "path"     => "https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/",
                        "local"    => FALSE
                    ),
                    array(
                        "fileName" => "AdminLTE.min",
                        "path"     => "dist/css/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "blue.css",
                        "path"     => "plugins/iCheck/flat",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "_all-skins.min",
                        "path"     => "dist/css/skins/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "morris.css",
                        "path"     => "plugins/morris/",
                        "local"    => TRUE
                    ),
                      array(
                        "fileName" => "datepicker3.css",
                        "path"     => "plugins/datepicker",
                        "local"    => TRUE
                    ),
                        array(
                        "fileName" => "bootstrap3-wysihtml5.min.css",
                        "path"     => "plugins/bootstrap-wysihtml5",
                        "local"    => TRUE
                    ),
                ),

                "js" => array(
                    array(
                        "fileName" => "jquery-2.2.3.min",
                        "path"     => "plugins/jQuery/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "jquery-ui.min",
                        "path"     => "https://code.jquery.com/ui/1.11.4",
                        "local"    => FALSE
                    ),
                    array(
                        "fileName" => "bootstrap.min",
                        "path"     => "bootstrap/js/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "raphael-min",
                        "path"     => "https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/",
                        "local"    => FALSE
                    ),//app.min
                      array(
                        "fileName" => "morris.min.js",
                        "path"     => "plugins/morris/",
                        "local"    => TRUE
                    ),
                        array(
                        "fileName" => "jquery.sparkline.min.js",
                        "path"     => "plugins/sparkline",
                        "local"    => TRUE
                    ),
                          array(
                        "fileName" => "jquery.knob.js",
                        "path"     => "plugins/knob",
                        "local"    => TRUE
                    ),
                          array(
                        "fileName" => "moment.min.js",
                        "path"     => "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2",
                        "local"    => FALSE
                    ),
                          array(
                        "fileName" => "bootstrap-datepicker.js",
                        "path"     => "plugins/datepicker",
                        "local"    => TRUE
                    ),
                          array(
                        "fileName" => "bootstrap3-wysihtml5.all.min.js",
                        "path"     => "plugins/bootstrap-wysihtml5",
                        "local"    => TRUE
                    ),

                    array(
                        "fileName" => "jquery.slimscroll.min.js",
                        "path"     => "plugins/slimScroll",
                        "local"    => TRUE
                    ),
                     array(
                        "fileName" => "fastclick.js",
                        "path"     => "plugins/fastclick",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "app.min",
                        "path"     => "dist/js/",
                        "local"    => TRUE
                    ),
                    array(
                        "fileName" => "demo",
                        "path"     => "dist/js/",
                        "local"    => TRUE
                    )
                ),
            )
        );

        $this->load->view('persona/vreporteProcedimentos', $pageData);

    }

}
