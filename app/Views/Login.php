
<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

    <div class="card shadow-lg">
        <div class="card-body p-5">
            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
            <form action="Login"  method="post" validator="0" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label class="mb-2 text-muted" for="email">E-Mail</label>
                    <input id="EMAIL" type="EMAIL" class="form-control" name="EMAIL" value="" required autofocus>
                </div>
                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="SENHA">Senha</label>
                        <a href="forgot.html" class="float-end">
                            Esqueceu a senha?
                        </a>
                    </div>
                    <input id="SENHA" type="SENHA" class="form-control" name="SENHA" required>
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
<?php $this->endSection('content'); ?>