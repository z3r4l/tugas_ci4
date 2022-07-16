<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['no_bp', 'nm_mhs', 'kelas', 'foto'];

    public function search($keyword)
    {
        return $this->table('mahasiswa')->like('nm_mhs', $keyword);
    }
    public function getMahasiswa($id = false)
    {
        if ($id == false) {
            return $this->mahasiswaModel->getMahasiswa();
        } {
            return $this->where(['id' => $id])->first();
        }
    }
}
