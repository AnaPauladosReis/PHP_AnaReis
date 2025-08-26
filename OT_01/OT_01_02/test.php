<?php
$nutrition = [
    'fat' => 12,
    'sugar' => 51,
    'salt' => 6.3, 
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>PHP_AnaReis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>✨PHP 101 KAWAIIIIIIIIII! ✨</h1>
        <p>Esta é uma página simples para eu começar a aprender PHP. Muito obrigada por me guiar!</p>
        
        <img src="https://images.ctfassets.net/s600jj41gsex/eihtTelYKrOnMQs1CaGQn/2b80f54539e12e93587c6878776cce28/How_to_save_TinyMCE_content_to_a_database.png?w=768&q=80&fit=scale" alt="Personagem fofo estilo Kawaii">

        <div class="php-section">
            <h2>Seção PHP - Exercícios Práticos:  ✨</h2>
            <p>Em breve, a mágica do PHP vai acontecer aqui!' </p>
			<p>(ノ°∀°)ノ⌒･*:.｡. .｡.:*･゜ﾟ･*☆</p>

            <p>Nutrition per 100gr</p>
            <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
            <p>SUgar: <?php echo $nutrition['sugar']; ?>%</p>
            <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
          
            </div>
    </div>
</body>
</html>