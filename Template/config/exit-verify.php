<div class="page-header">
    <h2><?= t('Exit Verification') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('ConfigController', 'save', array('redirect' => 'verify_exit')) ?>">
    <?= $this->form->csrf() ?>

    <fieldset>
        <?= $this->form->checkbox('verify_exit', t('Enable "Exit Verification"'), 1, $values[''] == 1) ?>
    </fieldset>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
    </div>
</form>
