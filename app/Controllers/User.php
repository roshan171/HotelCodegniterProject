<?php

namespace App\Controllers;
use App\Models\contactModel;
use App\Models\ReserveModel;

class User extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function menus()
    {
        return view('menu');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function reservation()
    {
        return view('reservation');
    }

    public function reservationstore()
    {

        $model = new ReserveModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone'=>$this->request->getPost('phone'),
            'date'=>$this->request->getPost('date'),
            'time'=>$this->request->getPost('time'),
            'person'=>$this->request->getPost('person'),

        ]);

        return redirect()->to('/reservation');
    }


    
    public function contact()
    {
        return view('contact');
    }

    public function contactstore()
    {

        $model = new contactModel();
            $model->save([
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone'=>$this->request->getPost('phone'),
                'message'=>$this->request->getPost('message'),
                
            ]);

            return redirect()->to('/contact');
    }
    
}
