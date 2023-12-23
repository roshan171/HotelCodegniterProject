<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Reservation_model;

class Reservation extends BaseController
{
    
    public function __construct(){
        helper(['form','url']);
    }

    public function index()
    {
        echo view('Admin/Layouts/header');
        $reservationModel = new Reservation_model();
        $data['reservations'] = $reservationModel->findAll();

        return view('reservations/index', $data);
        echo view('Admin/Layouts/footer');
    }

    public function create()
    {
        echo view('Admin/Layouts/header');
        return view('reservations/create');
        echo view('Admin/Layouts/footer');
    }

    public function store()
    {
        echo view('Admin/Layouts/header');
        $reservationModel = new Reservation_model();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'status' => implode(',', $this->request->getPost('status')),
            'payment_mode' => $this->request->getPost('payment_mode'),
            'available' => $this->request->getPost('available'),
        ];

        $reservationModel->insert($data);

        return redirect()->to('/reservations');
        echo view('Admin/Layouts/footer');
    }


    public function edit($id)
    {
        echo view('Admin/Layouts/header');
        $reservationModel = new Reservation_model();
        $data['reservation'] = $reservationModel->find($id);

        return view('reservations/edit', $data);
        echo view('Admin/Layouts/footer');
    }

    public function update($id)
    {

        $reservationModel = new Reservation_model();
        $prod_item = $reservationModel->find($id);

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'status' => implode(',', $this->request->getPost('status')),
            'payment_mode' => $this->request->getPost('payment_mode'),
            'available' => $this->request->getPost('available'),
        ];

        $reservationModel->update($id, $data);

        return redirect()->to('/reservations');
    }

    public function delete($id)
    {
        echo view('Admin/Layouts/header');
        $reservationModel = new Reservation_model();
        $reservationModel->delete($id);

        return redirect()->to('/reservations');
        echo view('Admin/Layouts/footer');
    }

}
