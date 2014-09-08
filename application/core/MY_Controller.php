<?

class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function load_view($template,$data)
	{
		$this->load->view('common/header', $data);
        $this->load->view($template, $data);
		$this->load->view('common/footer', $data);
	}

}