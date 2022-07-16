<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }
    public function index()
    {
        // $mhs = $this->mahasiswaModel->findAll();
        // $mhs = $this->mahasiswaModel->paginate(10, 'mahasiswa');
        $currentPage = $this->request->getVar('page_mahasiswa') ? $this->request->getVar('page_mahasiswa') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $cariMhs = $this->mahasiswaModel->search($keyword);
        } else {
            $cariMhs = $this->mahasiswaModel;
        }
        $data = [
            'title'     => 'Data Mahasiswa Programing Ibnu Sina',
            'mahasiswa' => $this->mahasiswaModel->paginate(10, 'mahasiswa'),
            'pager'     => $this->mahasiswaModel->pager,
            'validation' => $validation =  \Config\Services::validation(),
            'currentPage' => $currentPage
        ];

        return view('mahasiswa/index', $data);
    }
    public function detail($id)
    {

        $data = [
            'title' => 'Halaman Detail',
            'mahasiswa' =>  $this->mahasiswaModel->getMahasiswa($id)
        ];

        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa ' . $id . ' Tidak Ditemukan');
        }
        return view('mahasiswa/detail', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Halaman Tambah Data',
            'validation' => $validation =  \Config\Services::validation()
        ];
        return view('mahasiswa/tambah', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nm_mhs' => [
                'rules' => 'required|is_unique[mahasiswa.nm_mhs]',
                'errors' => [
                    'required' => '{field} Nama Mahasiswa Harus Di ISI'
                ]
            ],
            'no_bp' => [
                'rules' => 'required|is_unique[mahasiswa.no_bp]',
                'errors' => [
                    'required' => '{field} NPM Harus DI isi',
                    'is_unique' => '{field} NPM Sudah Terdaftar'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan file gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to("/tambah")->withInput();
        }

        //ambil Gambar
        $fileFoto = $this->request->getFile('foto');
        //gambar default jika tidak upload gambar
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            //nama file random
            $namaFoto = $fileFoto->getRandomName();
            //ambil nama file foto
            $fileFoto->move('img', $namaFoto);
        }
        $this->mahasiswaModel->save([
            'nm_mhs'   => $this->request->getVar('nm_mhs'),
            'no_bp'    => $this->request->getVar('no_bp'),
            'kelas'    => $this->request->getVar('kelas'),
            'foto'     => $namaFoto,
        ]);
        session()->setFlashdata("pesan", "Data Berhasil Ditambahkan");
        return redirect()->to('/mahasiswa');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Halaman Edit Data',
            'validation' => \Config\Services::validation(),
            'mahasiswa' =>  $this->mahasiswaModel->getMahasiswa($id)
        ];
        return view('/mahasiswa/edit', $data);
    }

    public function update($id)
    {
        //Cek data lama
        $dataLama = $this->mahasiswaModel->getMahasiswa($id);
        if ($dataLama['nm_mhs'] === $this->request->getVar('nm_mhs')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[mahasiswa.nm_mhs]';
        }

        if (!$this->validate([
            'nm_mhs' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} Nama Mahasiswa Harus Di ISI'
                ]
            ],
            'no_bp' => [
                'errors' => [
                    'required' => '{field} NPM Harus DI isi',
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan file gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            $mahasiswaId = $this->mahasiswaModel->getMahasiswa($id);
            return redirect()->to("edit/" . $mahasiswaId['id'])->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar, apakah gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama file random
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan gambar
            $fileFoto->move('img', $namaFoto);
            //hapus file foto lama
            unlink('img/' . $this->request->getVar('fotoLama'));
        }
        $this->mahasiswaModel->save([
            'id' => $id,
            'nm_mhs'   => $this->request->getVar('nm_mhs'),
            'no_bp'    => $this->request->getVar('no_bp'),
            'kelas'    => $this->request->getVar('kelas'),
            'foto'     => $namaFoto,
        ]);
        session()->setFlashdata("pesan", "Data Berhasil Diubah");
        return redirect()->to('mahasiswa/');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $mahasiswa = $this->mahasiswaModel->find($id);
        //cek file gambar default
        if ($mahasiswa['foto'] != 'default.png') {
            // Hapus Gambar
            unlink('img/' . $mahasiswa['foto']);
        }

        $this->mahasiswaModel->delete($id);
        session()->setFlashdata("pesan", "Data Berhasil DiHapus");
        return redirect()->to('/mahasiswa');
    }
}
