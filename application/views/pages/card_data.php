<div class="row">

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total quantity price</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->cart->contents() as $key => $content): ?>
			<tr>
				<td><?=$content['name'] ?></td>
				<td><?=$content['qty'] ?></td>
				<td><?=$content['price'] ?></td>
				<td><?=$content['qty']*$content['price'] ?></td>
				<td><a href="<?=base_url('cart_controller/remove_item/'.$content['rowid']) ?>">Remove</a></td>
			</tr>
			<?php endforeach; ?>

			<tr style="text-align: center; margin-4">
				<th>Total price of ALL</th>
			<tr style="text-align: center;">

				<td><?=$this->cart->total(); ?></td>
			</tr>
			</tr>
			</center>
		</tbody>
	</table>
	<a href="<?=base_url('cart_controller/cart_checkout') ?>" class="btn btn-success">checkout</a>
</div>
