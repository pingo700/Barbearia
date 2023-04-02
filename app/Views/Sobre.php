<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<div class="container">
  <div class="row g-3 pt-4">
    <div class="container" style="padding-top: 30px; padding-bottom: 30px">
      <hr class="mt-2">
      <div class="section-title">
        <h2 class="coletek-text">Sobre nós</h2>
      </div>
      <?php if($sobre): ?>
      <?php foreach($sobre as $sobre): ?>
        <?php echo $sobre['texto']; ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
  <?php $this->endSection('content'); ?>