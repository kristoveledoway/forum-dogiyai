<?php

namespace App\Controllers;

use App\Models\SuratMasuk_model;
use App\Models\SuratKeluar_model;
use App\Models\Kas_model;

class User extends BaseController
{
	protected $SuratMasuk_model;
	protected $SuratKeluar_model;
	protected $Kas_model;
	public function __construct()
	{
		$this->SuratMasuk_model = new SuratMasuk_model();
		$this->SuratKeluar_model = new SuratKeluar_model();
		$this->Kas_model = new Kas_model();
		helper('tanggal');
	}

	public function index()
	{
		$data['title'] = "Beranda";
		$data['surat_masuk'] = $this->SuratMasuk_model->getSuratMasuk(false, 3, 3);
		$data['surat_keluar'] = $this->SuratKeluar_model->getSuratKeluar(false, 3, 3);
		$data['kas'] = $this->Kas_model->getInformasiKas(false, 3, 3);
		return view('user/index', $data);
	}

	public function surat_masuk()
	{
		$data['title'] = "Surat Masuk";
		$data['surat_masuk'] = $this->SuratMasuk_model->getSuratMasuk();
		return view('user/surat_masuk', $data);
	}

	public function detail($id)
	{
		$data['title'] = "Surat Masuk";
		// $data['surat_masuk'] = $this->SuratMasuk_model->getSuratMasuk($id);
		return view('user/surat_masuk_single', $data);
	}

	public function surat_keluar()
	{
		$data['title'] = "Surat Keluar";
		return view('user/surat_keluar', $data);
	}

	public function informasi_kas()
	{
		$data['title'] = "Informas Kas";
		return view('user/informasi_kas', $data);
	}

	public function logout()
	{
		return view('user/login');
	}


	//--------------------------------------------------------------------

}
