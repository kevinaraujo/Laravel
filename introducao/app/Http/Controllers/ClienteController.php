<?php
	namespace App\Http\Controllers;
	
	class ClienteController extends Controller{
		
		public function listar(){
			$data = date('Y-m-d');
			
			if($data > '2016-09-20'){
				$msg = 'Inscrição Finalizada';
			}else{				
				$msg = 'Inscrição Em Aberto';
			}
			
			return view('listar')->with('msg',$msg);
		}
		
		public function novo(){
			//return "<h1>cadastro de cliente</h1>";
			return view('welcome');
		}
		
		
	}

?>