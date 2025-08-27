<?php
 /* 
  Data: 26/08/2025
  Nome: Ana Paula dos Reis
  */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>PHP - Par ou Ímpar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>✨PHP 101 KAWAIIIIIIIIII! ✨</h1>
        <p>Esta é uma página simples para eu começar a aprender PHP. Muito obrigada por me guiar!</p>
        
        <img src="https://images.ctfassets.net/s600jj41gsex/eihtTelYKrOnMQs1CaGQn/2b80f54539e12e93587c6878776cce28/How_to_save_TinyMCE_content_to_a_database.png?w=768&q=80&fit=scale" alt="Personagem fofo estilo Kawaii">

        <div class="php-section">
            <h2>Seção PHP - Exercícios Práticos: ✨</h2>
            <p>Vamos verificar se um número é par ou ímpar!</p>
            <p>(ノ°∀°)ノ⌒･*:.｡. .｡.:*･゜ﾟ･*☆</p>

            <form method="POST" class="input-form">
                <label for="number">Digite um número:</label>
                <input type="number" id="number" name="number" required>
                <button type="submit">Verificar</button>
            </form>

            <?php
            include 'logic.php';
            ?>
        </div>
    </div>
</body>
</html>