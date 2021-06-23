<a class="bg_cart" href="{{route('cart')}}" title="Giỏ hàng">
	<span class="absolute count_item count_item_pr">{{session()->get('quantity_cart')}}</span>

	<i class="fa fa-shopping-bag"></i>
	<span class="block-small-cart">
		<span class="text-giohang hidden-xs">Giỏ hàng</span>
		<span class="block-count-pr">
			(<span class="count_item count_item_pr">{{session()->get('quantity_cart')}}</span>) sản
			phẩm
		</span>

	</span>
</a>