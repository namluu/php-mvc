<h1>Add new Category</h1>
<form method="post">
    <?php if (isset($message) && $message): ?>
        <p class="alert alert-danger"><?=$message?></p>
    <?php endif; ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="alias" class="form-label">Alias</label>
        <input class="form-control" id="alias" name="alias">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a class="btn btn-secondary" href="<?=ADMIN_URL?>/category">Back</a>
</form>
<?php
