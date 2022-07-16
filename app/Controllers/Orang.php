<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
  protected $MahasiswaModel;
  public function __construct()
  {
    $this->OrangModel = new OrangModel();
  }


  public function index()
  {

    $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

    $keyword = $this->request->getVar('keyword');

    if ($keyword) {
      $orang = $this->OrangModel->search($keyword);
    } else {
      $orang = $this->OrangModel;
    }

    $data = [
      'title' => 'Data Orang | Programming Ibnu Sina',
      'orang' => $orang->paginate(6, 'orang'),
      'pager' => $this->OrangModel->pager,
      'currentPage' => $currentPage
    ];
    return view('orang/index', $data);
  }
}
