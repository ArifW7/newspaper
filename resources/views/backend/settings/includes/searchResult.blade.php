@if($searchProducts)
<ul>
	@foreach($searchProducts as $searchProduct)
	<li data-id="{{$searchProduct->id}}" data-type="addproduct">
		{{$searchProduct->title}}
	</li>
	@endforeach
</ul>
@endif