<table class="table table-condensed">
	<thead>
		<tr class="cart_menu">
			<td class="image">Ảnh</td>
			<td class="description">Tên sản phẩm</td>
			<td class="price">Giá</td>
			<td class="quantity">Số lượng</td>
			<td class="total">Tổng </td>
			<td></td>
		</tr>
	</thead>
	<tbody>

		@foreach (session()->get('cart') as $item)
		<tr>
			<td class="cart_product">
				<a href=""><img src="../{{$item->hinh}}" width="100px" alt=""></a>
			</td>
			<td class="cart_description">
				<h4>{{$item->Ten_hang_hoa}}</h4>

			</td>
			<td class="cart_price">
				<p>{{$item->gia}}</p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">

					<input type="number" name="" value="{{$item->sl}}" min="1">

				</div>
			</td>
			<td class="cart_total">
				<p class="cart_total_price"></p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete"  href="#" onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')"><i class="fa fa-times"></i></a>
			</td>
		</tr>
		@endforeach




</tbody>
</table>