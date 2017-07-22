<?php if (!empty($this->success)): ?>
    <p class="error"><?=$this->success?></p>
<?php endif ?>

<?php if (!empty($this->error)): ?>
    <p class="success"><?=$this->error?></p>
<?php endif ?>