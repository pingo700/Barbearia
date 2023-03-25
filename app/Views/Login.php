
<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<form method="POST" action="?acao=Admin&metodo=validar">
    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="mb-3">
                    <label class="mb-2 text-muted" for="email">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                    <div class="invalid-feedback">
                        Email inválido
                    </div>
                </div>

                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="password">Senha</label>
                        <a href="forgot.html" class="float-end">
                            Esqueceu a senha?
                        </a>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="invalid-feedback">
                        Senha necessária !
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="form-check">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Lembre de mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary ms-auto">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer py-3 border-0">
        </div>
    </div>
</form>
<?php $this->endSection('content'); ?>