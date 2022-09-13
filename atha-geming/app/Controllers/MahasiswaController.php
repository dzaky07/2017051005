<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function controller(){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }
    public function create(){
        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('templates/header', $data)
            . view('mahasiswa/create', $data)
            . view('templates/footer');
    }
}
