<?php
class Hitung extends CI_Controller {

function __construct()
 {
 parent::__construct();
 $this->load->helper(array('url','form'));
 }
        public function index()
        {
       		$this->load->view('Menu_hitung');     
        }
function Perkalian()
 {
 $data['v1']=(int)$this->input->post('v1',true);
 $data['v2']=(int)$this->input->post('v2',true);
 $data['hasil']=$data['v1']*$data['v2'];
$this->load->view('Perkalian',$data);
}

function Pembagian()
 {
 $data['v1']=(int)$this->input->post('v1',true);
 $data['v2']=(int)$this->input->post('v2',true);
 if ($data['v2']>0)
 $data['hasil']=$data['v1']/$data['v2'];
 else
 $data['hasil']='Error, v2 tidak boleh 0!';
 $this->load->view('Pembagian',$data);
 }


}