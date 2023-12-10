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
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Total Bill</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($orders as $key => $order): ?>
            <tr>
                <td><?=$order->customer_name ?></td>
                <td><?=$order->customer_phone ?></td>
                <td><?=$order->customer_address ?></td>
                <td><?=$order->password ?></td>
                <td><?=$order->total_bill ?></td>
                <td><?=$order->date ?></td>
                <td><?=$order->status ?></td>
                <td>
                    <a type="submit" href="<?=base_url('admin/orders/order_approve/'.$order->o_id);?>"
                        class="btn btn-success">Approve</a>
                </td>
                <td>
                    <a type="submit" href="<?=base_url('admin/orders/order_delete/'.$order->o_id);?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>