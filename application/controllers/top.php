<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends MY_Controller {

    function index()
    {
        $data['title'] = 'Hello World!!!!';
        $this->load_view('top/index', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */