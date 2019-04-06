<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class ExcelController extends Controller
{
    public function  exportCustomers(){

	\Excel::create('Customers', function($excel) {		 
		    $customers = Customer::all();
		    $excel->sheet('Customers', function($sheet) use($customers) {
		    $sheet->fromArray($customers);


			$sheet->row(1, [
			    'Id','Nombre', 'Apellido', 'Direccion', 'Pais', 'Email','Compañia','Telefono'
			]);

			foreach($customers as $index => $customer) {
			    $sheet->row($index+2, [
			        $customer->id,$customer->name, $customer->last_name, $customer->address, $customer->country, $customer->email,$customer->company,$customer->phoneNumber
			    ]);	
			}	
		});
		 
		})->export('xlsx');

    }

}
