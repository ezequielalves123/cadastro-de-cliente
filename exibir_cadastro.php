<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $interesses = $_POST['interesses'] ?? [];
    $comentarios = $_POST['comentarios'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do Cadastro de Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
  body {
    background-image: linear-gradient(45deg, rgb(219, 13, 13), rgb(245, 241, 241));
  }

  .fundo {
    background-color: black;
    border-radius: 15px;
  }
  </style>
</head>

<body>
  <div class="flex items-center justify-center min-h-screen">
    <div class="fundo bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-white w-full max-w-2xl">
      <h2 class="block text-white text-xl font-bold mb-6">Dados Recebidos:</h2>
      <p class="text-white"><strong>Nome:</strong> <?= ($nome); ?></p>
      <p class="text-white"><strong>E-mail:</strong> <?= ($email); ?></p>
      <p class="text-white"><strong>Telefone:</strong> <?= ($telefone); ?></p>

      <div class="text-white mt-4">
        <strong>Interesses:</strong><br>
        <?php if (!empty($interesses)): ?>
        <ul>
          <?php foreach ($interesses as $interesse): ?>
          <li><?= ($interesse); ?></li>
          <?php endforeach; ?>
        </ul>
        <?php else: ?>
        Nenhum interesse selecionado.
        <?php endif; ?>
      </div>

      <div class="text-white mt-4">
        <strong>Comentários:</strong>
        <p><?= nl2br(($comentarios)); ?></p>
      </div>
    </div>
  </div>
</body>

</html>
<?php
} else {
   
    header('Location: cadastro_cliente.html');
}
?>