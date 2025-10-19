<div class="accordion-item">
    <h2 class="accordion-header" id="headingpageLink">
        <button class="accordion-button collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#pageLink" 
                aria-expanded="false" 
                aria-controls="pageLink"
                style="font-size: 14px; background-color: #f8f9fa;">
            Custom Link
        </button>
    </h2>
    <div id="pageLink" 
            class="accordion-collapse collapse" 
            aria-labelledby="headingpageLink" 
            data-bs-parent="#accordionWrapa1">
        <div class="accordion-body p-0">
            <form action="{{route('menusItemsPost',$menu->id)}}" method="post">
                @csrf
                <input type="hidden" name="parent" value="{{$parent->id}}" />
                <div class="form-group" style="margin-bottom: 8px;">
                    <label for="pages">Select Pages</label>
                    <select data-placeholder="Select Pages..." name="pages[]" class="select2 form-control" multiple="multiple" required="">
                        @foreach($pages as $i=>$page)
                        <option value="{{$page->id}}">{{$page->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('pages*'))
                    <p style="color: red; margin: 0; font-size: 10px;">The Page Must Be a Number</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-sm btn-block btn-primary" style="padding:10px;"><i class="fa fa-plus"></i> Add</button>
            </form>
        </div>
    </div>
</div>
