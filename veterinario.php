<?php  

    require_once "funcionario.php";

    class Veterinario extends Funcionario{
        public $salario;

        public function salario($salario){

            $salario = 5000;
        }
        
        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario} , Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";

    }
}
