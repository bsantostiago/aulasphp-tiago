</main>

<?php
date_default_timezone_set("America/Sao_Paulo");
$dataHora = date("d/m/Y H:i");

// Definir o locale como 'pt_BR' (português do Brasil)
// setlocale(LC_TIME, 'pt_BR.UTF-8');

// Criar um objeto DateTime
// $data = new DateTime();

// Usar IntlDateFormatter para formatar a data por extenso
// $fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
// $data_extenso = $fmt->format($data);
?>
        <footer>
            <p>Site criado para o curso de PHP</p>
            <p><time><?=$dataHora?></time></p>
        </footer>
    </div>    

   
</body>
</html>