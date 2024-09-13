<?php  



    // funcionario e suas caracteristicas

    require_once "funcionario.php";

    class Vendedor extends Funcionario{
        public $salario;

        public function salario($salario){

            $salario = 2000;
        }
        

        //informações do funcionario
        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario} , Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }

    }