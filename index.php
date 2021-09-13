<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de CPF</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <section class="left">
            <div class="card">
                <h2>Validador de CPF</h2>
                <form method="POST" action="register.php">
                    <label>Uma maneira prática, fácil e rápida para validar CPF!</label>
                    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="bg-color">
                    <input type="submit" value="Verificar" class="button">
                </form>
            </div>
        </section>
        <div class="rigth">
            <img src="./images/rigth.svg" alt="">
        </div>
    </main>
</body>

<script type="text/javascript">
    function fMasc(objeto, mascara) {
        obj = objeto
        masc = mascara
        setTimeout("fMascEx()", 1)
    }

    function fMascEx() {
        obj.value = masc(obj.value)
    }

    function mCPF(cpf) {
        cpf = cpf.replace(/\D/g, "")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
        return cpf
    }
</script>


</html>