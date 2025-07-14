<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success text-center" role="alert">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('info')): ?>
    <div class="alert alert-info text-center" role="alert">
        <?= session()->getFlashdata('info') ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('warning')): ?>
    <div class="alert alert-warning text-center" role="alert">
        <?= session()->getFlashdata('warning') ?>
    </div>
<?php endif; ?> 