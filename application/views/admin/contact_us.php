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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($contact as $key => $item): ?>
            <tr>
                <td><?=$item->id ?></td>
                <td><?=$item->name ?></td>
                <td><?=$item->email ?></td>
                <td><?=$item->phone ?></td>
                <td><?=$item->message ?></td>
                <td>
                    <a type="submit" href="<?=base_url('admin/contact_us_controller/contact_delete/'.$item->id);?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>