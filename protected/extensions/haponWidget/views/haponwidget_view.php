<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($test as $item) : ?>
        <tr>
            <th scope="row"><?= $item['id'] ?></th>
            <td><?= $item['title'] ?></td>
            <td><?= $item['description'] ?></td>
            <td><img src="/requirements/image/<?php echo $item['image'] ?>" width="200"></td>
            <td><?= $item['date'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

