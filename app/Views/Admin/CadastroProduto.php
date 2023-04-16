<?php $this->extend('Admin/LayoutAdmin'); ?>
<?php $this->section('admin_content'); ?>
<form id="CadastrarProduto" title="Deseja cadastrar esse produto ?" name="CadastrarProduto" class="needs-validation" validator="1" method="POST"
    action="CadastrarProduto" novalidate>
    <div class="col-md-12">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-8">
                        <label class="form-label">Nome</label>
                        <input id="Nome" name="Nome" type="text"
                            style="text-transform: uppercase;" class="form-control uppercase" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label> Valor </label>
                        <input type="text" class="form-control uppercase" style="text-transform: uppercase;"
                            name="Valor" id="Valor" maxlength="60" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label width: 38px>   </label>
                        <button type="submit" class="btn btn-success col text-center" data-bs-toggle="modal"
                            data-bs-target="#NovaOs" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height=20" fill="currentColor"
                                class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg>&nbsp&nbspAdicionar Produto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="card  shadow-lg">
    <div class="card-body">
        <div class="table-responsive">
            <?php echo $produtos; ?>
        </div>
    </div>
</div>
<?php $this->endSection('admin_content'); ?>