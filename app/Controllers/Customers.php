<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer;


class Customers extends Controller
{
	public function index()
	{   
                $customer = new customer();
                $data['customer']= $customer->orderBy('id_customer','ASC')->findAll();
                return view('customer/index', $data);
	}

        public function create()
        {
                return view('customer/create');
        }

        public function save()
        {
               $customer = new customer();
               $customer->save([
                'company' => $this->request->getPost('CustomerCompany'),
                'owner' => $this->request->getPost('CustomerOwner'),
                'email' => $this->request->getPost('CustomerEmail'),
                'phone' => $this->request->getPost('CustomerPhone')
               ]);
               return redirect()->to(base_url('customers')); 
                
        }

        public function edit($id)
        {
                $customer = new customer();
                $user['user'] = $customer->find($id);
                return view('customer/edit', $user);

        }

        public function update()
        {
                $customer = new customer();
                $id = $this->request->getPost('CustomerId');
               $data = [
                'company' => $this->request->getPost('CustomerCompany'),
                'owner' => $this->request->getPost('CustomerOwner'),
                'email' => $this->request->getPost('CustomerEmail'),
                'phone' => $this->request->getPost('CustomerPhone')
               ];
               $customer->update($id, $data);
               return redirect()->to(base_url('customers')); 

        }

        public function delete($id)
        {
                $customer = new customer();
                $customer->delete($id);
                return redirect()->to(base_url('customers')); 
        }

}