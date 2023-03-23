<?php
require_once("../_conexao/conexao.php");

if($_SERVER['REQUEST_METHOD']=='POST'){

//declaração de variáveis gerais
$tipo = $_POST('tipo');
$ponte = $_POST('ponte');
$mha = $_POST('mha');
$mva = $_POST('mva');
$dma = $_POST('dma');

//declaração de variáveis olho esquerdo
$materialoe = $_POST('materialoe');
$dnpoe = $_POST('dnpoe');
$esfoe = $_POST('esfoe');
$ciloe = $_POST('ciloe');

//declaração de variáveis olho direito
$materialod = $_POST('materialod');
$dnpod = $_POST('dnpod');
$esfod = $_POST('esfod');
$cilod = $_POST('cilod');

//calculo de diâmetro
$dmoe = $ponte + $mha - ($dnpoe * 2) + $dma;
$dmod = $ponte + $mha - ($dnpod * 2) + $dma;

//calculos para armação acetato
if($tipo == 'Acetato'){

    if($material == 'CR39 1.49'){
        
        $fc = 1.062;
        //calculo Dioptria Esférica
        $deod = $fc * $esfod;
        $deoe = $fc * $esfoe;
        //calculo Sagita Pura diametro 70
        $spod = $deod * 1.16;
        $spoe = $deoe * 1.16;

        //ifs de espessura mínima
        if($esfod >= 0.00) && ($esfod <= 1.00){

            $em = 2.2;

            }elseif($esfod >= 1.25) && ($esfod <= 2.00){

                $em = 2.0;

                }elseif($esfod >= 2.25) && ($esfod <= 3.00){

                    $em = 1.5;

                    }elseif($esfod >= 3.25) && ($esfod <= 4.00){

                        $em = 1.2;

                        }elseif($esfod >= 4.25){

                            $em = 0.5;

                            }elseif($esfod <= -0.25) && ($esfod >= -1.00){
                                
                                $em = 2.2;
                            
                                }elseif($esfod <= -1.25) && ($esfod >= -2.00){
                                    
                                    $em = 2;
                            
                                    }elseif($esfod <= -2.25) && ($esfod >= -3.00){
                                        
                                        $em = 1.8;
                            
                                        }elseif($esfod <= -3.25) && ($esfod >= -4.00){

                                            $em = 1.8;
                            
                                            }elseif($esfod <= -4.25){

                                                $em = 1.8;


        }elseif($material == 'TRIVEX 1.53'){

            $fc = 1.000;

            }elseif($material == 'POLY 1.59'){

                $fc = 0.904;

                }elseif($material == 'RES 1.60'){

                    $fc = 0.883;

                    }elseif($material == 'RES 1.67'){

                        $fc = 0.797

                        }elseif($material == 'RES 1.74'){

                            $fc = 0.716

                            }else{
                                echo("Você não selecionou o material!")
                            }

//calculos para armação metal
    }elseif($tipo == 'Metal'){

        if($material == 'CR39 1.49'){

            $fc = 1.062;

            }elseif($material == 'TRIVEX 1.53'){

                $fc = 1.000;

                }elseif($material == 'POLY 1.59'){
                    
                    $fc = 0.904;

                    }elseif($material == 'RES 1.60'){

                        $fc = 0.883;

                        }elseif($material == 'RES 1.67'){

                            $fc = 0.797

                            }elseif($material == 'RES 1.74'){

                                $fc = 0.716

                                }else{
                                echo("Você não selecionou o material!")
                                }

//calculos para armação fio de nylon
        }elseif($tipo == 'Fio de Nylon'){

            if($material == 'CR39 1.49'){

                $fc = 1.062;

                }elseif($material == 'TRIVEX 1.53'){
                    
                    $fc = 1.000;
                    
                    }elseif($material == 'POLY 1.59'){
                        
                        $fc = 0.904;
    
                        }elseif($material == 'RES 1.60'){
                            
                            $fc = 0.883;
    
                            }elseif($material == 'RES 1.67'){
                                
                                $fc = 0.797
    
                                }elseif($material == 'RES 1.74'){
                                    
                                    $fc = 0.716
    
                                    }else{
                                    echo("Você não selecionou o material!")
                                    }

//calculos para armação segurança
            }elseif($tipo == 'Segurança'){

                if($material == 'CR39 1.49'){

                    $fc = 1.062;

                    }elseif($material == 'TRIVEX 1.53'){
                        
                        $fc = 1.000;
        
                        }elseif($material == 'POLY 1.59'){
                            
                            $fc = 0.904;
        
                            }elseif($material == 'RES 1.60'){
                                
                                $fc = 0.883;
        
                                }elseif($material == 'RES 1.67'){
                                    
                                    $fc = 0.797
        
                                    }elseif($material == 'RES 1.74'){
                                        
                                        $fc = 0.716
        
                                        }else{
                                        echo("Você não selecionou o material!")
                                        }

//calculos para armação parafuso
                }elseif($tipo == 'Parafuso'){

                    if($material == 'CR39 1.49'){

                        $fc = 1.062;

                        }elseif($material == 'TRIVEX 1.53'){
                            
                            $fc = 1.000;
            
                            }elseif($material == 'POLY 1.59'){
                                
                                $fc = 0.904;
            
                                }elseif($material == 'RES 1.60'){
                                    
                                    $fc = 0.883;
            
                                    }elseif($material == 'RES 1.67'){
                                        
                                        $fc = 0.797
            
                                        }elseif($material == 'RES 1.74'){
                                            
                                            $fc = 0.716
            
                                            }else{
                                            echo("Você não selecionou o material!")
                                            }


                    }else{
                        echo("Material não escolhido!");
                    }


}catch(PDOException $erro)
{
    echo("ERRO:".$erro->getCode()."<br>");
    echo("MENSAGEM: ".$erro->getMessage());
}