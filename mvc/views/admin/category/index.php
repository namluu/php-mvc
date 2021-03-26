<h1>category index</h1>
<table class="table table-bordered border-primary">
    <tr class="table-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Alias</th>
        <th>Enable</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($categories as $category): ?>
    <tr>
        <td><?= $category->id ?></td>
        <td><?= $category->name ?></td>
        <td><?= $category->alias ?></td>
        <td><?= $category->is_enabled ?></td>
        <td><?= $category->created ?></td>
        <td><a href="<?=ADMIN_URL?>/category/edit/<?=$category->id?>">Edit</a></td>
        <td><a href="<?=ADMIN_URL?>/category/delete/<?=$category->id?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>