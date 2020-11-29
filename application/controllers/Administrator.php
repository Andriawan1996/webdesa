<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
            'isi' => 'user/contents/dashboard',
            'title' => 'Sistem Informasi Kependudukan',
            'data_penduduk' => $this->Crud->ga('penduduk')
        );


        $this->load->view('user/_layouts/wrapper', $data);

	}

	public function addPenduduk()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'no_kk'			=> $input['no_kk'],
			'nik'			=> $input['nik'],
			'nama'			=> $input['nama'],
			'shdk'			=> $input['shdk'],
			'jk'			=> $input['jk'],
			'tmpt_lhr'		=> $input['tmpt_lhr'],
			'tgl_lhr'		=> $input['tgl_lhr'],
			'gd'			=> $input['gd'],
			'agama'			=> $input['agama'],
			'status'		=> $input['status'],
			'shdrt'			=> $input['shdrt'],
			'pddk_akhir'	=> $input['pddk_akhir'],
			'pekerjaan'		=> $input['pekerjaan'],
			'nama_ibu'		=> $input['nama_ibu'],
			'nama_ayah'		=> $input['nama_ayah'],
			'nama_kep_kel'	=> $input['nama_kep_kel'],
			'alamat'		=> $input['alamat'],
			'nama_prov'		=> $input['nama_prov'],
			'kab_kota'		=> $input['kab_kota'],
			'nama_kab'		=> $input['nama_kab'],
			'nama_kec'		=> $input['nama_kec'],
			'no_kel'		=> $input['no_kel'],
			'nama_kel'		=> $input['nama_kel'],
			'rt'			=> $input['rt'],
			'rw'			=> $input['rw'],
			'ket'			=> $input['ket']
		);
		$this->db->insert('penduduk', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator');
	}

	public function updatePenduduk($id)
    {
        $where         = array('nik' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'no_kk'			=> $input['no_kk'],
			'nik'			=> $input['nik'],
			'nama'			=> $input['nama'],
			'shdk'			=> $input['shdk'],
			'jk'			=> $input['jk'],
			'tmpt_lhr'		=> $input['tmpt_lhr'],
			'tgl_lhr'		=> $input['tgl_lhr'],
			'gd'			=> $input['gd'],
			'agama'			=> $input['agama'],
			'status'		=> $input['status'],
			'shdrt'			=> $input['shdrt'],
			'pddk_akhir'	=> $input['pddk_akhir'],
			'pekerjaan'		=> $input['pekerjaan'],
			'nama_ibu'		=> $input['nama_ibu'],
			'nama_ayah'		=> $input['nama_ayah'],
			'nama_kep_kel'	=> $input['nama_kep_kel'],
			'alamat'		=> $input['alamat'],
			'nama_prov'		=> $input['nama_prov'],
			'kab_kota'		=> $input['kab_kota'],
			'nama_kab'		=> $input['nama_kab'],
			'nama_kec'		=> $input['nama_kec'],
			'no_kel'		=> $input['no_kel'],
			'nama_kel'		=> $input['nama_kel'],
			'rt'			=> $input['rt'],
			'rw'			=> $input['rw'],
			'ket'			=> $input['ket']
        );
        $this->Crud->u('penduduk', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator');
    }

    public function deletePenduduk($id)
    {
        $where = array('nik' => $id,);

        $this->Crud->d('penduduk', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator');
	}
	
	public function kartuKeluarga()
	{
		$data = array(
            'isi' => 'user/contents/kartuKeluarga',
			'title' => 'Sistem Informasi Kependudukan',
			'kepkel' => $this->Crud->gw('penduduk', array('shdrt' => 1))
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function anggotaKeluarga($no_kk)
	{
		$data = array(
            'isi' => 'user/contents/anggotaKeluarga',
			'title' => 'Sistem Informasi Kependudukan',
			'data_no_kk' => $this->Crud->gw('penduduk', array('no_kk' => $no_kk))
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function masterSHDK()
	{
		$data = array(
            'isi' => 'user/contents/masterSHDK',
            'title' => 'Sistem Informasi Kependudukan',
            'data_shdk' => $this->Crud->ga('master_shdk')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addMasterSHDK()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'nama_shdk'			=> $input['nama_shdk'],
			'id_shdrt'			=> $input['id_shdrt']
		);
		$this->db->insert('master_shdk', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/masterSHDK');
	}

	public function updateMasterSHDK($id)
    {
        $where         = array('id_shdrt' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'id_shdrt'			=> trim($input['id_shdrt']),
			'nama_shdk'			=> $input['nama_shdk']
        );
        $this->Crud->u('master_shdk', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/masterSHDK');
    }

    public function deleteMasterSHDK($id)
    {
        $where = array('id_shdrt' => $id,);

        $this->Crud->d('master_shdk', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/masterSHDK');
	}

	public function masterPekerjaan()
	{
		$data = array(
            'isi' => 'user/contents/masterPekerjaan',
            'title' => 'Sistem Informasi Kependudukan',
            'data_pekerjaan' => $this->Crud->ga('master_pekerjaan')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addmasterPekerjaan()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'nama_pekerjaan'	=> $input['nama_pekerjaan'],
			
		);
		$this->db->insert('master_pekerjaan', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/masterPekerjaan');
	}

	public function updatemasterPekerjaan($id)
    {
        $where         = array('nama_pekerjaan' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'nama_pekerjaan'			=> trim($input['nama_pekerjaan']),
			
        );
        $this->Crud->u('master_pekerjaan', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/masterPekerjaan');
    }

    public function deletemasterPekerjaan($id)
    {
        $where = array('nama_pekerjaan' => $id,);

        $this->Crud->d('master_pekerjaan', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/masterPekerjaan');
	}

	public function pegawai()
	{
		$data = array(
            'isi' => 'user/contents/pegawai',
            'title' => 'Sistem Informasi Kependudukan',
            'data_pegawai' => $this->Crud->ga('pegawai')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addPegawai()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'nama_pegawai'			=> $input['nama_pegawai'],
			'nip'					=> $input['nip'],
			'tempat_lahir'			=> $input['tempat_lahir'],
			'tanggal_lahir'			=> $input['tanggal_lahir'],
			'pangkat'				=> $input['pangkat'],
			'tmt_pangkat'			=> $input['tmt_pangkat'],
			'jabatan'				=> $input['jabatan'],
			'tmt_jabatan'			=> $input['tmt_jabatan'],
			'pendidikan_terakhir'	=> $input['pendidikan_terakhir'],
			'tahun_lulus'			=> $input['tahun_lulus'],
			'tingkat_ijazah'		=> $input['tingkat_ijazah'],
			
		);
		$this->db->insert('pegawai', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/pegawai');
	}

	public function updatePegawai($id)
    {
        $where         = array('nip' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'nama_pegawai'			=> trim($input['nama_pegawai']),
			'nip'					=> $input['nip'],
			'tempat_lahir'			=> $input['tempat_lahir'],
			'tanggal_lahir'			=> $input['tanggal_lahir'],
			'pangkat'				=> $input['pangkat'],
			'tmt_pangkat'			=> $input['tmt_pangkat'],
			'jabatan'				=> $input['jabatan'],
			'tmt_jabatan'			=> $input['tmt_jabatan'],
			'pendidikan_terakhir'	=> $input['pendidikan_terakhir'],
			'tahun_lulus'			=> $input['tahun_lulus'],
			'tingkat_ijazah'		=> $input['tingkat_ijazah'],
        );
        $this->Crud->u('pegawai', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/pegawai');
    }

    public function deletePegawai($id)
    {
        $where = array('nip' => $id,);

        $this->Crud->d('pegawai', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/pegawai');
	}

public function laporanPenduduk()
	{
		$data = array(
            'isi' => 'user/contents/laporanPenduduk',
            'title' => 'Sistem Informasi Kependudukan',
            'data_lap_penduduk' => $this->Crud->ga('laporan_penduduk')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addLaporanPenduduk()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'uraian_penduduk'			=> $input['uraian_penduduk'],
			'jumlah_penduduk'			=> $input['jumlah_penduduk']
		);
		$this->db->insert('laporan_penduduk', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/laporanPenduduk');
	}

	public function updateLaporanPenduduk($id)
    {
        $where         = array('uraian_penduduk' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'uraian_penduduk'	=> trim($input['uraian_penduduk']),
			'jumlah_penduduk'	=> $input['jumlah_penduduk']
        );
        $this->Crud->u('laporan_penduduk', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/laporanPenduduk');
    }

    public function deleteLaporanPenduduk($id)
    {
        $where = array('uraian_penduduk' => $id,);

        $this->Crud->d('laporan_penduduk', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/laporanPenduduk');
	}

	public function laporanPendidikan()
	{
		$data = array(
            'isi' => 'user/contents/laporanPendidikan',
            'title' => 'Sistem Informasi Kependudukan',
            'data_lap_pendidikan' => $this->Crud->ga('laporan_pendidikan')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addLaporanPendidikan()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'uraian_pendidikan'			=> $input['uraian_pendidikan'],
			'jumlah_pendidikan'			=> $input['jumlah_pendidikan']
		);
		$this->db->insert('laporan_pendidikan', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/laporanPendidikan');
	}

	public function updateLaporanPendidikan($id)
    {
        $where         = array('uraian_pendidikan' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'uraian_pendidikan'	=> trim($input['uraian_pendidikan']),
			'jumlah_pendidikan'	=> $input['jumlah_pendidikan']
        );
        $this->Crud->u('laporan_pendidikan', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/laporanPendidikan');
    }

    public function deleteLaporanPendidikan($id)
    {
        $where = array('uraian_pendidikan' => $id,);

        $this->Crud->d('laporan_pendidikan', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/laporanPendidikan');
	}

	public function laporanPekerjaan()
	{
		$data = array(
            'isi' => 'user/contents/laporanPekerjaan',
            'title' => 'Sistem Informasi Kependudukan',
            'data_lap_pekerjaan' => $this->Crud->ga('laporan_pekerjaan')
        );

        $this->load->view('user/_layouts/wrapper', $data);
	}

	public function addLaporanPekerjaan()
	{
		$input			= $this->input->post(NULL, TRUE);

		$data	= array(
			'uraian_pekerjaan'			=> $input['uraian_pekerjaan'],
			'jumlah_pekerjaan'			=> $input['jumlah_pekerjaan']
		);
		$this->db->insert('laporan_pekerjaan', $data);
		$this->session->set_flashdata('alert_success', 'Berhasil ditambahkan!');
		redirect('Administrator/laporanPekerjaan');
	}

	public function updateLaporanPekerjaan($id)
    {
        $where         = array('uraian_pekerjaan' => $id,);
        $input         = $this->input->post(NULL, TRUE);
        $data  = array(
            'uraian_pekerjaan'	=> trim($input['uraian_pekerjaan']),
			'jumlah_pekerjaan'	=> $input['jumlah_pekerjaan']
        );
        $this->Crud->u('laporan_pekerjaan', $data, $where);
        $this->session->set_flashdata('alert_primary', 'Berhasil disunting!');
        redirect('Administrator/laporanPekerjaan');
    }

    public function deleteLaporanPekerjaan($id)
    {
        $where = array('uraian_pekerjaan' => $id,);

        $this->Crud->d('laporan_pekerjaan', $where);
        $this->session->set_flashdata('alert_danger', 'Berhasil dihapus!');
        redirect('Administrator/laporanPekerjaan');
	}

	public function sembarangKau()
	{

        $this->load->library(array('PHPExcel', 'PHPExcel/IOFactory', 'PHPExcel/Writer/Excel2007'));

        $fileName = $_FILES['testing']['name'];

        $config['upload_path'] = './assets/doc/';
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('testing')) {
            $this->session->set_flashdata('alert_danger', 'File data pegawai gagal diimpor!');
            redirect('Administrator');
        } else {
            $media = $this->upload->data();
            $inputFileName = './assets/doc/' . $media['file_name'];

            try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }

            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            for ($row = 2; $row <= $highestRow; $row++) {
                $rowData = $sheet->rangeToArray(
                    'A' . $row . ':' . $highestColumn . $row,
                    NULL,
                    TRUE,
                    FALSE
                );

                //$tgl_lhr          = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rowData[0][6]));

                $data = array(
                    'no_kk'			=> $rowData[0][0],
					'nik'			=> $rowData[0][1],
					'nama'			=> $rowData[0][2],
					'shdk'			=> $rowData[0][3],
					'jk'			=> $rowData[0][4],
					'tmpt_lhr'		=> $rowData[0][5],
					//'tgl_lhr'		=> $tgl_lhr,
					'gd'			=> $rowData[0][7],
					'agama'			=> $rowData[0][8],
					'status'		=> $rowData[0][9],
					'shdrt'			=> $rowData[0][10],
					'pddk_akhir'	=> $rowData[0][11],
					'pekerjaan'		=> $rowData[0][12],
					'nama_ibu'		=> $rowData[0][13],
					'nama_ayah'		=> $rowData[0][14],
					'nama_kep_kel'	=> $rowData[0][15],
					'alamat'		=> $rowData[0][16],
					'nama_prov'		=> $rowData[0][17],
					'kab_kota'		=> $rowData[0][18],
					'nama_kab'		=> $rowData[0][19],
					'nama_kec'		=> $rowData[0][20],
					'no_kel'		=> $rowData[0][21],
					'nama_kel'		=> $rowData[0][22],
					'rt'			=> '-',
					'rw'			=> '-',
					'ket'			=> '-',
                );
                $this->db->insert("penduduk", $data);
            }
            $fileName_ = str_replace(" ", "_", $fileName);
            unlink('./assets/doc/' . $fileName);
            unlink('./assets/doc/' . $fileName_);
            $this->session->set_flashdata('alert_success', 'Data penduduk berhasil diimpor!');
            redirect('Administrator');
        }
    }
}