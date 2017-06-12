<?php
	namespace App\Http\Controllers;
	use Request;
	
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
			if(view()->exists('novo')){				
				return view('novo');
			}else{
				return view('welcome');
			}
		}
		
		public function listar2(){
			$nomes = array(1 => 'João',2 => 'Maria',3 => 'Pedro');
			
			return view('listar2')->with('nomes',$nomes);
		}
		
		public function editar(){
			
			if(is_numeric(Request::has('id'))){
				$id = Request::input('id');				
			}else{
				$id = 0;
			}
			
			return view('editar')->with('id',$id);
		}
		
		
	}

?>