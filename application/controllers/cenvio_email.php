<?php if (! defined ('BASEPATH')) exit('No direct script access allowed');
class Envio_email extends CI_Controller
{
	function __construct()
{
parent::__construct();
$this->load->model('menvio_email');
}
function index()
{
	$data['title'] = 'Formulario de registro';
	$data['head'] = 'Regístrate desde aquí';
	$this->load->view('venvio_email', $data);
	}
function nuevo_usuario()
{
	if (isset($_POST['grabar']) and $_POST['grabar']=='si')
{
	$this->form_validation->set_rules('nom','Nombre','required|trim|xss_clean');
	$this->form_validation->set_rules('correo','Correo','required|valid_email|trim|xss_clean');
	$this->form_validation->set_rules('nick','Usuario','required|trim|xss_clean');
	$this->form_validation->set_rules('pass','Password','required|trim|xss_clean|md5');
	$this->form_validation->set_message('required', 'el %s es requerido');
		$this->form_validation->set_message('valid_email', 'el %s no es valido');
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}
		else
		{
			$nombre = $this->input->post('nom');
			$correo = $this->input->post('correo');
			$nick = $this->input->post('nick');
			$password = $this->input->post('pass');
			 //se envian los datos al modelo con la siguiente linea
		$insert = $this->envio_email_mmodel->new_user($nombre, $correo, $nick, $password);
		$this->email->from('aqui el email quieres que envie los datos', 'google.com');
		$this->email ->to($correo);

		$this->email->subject('Bienvenido a la prueba');
		$this->email->message('<h2>' . $nombre . 'gracias por registrarte</h2> <hr><br><br>Tu nombre de usuario es:'. $nick . '<br> tu password es:' . $password);
		$this->email->send();
		}
}
}
}
