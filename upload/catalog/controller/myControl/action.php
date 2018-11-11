<?php
class ControllerMyControlAction extends Controller {
    public function index() {
        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
        $data["vars"] = array(
            "this is my first controller oCstore" ,
            "x" => "x",
            "y" => "y",
        );
        $this->response->setOutput($this->load->view('myControl/action', $data));
    }
}
?>