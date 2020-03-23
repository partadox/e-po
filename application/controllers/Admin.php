<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/jakarta');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        $this->load->library('javascript');
        $this->load->helper('download');
        $this->load->model('po_model');
        $this->session->sess_expiration = '14400';
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['allpo'] = $this->po_model->getallpo();
        $this->load->view('admin', $data);
        $this->load->view('modal/modal-crud', $data);
        $this->load->view('modal/modal-dok1', $data);
        $this->load->view('modal/modal-dok2', $data);
        $this->load->view('modal/modal-gambar', $data);
        $this->load->view('modal/modal-build_material', $data);
        $this->load->view('modal/modal-packing', $data);
    }

    public function add_po()
    {
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('no_po', 'No_Po', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama_Barang', 'required');


        if ($this->form_validation->run()) {
            $upload = $this->input->post('upload');
            $date = $this->input->post('date');
            $no_po = $this->input->post('no_po');
            $nama_barang = $this->input->post('nama_barang');
            $catatan = $this->input->post('catatan');

            $po_baru = ([
            'upload'=>$upload,
            'tgl_upload'=>$date,
            'status'=>'Proses',
            'no_po'=>$no_po,
            'nama_barang'=>$nama_barang,
            'catatan'=>$catatan
          ]);
            $data = array_merge($po_baru);
            if ($this->po_model->Tambah_Po($data) == false) {
                $this->session->set_flashdata('berhasil_tambah', 'Data PO Baru Berhasil Ditambah!');
                $this->index();
                return redirect('Admin');
            } else {
                $this->index();
                return redirect('Admin');
            }
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function upload_doc1()
    {
        //Bagian upload File
        $dok1 = $_FILES['dok1']['name'];

        if ($dok1) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['upload_path'] = './POFILE/';
            $config['max_size']    = 150000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok1')) {
                $new_dok1 = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $id = $this->input->post('id');
            $data = array('doc1'=>$new_dok1);

            $this->po_model->upload($data, $id);
            $this->session->set_flashdata('berhasil_tambah', 'Dokumen 1 PO Berhasil diupload!');
            $this->index();
            return redirect('Admin');
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function download_doc1()
    {
        $id = $this->input->post('id');
        $fileInfo = $this->po_model->download_doc1($id);
        $file = 'POFILE/'.$fileInfo['doc1'];
        force_download($file, null);
        $this->session->set_flashdata('berhasil_tambah', 'Dokumen 1 PO Berhasil didownload!');
        $this->index();
        return redirect('Admin');
    }

    public function upload_doc2()
    {
        //Bagian upload File
        $dok2 = $_FILES['dok2']['name'];

        if ($dok2) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['upload_path'] = './POFILE/';
            $config['max_size']    = 150000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok2')) {
                $new_dok2 = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $id = $this->input->post('id');
            $data = array('doc2'=>$new_dok2);

            $this->po_model->upload($data, $id);
            $this->session->set_flashdata('berhasil_tambah', 'Dokumen 2 PO Berhasil diupload!');
            $this->index();
            return redirect('Admin');
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function download_doc2()
    {
        $id = $this->input->post('id');
        $fileInfo = $this->po_model->download_doc2($id);
        $file = 'POFILE/'.$fileInfo['doc2'];
        force_download($file, null);
        $this->session->set_flashdata('berhasil_tambah', 'Dokumen 2 PO Berhasil didownload!');
        $this->index();
        return redirect('Admin');
    }

    public function upload_gambar()
    {
        //Bagian upload File
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['upload_path'] = './POFILE/';
            $config['max_size']    = 150000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_gambar = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $id = $this->input->post('id');
            $data = array('gambar'=>$new_gambar);

            $this->po_model->upload($data, $id);
            $this->session->set_flashdata('berhasil_tambah', 'Gambar Berhasil diupload!');
            $this->index();
            return redirect('Admin');
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function download_gambar()
    {
        $id = $this->input->post('id');
        $fileInfo = $this->po_model->download_gambar($id);
        $file = 'POFILE/'.$fileInfo['gambar'];
        force_download($file, null);
        $this->session->set_flashdata('berhasil_tambah', 'Gambar PO Berhasil didownload!');
        $this->index();
        return redirect('Admin');
    }

    public function upload_build_material()
    {
        //Bagian upload File
        $build_material = $_FILES['build_material']['name'];

        if ($build_material) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['upload_path'] = './POFILE/';
            $config['max_size']    = 150000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('build_material')) {
                $new_build_material = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $id = $this->input->post('id');
            $data = array('build_material'=>$new_build_material);

            $this->po_model->upload($data, $id);
            $this->session->set_flashdata('berhasil_tambah', 'Build Material Berhasil diupload!');
            $this->index();
            return redirect('Admin');
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function download_build_material()
    {
        $id = $this->input->post('id');
        $fileInfo = $this->po_model->download_build_material($id);
        $file = 'POFILE/'.$fileInfo['build_material'];
        force_download($file, null);
        $this->session->set_flashdata('berhasil_tambah', 'Build Material PO Berhasil didownload!');
        $this->index();
        return redirect('Admin');
    }

    public function upload_packing()
    {
        //Bagian upload File
        $packing = $_FILES['packing']['name'];

        if ($packing) {
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['upload_path'] = './POFILE/';
            $config['max_size']    = 150000;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('packing')) {
                $new_packing = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $id = $this->input->post('id');
            $data = array('packing'=>$new_packing);

            $this->po_model->upload($data, $id);
            $this->session->set_flashdata('berhasil_tambah', 'Packing Berhasil diupload!');
            $this->index();
            return redirect('Admin');
        } else {
            $this->index();
            return redirect('Admin');
        }
    }

    public function download_packing()
    {
        $id = $this->input->post('id');
        $fileInfo = $this->po_model->download_packing($id);
        $file = 'POFILE/'.$fileInfo['packing'];
        force_download($file, null);
        $this->session->set_flashdata('berhasil_tambah', 'Packing PO Berhasil didownload!');
        $this->index();
        return redirect('Admin');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data = array(
        'tgl_upload'=> $this->input->post('date'),
        'no_po'=>  $this->input->post('no_po'),
        'nama_barang'=>  $this->input->post('nama_barang'),
        'catatan'=>   $this->input->post('catatan')
        );

        $this->po_model->edit($data, $id);
        $this->session->set_flashdata('berhasil_tambah', 'Data Berhasil di Ubah!');
        $this->index();
        return redirect('Admin');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->po_model->hapus($id);
        $this->session->set_flashdata('berhasil_tambah', 'Data Berhasil di Hapus!');
        $this->index();
        return redirect('Admin');
    }
}
