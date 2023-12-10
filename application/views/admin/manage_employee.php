<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($employees as $key => $item): ?>
            <tr>
                <td><?=$item->id ?></td>
                <td><?=$item->name ?></td>
                <td><?=$item->phone ?></td>
                <td><?=$item->address ?></td>
                <td><?=$item->email ?></td>
                <td>
                    <a type="submit" href="<?=base_url('admin/orders/order_delete/');?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>