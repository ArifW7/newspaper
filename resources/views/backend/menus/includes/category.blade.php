<div class="accordion-item">
    <h2 class="accordion-header" id="categoryPageLink">
        <button class="accordion-button collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#categoryLink" 
                aria-expanded="false" 
                aria-controls="categoryLink"
                style="font-size: 14px; background-color: #f8f9fa;">
            Categories
        </button>
    </h2>
    <div id="categoryLink" 
            class="accordion-collapse collapse" 
            aria-labelledby="categoryPageLink" 
            data-bs-parent="#accordionWrapa1">
        <div class="accordion-body p-0">
            <form action="{{route('menusItemsPost',$menu->id)}}" method="post">
                @csrf
                <input type="hidden" name="parent" value="{{$parent->id}}" />
                <div class="form-group" style="margin-bottom: 5px;">
                    <label for="name" class="mb-2">Select Categories</label>
                    <select data-placeholder="Select Categories..." name="category[]" class="select2 form-control" multiple="multiple" required="">
                        @foreach($categories as $i=>$ctg)
                        <option value="{{$ctg->id}}">{{$ctg->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-block btn-primary" style="padding:10px;" onclick="return confirm('Are You Want To Add?')"><i class="fa fa-plus"></i> Add</button>
            </form>
        </div>
    </div>
</div>
