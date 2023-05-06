<?php $this->extend('Admin/LayoutAdmin'); ?>
<?php $this->section('admin_content'); ?>
<form id="CadastrarUsuario" title="Deseja cadastrar esse cliente ?" name="CadastrarUsuario" class="needs-validation"
    validator="1" method="POST" action="CadastrarUsuario" novalidate>
    <div class="col-md-12">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="form-label">Nome</label>
                        <input id="Nome" name="Nome" type="text" style="text-transform: uppercase;"
                            class="form-control uppercase" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-label">Email</label>
                        <input id="Email" name="Email" type="text" style="text-transform: uppercase;"
                            class="form-control uppercase" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label> Senha </label>
                        <input type="text" class="form-control uppercase" style="text-transform: uppercase;"
                            name="Senha" id="Senha" maxlength="60" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label> Categoria </label>
                        <select class="form-select" id="Categoria" name="Categoria">
                            <option value="4">Administrador</option>
                            <option value="3">Gerente de Vendas</option>
                            <option value="2">Supervisor de Estoque</option>
                            <option value="1">Vendedor</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label width: 38px>   </label>
                        <button type="submit" class="btn btn-success col text-center" data-bs-toggle="modal"
                            data-bs-target="#NovaOs" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height=20" fill="currentColor"
                                class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg>&nbsp&nbspAdicionar Usuário</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="card  shadow-lg">
    <div class="card-body">
        <div class="table-responsive">
            <table id="TableUsuario"
                class="table table-bordered table-sm table-striped bg-light dataTable no-footer dtr-inline" role="grid"
                aria-describedby="TableUsuario_info">
                <thead>
                    <tr role="row">
                        <th class="sorting sorting_desc" tabindex="0" aria-controls="TableUsuario" rowspan="1"
                            colspan="1" aria-sort="descending" aria-label="N°: activate to sort column ascending">N°
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="TableUsuario" rowspan="1" colspan="1"
                            aria-label="Nome: activate to sort column ascending">Nome</th>
                        <th class="sorting" tabindex="0" aria-controls="TableUsuario" rowspan="1" colspan="1"
                            aria-label="Categoria: activate to sort column ascending">Categoria</th>
                        <th class="sorting" tabindex="0" aria-controls="TableUsuario" rowspan="1" colspan="1"
                            aria-label="Email: activate to sort column ascending">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="TableUsuario" rowspan="1" colspan="1"
                            aria-label="Senha: activate to sort column ascending">Senha</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>js/CadastroUsuario.js"></script>
<?php $this->endSection('admin_content'); ?>