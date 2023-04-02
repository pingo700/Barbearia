<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<div class="container">
  <div class="container">
    <div class="row text-center text-lg-left">
      <div class="col-md-3 mb-3 text-center">
        <a href="https://mustache.com.br" class="d-block mb-4 h-100">
          <img class="img-fluid img-logo" src="images/pomada.jpg" alt="">
        </a>
      </div>
      <div class="col">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="data:image/jpeg;base64,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"
            alt="">
        </a>
      </div>
      <div class="col">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://images.tcdn.com.br/img/img_prod/722681/kit_completao_barba_e_cabelo_linha_completa_black_barts_single_ron_maleta_artesanal_de_madeira_inclu_79_1_78dd6a4a3b6db8596206fd833ee9fc91.jpg"
            alt="">
        </a>
      </div>
      <div class="col">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://cdn.sistemawbuy.com.br/arquivos/2ff2a6ae590a5650a33f3f01cd925b45/produtos/BU1GU1/minoxidil-3-unidades-aplicador-1-211-624ef013cd02b_mini.jpg"
            alt="">
        </a>
      </div>
      <div class="col">
        <a target="_blank" class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://images.tcdn.com.br/img/img_prod/686591/shampoo_anticaspa_hipster_250ml_221_1_20200710172223.jpg"
            alt="">
        </a>
      </div>
      <div class="col">
        <a target="_blank" class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://araujo.vteximg.com.br/arquivos/ids/4140427-1000-1000/07794728013864.jpg" alt="">
        </a>
      </div>
      <div class="col">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://i0.wp.com/www.canalmasculino.com.br/wp-content/uploads/2019/04/kit-clinique-3-produtos-hidratante-after-shave-tonico.jpg?resize=570%2C480"
            alt="" class="h-90">
        </a>
      </div>
      <div class="col">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-partner"
            src="https://http2.mlstatic.com/D_NQ_NP_861362-MLB48688544748_122021-O.webp" alt="">
        </a>
      </div>
    </div>
  </div>
  <form id="buscahome" name="buscahome" action="" method="get">
    <div class="input-group" novalidate>
      <input autocomplete="off" type="text" id="searchTxt" name="searchTxt" class="form-control shadow"
        placeholder="Digite sua busca..." aria-label="Digite sua busca..." aria-describedby="button-addon2" required>
      <button class="btn bg-coletek shadow" type="submit"><i class="none"> <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg></i></button>
    </div>
  </form>
</div>
<div class="container">

  <div class="container" data-aos="fade-up">
    <hr class="mt-2">
    <div class="section-title">
      <h2 class="text-center">LANÇAMENTOS</h2>
    </div>
    <div class="text-center produtos" data-aos="fade-up">
      <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousellanc" class="carousel carousel-produtos slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item carousel-item-produtos active">
              <div class="row g-3 pt-4">
                <div class="col-md-4">
                  <?php if($produtos): ?>
                  <?php foreach($produtos as $produto): ?>
                  <div class="card text-center bg-light">
                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                      <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                    </a>
                    <a>
                      <img src="images/balm.png" class="card-img-top " style="width: 250px; height: 340px;"></img>
                    </a>
                    <div class="card-header">
                      R$<?php echo $produto['valor']; ?>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                      <p class="card-text truncar-3l">
                      </p>
                    </div>
                    <div class="card-footer">
                      <a href="" onclick="Comprar(<?php echo $produto['id']; ?>)" class="btn  mt-2 d-block text-light"
                        style="background-color: #030303;">
                        Adicionar ao Carrinho
                      </a>
                      <small class="text-success"> Em estoque</small>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev w-aut" href="#recipeCarousellanc" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next w-aut" href="#recipeCarousellanc" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-title">
      <h2 class="text-center">EM PROMOÇÃO</h2>
    </div>
    <div class="text-center produtos" data-aos="fade-up">
      <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousellanc" class="carousel carousel-produtos slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item carousel-item-produtos active">
              <div class="row g-3 pt-4">
                <div class="col-md-4">
                  <?php if($produtos): ?>
                  <?php foreach($produtos as $produto): ?>
                  <div class="card text-center bg-light">
                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                      <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                    </a>
                    <a>
                      <img src="images/balm.png" class="card-img-top " style="width: 250px; height: 340px;"></img>
                    </a>
                    <div class="card-header">
                      R$<?php echo $produto['valor']; ?>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                      <p class="card-text truncar-3l">
                      </p>
                    </div>
                    <div class="card-footer">
                      <a href="" onclick="Comprar(<?php echo $produto['id']; ?>)" class="btn  mt-2 d-block text-light"
                        style="background-color: #030303;">
                        Adicionar ao Carrinho
                      </a>
                      <small class="text-success"> Em estoque</small>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev w-aut" href="#recipeCarousellanc" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next w-aut" href="#recipeCarousellanc" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->endSection('content'); ?>