<?php

class hitung extends CI_Controller{

   
    function index(){
        $input1=0;
        $input2=0;
        $hasilbil['oper']=0;
        $oper = $this->input->post('operasi');
        $input1 = $this->input->post('bil1');
        $input2 = $this->input->post('bil2');
        if($oper == "tambah"){
            $hasilbil['oper'] = $this->cek->addition($input1, $input2);
        } else if ($oper == "kurang"){
            $hasilbil['oper'] = $this->cek->substraction($input1, $input2);
        } else if ($oper == "kali"){
            $hasilbil['oper'] = $this->cek->multiplication($input1, $input2);
        } else if ($oper == "bagi"){
            $hasilbil['oper'] = $this->cek->division($input1, $input2);
        }
        $this->load->view('v_kalkulator', $hasilbil);
    }
}
?>