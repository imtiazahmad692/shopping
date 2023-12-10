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
                    <th>Date</th>
                    <th>Total Bill</th>
                    <th>Status</th>
                </tr>
            </thead>
            <?php foreach($orders as $key => $item): ?>
            <tr>
                <td><?=$item->date ?></td>
                <td><?=$item->total_bill ?></td>
                <td><?=$item->status ?></td>
                <td>
                    <a class="btn btn-primary" type="submit" href="<?=base_url('home/index')?>">Add More</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>