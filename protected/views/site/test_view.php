<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $item): ?>
        <tr>
            <th scope="row"><?= $item['id'] ?></th>
            <td><?= $item['title'] ?></td>
            <td><?= $item['description'] ?></td>
            <td><?= $item['image'] ?></td>
            <td><?= $item['date'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
