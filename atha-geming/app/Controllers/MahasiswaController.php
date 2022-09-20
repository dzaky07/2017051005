<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
            . view('/mahasiswa/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah mahasiswa'
        ];

        return view('templates/header', $data)
            . view('/mahasiswa/create')
            . view('templates/footer');
    }
    public function store()
    {
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $mahasiswaModel->save($data);

        return redirect()->to('/mahasiswa');
    }
    public function delete($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => 'EditMahasiswa'
        ];
        return view('templates/header', $data)
            . view('/mahasiswa/edit',$mahasiswa)
            . view('templates/footer');

    }
}
