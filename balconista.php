<?php  

    // // funcionario e suas caracteristicas

    require_once "funcionario.php";

    class Balconista extends Funcionario{
        public $salario;

        public function salario($salario){

            $salario = 1500;
        }

        // imprime informações dos funcionarios 
        
        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario} , Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }

    }
