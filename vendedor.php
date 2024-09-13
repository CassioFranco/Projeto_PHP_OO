<?php  

    require_once "funcionario.php";

    class Vendedor extends Funcionario{
        public $salario;

        public function salario($salario){

            $salario = 2000;
        }
        
        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario} , Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }

    }