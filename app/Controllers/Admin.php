<?php

namespace App\Controllers;
use App\Models\employeeModel;
use App\Models\Food_model;
use App\Models\ContactModel;
use App\Models\Reservation_model;
use App\Models\ReserveModel;

class Admin extends BaseController
{
    public function __construct(){
        helper(['form','url']);
    }
    public function index()
    {
        // Check if the user is authenticated
        if (!session()->has('user_id')) {
            return redirect()->to('Admin/login');
        }

        // Display the dashboard view
        return view('Admin/dashboard');
    }
    
    public function logout()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to the login page or any other page after logout
        return redirect()->to('Admin/login');
    }

    public function register()
    {
        return view('Admin/register');
    }

    public function dashboard()
    { 
        echo view('Admin/Layouts/header');
        $employeemodel= new employeeModel();
        $data['totalEmployees']=$employeemodel->countAll(); 

        $employeemodel= new Food_model();
        $data['totalcounts'] = $employeemodel->where('available', 'yes')->countAllResults();

        $reservationmodel= new Reservation_model();
      $data['totalReservations'] = $reservationmodel->where('available', 'yes')->countAllResults();

      $contactmodel= new ContactModel();
      $data['totalContacts']=$contactmodel->countAll(); 

        return view('Admin/dashboard',$data);
        echo  view('Admin/Layouts/footer');
    }
    
    public function employee()
    { 
         echo view('Admin/Layouts/header');
        $employeemodel= new employeeModel();
        $data['employee']=$employeemodel->findAll();
        return view('admin/employee',$data);
        echo  view('Admin/Layouts/footer');

      
    }

    public function create()
    {  echo view('Admin/Layouts/header');
        return view('employee/create');
        echo  view('Admin/Layouts/footer');
    }

    public function store()
    {
        echo view('Admin/Layouts/header');
        $validationRules = [
            'name' => 'required|max_length[50]|alpha',
            'email' => 'required|max_length[254]|valid_email|is_unique[employees.email,id]',
            'phone' => 'required|max_length[10]|is_unique[employees.phone,id]',
            'address'=> 'required|max_length[254]|',
            'joining_date'=>'required'
        ];

        if ($this->validate($validationRules)) {
            $model = new employeeModel();
            $model->save([
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone'=>$this->request->getPost('phone'),
                'address'=>$this->request->getPost('address'),
                'joining_date'=>$this->request->getPost('joining_date'),
            ]);

            return redirect()->to('/employee');
        } else {
            return view('employee/create', ['validation' => $this->validator]);
        }
        echo  view('Admin/Layouts/footer');
    }

    public function edit($id)
    {
        echo view('Admin/Layouts/header');
        $model = new employeeModel();
        $data['model'] = $model->find($id);
        return view('employee/edit', $data);
        echo  view('Admin/Layouts/footer');
    }

    public function update($id)
    {
        
        $model= new employeeModel();
        $prod_item = $model->find($id);
      
        $data = [
            'name'  => $this->request->getpost('name'),
            'email' => $this->request->getpost('email'),
            'phone'  => $this->request->getpost('phone'),
            'address'=>$this->request->getPost('address'),
            'joining_date'=>$this->request->getPost('joining_date'),
        
        
        ];

        $model->update($id,$data);
        return redirect('employee')->with('status_icon','success')->with('status','Records Updated Successfully');
    
        }
     


    public function delete($id = null)
    {
        $model = new employeeModel();
        $model->delete($id);

        return redirect()->to('/employee');
    }



    public function reservation()
    { 
        echo view('Admin/Layouts/header');
        $reservemodel= new ReserveModel();
        $data['reserve']=$reservemodel->findAll();
        return view('Admin/reservation',$data);
        echo  view('Admin/Layouts/footer');
    }

    
    public function reservationedit($id)
    {
        echo view('Admin/Layouts/header');
        $Reservemodel = new ReserveModel();
        $data['reserve'] = $Reservemodel->find($id);
        return view('reserve/edit', $data);
        echo  view('Admin/Layouts/footer');
    }

    public function reservationupdate($id)
    {
        
        $Reservemodel= new ReserveModel();
        $prod_item = $Reservemodel->find($id);
      
        $data = [
            'name'  => $this->request->getpost('name'),
            'email' => $this->request->getpost('email'),
            'phone'  => $this->request->getpost('phone'),
            'date'=>$this->request->getPost('date'),
            'time'=>$this->request->getPost('time'),
            'person'=>$this->request->getpost('person')
        
        
        ];

        $Reservemodel->update($id,$data);
        return redirect('admin-reservation')->with('status_icon','success')->with('status','Records Updated Successfully');
    
        }
     


    public function reservationdelete($id = null)
    {
        $Reservemodel = new ReserveModel();
        $Reservemodel->delete($id);

        return redirect()->to('admin-reservation');
    }



    public function contact()
    { 
        echo view('Admin/Layouts/header');
        $contactmodel= new ContactModel();
        $data['contact']=$contactmodel->findAll();
        return view('admin/contact',$data);
        echo  view('Admin/Layouts/footer');
    }

      public function contactedit($id)
    {
        echo view('Admin/Layouts/header');
        $contactmodel = new ContactModel();
        $data['contact'] = $contactmodel->find($id);
        return view('contact/edit', $data);
        echo  view('Admin/Layouts/footer');
    }

    public function contactupdate($id)
    {
        
        $contactmodel= new ContactModel();
        $prod_item = $contactmodel->find($id);
      
        $data = [
            'name'  => $this->request->getpost('name'),
            'email' => $this->request->getpost('email'),
            'phone'  => $this->request->getpost('phone'),
            'message'=>$this->request->getPost('message')
        
        
        ];

        $contactmodel->update($id,$data);
        return redirect('admin-contact')->with('status_icon','success')->with('status','Records Updated Successfully');
    
        }
     


    public function contactdelete($id = null)
    {
        $contactmodel = new ContactModel();
        $contactmodel->delete($id);

        return redirect()->to('/admin-contact');
    }

   



    
}
