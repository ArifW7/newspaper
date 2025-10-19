<div class="row" style="margin:0;">
    @foreach($homedata->homeDataIds as $item)
        @if($item->news)
            <div class="col-md-2 col-6" style="padding:3px;">
                <div class="ProductGridSection">
                    <label>
                        <input type="checkbox" name="delete[]" value="{{ $item->id }}">
                        <i class="fa fa-trash text-danger"></i>
                    </label>
                    @if($item->news)
                    @if(getMedia($item->news->id, 1, 1))
                        <div class="ProductGrid">
                            <img src="{{ asset(getMedia($item->news->id, 1, 1)) }}" alt="{{ $item->news->title ?? 'News' }}">
                        </div>
                    @endif
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>
