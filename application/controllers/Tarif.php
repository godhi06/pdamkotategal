<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {
	
	private $_table = "tarif";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->model('M_tarif');
			$this->load->helper(array('form', 'url'));
	}
	
	public function tambah()
    {	
        $data = array(
                'Kelompok_Pelanggan' => $this->input->post('klmpk'),
                'Tarif_I' => $this->input->post('trf1'),
                'Tarif_II' => $this->input->post('trf2'),
            );
        $insert = $this->M_tarif->insert($data,'tarif');
        redirect('admin/tarif');
    }
	
	function hapus($id_info)
	{
	$where = array('Id_Tarif' => $id_info);
		$this->M_tarif->hapus($where,'tarif');
		redirect('admin/tarif');
	}
	
	function edit($id_info)
	{
		$where = array('Id_Tarif' => $id_info);
		$data['tarif'] = $this->M_tarif->edit_data($where,'tarif')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editTarif',$data);
		$this->load->view('templates/admin/footer_admin');
	}
	
	function update()
	{
		$data = array(
                'Id_Tarif' => $this->input->post('id_info'),
                'Kelompok_Pelanggan' => $this->input->post('klmpk'),
                'Tarif_I' => $this->input->post('trf1'),
                'Tarif_II' => $this->input->post('trf2'),
            );
 
	$where = array(
		'Id_Tarif' => $this->input->post('id_info'),
	);
 
	$this->M_tarif->update_data($where,$data,'tarif');
	redirect('admin/tarif');
	}
	
	public function hitung()
	{
		$admin = 8000; $trf2 = 2700; $trf3 = 2700; $trf4 = 5400; $trf5 = 7500; $trf6 = 8100; $trf7 = 8250; $trf8 = 12750; 
		$trf9 = 15000; $trf10 = 18000; $trf11 = 16500; $trf12 = 25500; $trf13 = 45750; $trf14 = 46500; $trf15 = 69000;
		$post = $this->input->post();
		$awal = $post["awal"];
		$akhir = $post["akhir"];
		$trf = $post["trf"];
		$data['awal'] = $awal; $data['akhir'] = $akhir;$data['trf'] = $trf;
		$slsh = $akhir - $awal;
		if($slsh > 10 && $trf == 2400){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf2;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 2700){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf3;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 3000){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf4;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh;  
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 3750){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf5;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh;  
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 4500){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf6;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 5250){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf7;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 7500){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf8;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 9000){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf9;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 10500){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf10;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 11250){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $tr11;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin; 
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 18000){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf12;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 39000){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf13;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 46500){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf14;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else if($slsh > 10 && $trf == 69000){
			$hsl = $slsh - 10;
			$hsl2 = $hsl * $trf15;
			$hsl3 = 10 * $trf;
			$hsl4 = $hsl2 + $hsl3;
			$tghn = $hsl4 + $admin;
			echo $tghn;
		}else if($akhir < $awal){
			$slsh = $akhir - $awal;
			$data['tghn'] = 'Stand akhir harus lebih dari stand awal'; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}else{
			$tghn = $slsh*$trf + $admin;
			$data['tghn'] = "Total Tagihan: Rp. $tghn"; $data['slsh'] = $slsh; 
			$this->load->view('templates/header');
			$this->load->view('templates/header2');
			$this->load->view('v_hasilSimulasi',$data);
			$this->load->view('templates/footer');
		}
	}
}