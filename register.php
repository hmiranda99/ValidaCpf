<style>
<?php  include 'style.css'?>
</style>

<?php
//-------------------- dados --------------------
$cpf = $_POST['cpf']; 
$result = $cpf;

//removendo ponto
$cpf = str_replace(".", "", $cpf);
//removendo traço
$cpf = str_replace("-", "", $cpf);
//guardando para comparar no final
$cpfResultado = $cpf; 

//-------------------- variáveis --------------------
$i = 10;
$j =  11;
$divisor = 11;
$soma1 = 0;
$soma2 = 0;

//-------------------- array --------------------
$pessoa = str_split($cpf); 
unset($pessoa[9]);
unset($pessoa[10]);

//-------------------- digito 1 --------------------
foreach ($pessoa as $key => $value) {
    $multi1 = $value * $i;
    $soma1 += $multi1;
    $i--;
    //echo ("[" . $key . "] = " . $value . "<br>");
    //echo ($soma1 . "<br>");
}

$resto1 = $soma1 % $divisor;
//echo($resto1);

if ($resto1 < 2) {
    $primeiroDigito = 0;
} else {
    $primeiroDigito = $divisor - $resto1;
}
//echo($primeiroDigito);

array_push($pessoa, $primeiroDigito);
//print_r($pessoa);

//-------------------- digito 2 --------------------
foreach ($pessoa as $key => $value) {
    $multi2 = $value * $j;
    $soma2 += $multi2;
    $j--;
    //echo ("[" . $key . "] = " . $value . "<br>");
    //echo ($soma2 . "<br>");
}

$resto2 = $soma2 % $divisor;
//echo($resto2);

if ($resto2 < 2) {
    $segundoDigito = 0;
} else {
    $segundoDigito = $divisor - $resto2;
}
//echo($segundoDigito);

array_push($pessoa, $segundoDigito);
//print_r($pessoa);

$resultadoCpf = implode($pessoa);
//$verificacao = $cpfResultado == $resultadoCpf ? 'CPF válido' : 'CPF inválido, tente novamente';


if($cpfResultado == $resultadoCpf){
    $verificacao ='CPF válido';
    echo (
        '<main>
            <section class="align">
                <div class="card-resultado">
                    <h2>✔️ Verificação concluída!</h2>
                    <img class="img-resultado" src="./images/avatar-aproved1.svg">
                    <h2 class="color-green">✔️ '.$verificacao .' ✔️</h2>
                    <h2>'.$result.'</h2>
                </div>
            </section>
        </main>'
    );
} else{
    $verificacao ='CPF inválido';
    echo (
        '<main>
            <section class="align">
                <div class="card-resultado">
                    <h2>✔️ Verificação concluída!</h2>
                    <img class="img-resultado" src="./images/avatar-recused.svg">
                    <h2 class="color-red">❌ '.$verificacao .' ❌</h2>
                    <p>Tente novamente...</p>
                    <h2>'.$result.'</h2>
                </div>
            </section>
        </main>'
    );
}



