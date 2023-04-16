<?php $this->extend('Admin/LayoutAdmin'); ?>
<?php $this->section('admin_content'); ?>
<form id="Recarregar" name="OrdenServico" class="needs-validation" method="POST"
    action="PortalAt/OrdenServico/OrdensServicoTable" validator="1" novalidate>
    <div class="col-md-12">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-2">
                        <label> Situação </label>
                        <select class="form-select" id="CAT_SITUACAO" name="CAT_SITUACAO">
                            <option value="AB">ABERTOS</option>
                            <option value="PN">PENDENTES</option>
                            <option value="ED">EM DIVIDA</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label width: 38px>   </label>
                        <button type="submit" class="btn btn-secondary col text-center">Pesquisar</button>
                    </div>
                    <div class="form-group col-md-2">
                        <label width: 38px>   </label>
                        <button type="button" class="btn btn-secondary col text-center" data-bs-toggle="modal"
                            data-bs-target="#NovaOs" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height=20" fill="currentColor"
                                class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg>&nbsp&nbspNovo Cliente</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div style="display:none" id="OrdenServico" class="col-md-12">
    <div class="card  shadow-lg">
        <div class="card-body">
            <div class="table-responsive">
                <table id="OrdenServicoTable" class="table table-bordered  table-sm table-striped bg-light">
                    <thead>
                        <tr>
                            <th class="text-center" style="white-space: nowrap">N°</th>
                            <th class="text-center" style="white-space: nowrap">Data</th>
                            <th class="text-center" style="white-space: nowrap">Situação</th>
                            <th class="text-center" style="white-space: nowrap">Cliente</th>
                            <th class="text-center" style="white-space: nowrap">O.S.</th>
                            <th class="text-center" style="white-space: nowrap"></th>
                            <th class="text-center" style="white-space: nowrap"></th>
                            <th class="text-center" style="white-space: nowrap"></th>
                            <th class="text-center" style="white-space: nowrap"></th>
                        </tr>
                    </thead>
                    <tbody id="OrdenServico">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection('admin_content'); ?>