<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
        helper(['form']);
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
        ];

        $messages = [
            'judul' => ['required' => 'Judul wajib diisi.'],
            'penulis' => ['required' => 'Penulis wajib diisi.'],
            'penerbit' => ['required' => 'Penerbit wajib diisi.'],
            'tahun_terbit' => [
                'required' => 'Tahun terbit wajib diisi.',
                'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                'less_than' => 'Tahun terbit harus kurang dari 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return view('buku/create', ['validation' => $this->validator]);
        }

        $this->bukuModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $this->bukuModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
}
