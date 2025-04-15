<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h2 class="text-center mb-4">Login</h2>
    
    <form action="processa_login.php" method="post" class="needs-validation" novalidate>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
          Por favor, insira um e-mail válido.
        </div>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
        <div class="invalid-feedback">
          A senha é obrigatória.
        </div>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
        <label class="form-check-label" for="lembrar">Lembrar de mim</label>
      </div>

      <div class="d-grid mb-3">
        <button class="btn btn-success" type="submit">Entrar</button>
      </div>

      <div class="text-center">
        <a href="recuperar_senha.php" class="d-block mb-1">Esqueci minha senha</a>
        <a href="cadastro.php">Não tem conta? Cadastre-se</a>
      </div>
    </form>
  </div>

  <script>
    // Script de validação Bootstrap
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')

      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

</body>
</html>
