<?php

    class produto {
        public $descricao;
        public $estoque;
        public $preco;
   
        public function aumentarEstoque($valor) {
            $this->estoque += $valor;
        }

        public function diminuirEstoque($valor) {
            $this->estoque -= $valor;
        }

        public function reajustarPreco($percentual) {
            $valorReajuste= ($percentual*$this->preco) / 100;
            
            $this->preco += $valorReajuste;
        } 
        
    }

    $produto1 = new produto;
    $produto1->descricao = "chocolate";
    $produto1->estoque = 20;
    $produto1->preco = 2;

  
    echo "O $produto1->descricao tem $produto1->estoque unidades em estoque com o preço unitário de R$ $produto1->preco.";
    
    echo "<br><br><br><br>";

    $produto1->aumentarEstoque(10);
    $produto1->diminuirEstoque(5);
    $produto1->reajustarPreco(50);

    echo "O $produto1->descricao tem $produto1->estoque unidades em estoque com o preço unitário de R$ $produto1->preco.";

    
    
