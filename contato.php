<?php
// contato.php
$pageTitle = "Contato — Guilherme Amorim";
include 'header.php';

$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = strip_tags(trim($_POST['nome'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $mensagem = strip_tags(trim($_POST['mensagem'] ?? ''));
    if ($nome && $email && $mensagem) {
        // Para envio real, configurar mail() ou serviço externo (ex: SMTP/SendGrid). Aqui apenas simula.
        $sent = true;
    } else {
        $error = "Por favor preencha todos os campos corretamente.";
    }
}
?>
<main class="container py-5">
  <h1>Contato</h1>
  <?php if(isset($sent) && $sent): ?>
    <div class="alert alert-success" role="status">Mensagem recebida — obrigado! (simulação)</div>
  <?php else: ?>
    <?php if(!empty($error)) echo '<div class="alert alert-danger">'.htmlspecialchars($error).'</div>'; ?>
    <form method="post" action="contato.php" class="row g-3" novalidate>
      <div class="col-md-6">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="col-12">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea name="mensagem" id="mensagem" class="form-control" rows="6" required></textarea>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>
  <?php endif; ?>
</main>
<?php include 'footer.php'; ?>
