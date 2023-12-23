<?php

namespace App\Controllers;
use App\Models\Food_model;

class Food extends BaseController
{
    public function __construct(){
        helper(['form','url']);
    }


    public function index()
    {  echo view('Admin/Layouts/header');
        $foodModel = new Food_model();
        $data['foods'] = $foodModel->findAll();
        return view('food/index', $data);
        echo view('Admin/Layouts/footer');
    }

    
    public function create()
    {    echo view('Admin/Layouts/header');
        return view('food/create');
        echo view('Admin/Layouts/footer');
    }

    public function store()
    {  echo view('Admin/Layouts/header');
        $validationRules = [
            'name' => 'required|max_length[50]',
            'description'=> 'required|max_length[254]|',
            'price' => 'required',
            'available'=>'required'
        ];

        if ($this->validate($validationRules)) {
        $foodModel = new Food_model();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'available' => $this->request->getPost('available'),
        ];

        return redirect()->to('/food');
    } else {
        return view('food/create', ['validation' => $this->validator]);
    }
    echo  view('Admin/Layouts/footer');
}

    public function edit($id)
    {  echo view('Admin/Layouts/header');
        $foodModel = new Food_model();
        $data['food'] = $foodModel->find($id);

        return view('food/edit', $data);
        echo view('Admin/Layouts/footer');
    }

    public function update($id)
    {  
        $foodModel = new Food_model();
        $prod_item = $foodModel->find($id);

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'available' => $this->request->getPost('available'),
        ];

        $foodModel->update($id, $data);

        return redirect()->to('/food');

    }


    public function delete($id)
    {  echo view('Admin/Layouts/header');
        $foodModel = new Food_model();
        $foodModel->delete($id);

        return redirect()->to('/food');
        echo view('Admin/Layouts/footer');
    }

}
