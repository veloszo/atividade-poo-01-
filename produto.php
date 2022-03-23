<?php

    class produto {
        public $descricao;
        public $estoque;
        public $preco;
   
        public function aumentarEstoque($valor) {
            
            //check se o numero é numero ou nâo 
            if(!is_numeric($valor)){
                echo "Não é numérico. <br><br>";
                // die(); caso eu queria matar o codigo após a auteraçâo
            } else{
                $this->estoque += $valor;
            }
        }

        public function diminuirEstoque($valor) {
            // definindo-se valores 
            if ($valor > 0 && $valor < 50){
                echo "Valor muito alto. <br><br>";
            } else {
                $this->estoque -= $valor;
            }
        }
        public function reajustarPreco($percentual) {
            if ($percentual > 0 || $percentual < 20){
                echo "Percentual de reajuste anual está muito baixo. <br><br>";   
            } else {
            $valorReajuste= ($percentual*$this->preco) / 100;
            
            $this->preco += $valorReajuste;
            }
        } 
        
    }

    $produto1 = new produto;
    $produto1->descricao = "chocolate";
    $produto1->estoque = 20;
    $produto1->preco = 2;

  
    echo "O $produto1->descricao tem $produto1->estoque unidades em estoque com o preço unitário de R$ $produto1->preco.";
    echo "<br>-------------------------------------------------------------------------------------";
    
    echo "<br><br>";
    echo "<b>Alteraçôes</b><br><i>Atividade-02</i>:<br><br>";

    $produto1->aumentarEstoque("nao");
    $produto1->diminuirEstoque(5);
    $produto1->reajustarPreco(50);
    

    echo "-------------------------------------------------------------------------------------<br>";
    echo "O $produto1->descricao tem $produto1->estoque unidades em estoque com o preço unitário de R$ $produto1->preco.";
 
    
    
