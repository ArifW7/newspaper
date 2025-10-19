<div class="accordion-item mb-2">
    <h2 class="accordion-header" id="headingCustomLink">
        <button class="accordion-button collapsed" type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#Customlink" 
                aria-expanded="false" 
                aria-controls="Customlink"
                style="font-size: 14px; background-color: #f8f9fa;">
            Custom Link
        </button>
    </h2>
    <div id="Customlink" 
            class="accordion-collapse collapse" 
            aria-labelledby="headingCustomLink" 
            data-bs-parent="#accordionWrapa1">
        <div class="accordion-body p-0">

        <form action="{{route('menusItemsPost',$menu->id)}}" method="post">
            @csrf
            <input type="hidden" name="parent" value="{{$parent->id}}" />
            <div class="card-body" style="padding:10px;">
                <div class="form-group " style="margin-bottom: 15px;">
                    <label for="menuname">Menu Name</label>
                    <input
                        type="text"
                        class="form-control {{$errors->has('menuname')?'error':''}}"
                        name="menuname"
                        placeholder="Enter Menu Name"
                        value="{{old('menuname')}}"
                        required=""
                    />
                    @if ($errors->has('menuname'))
                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('menuname') }}</p>
                    @endif
                </div>
                <div class="form-group" style="margin-bottom: 8px;">
                    <label for="menulink">Menu Link</label>
                    <input
                        type="text"
                        class="form-control {{$errors->has('menulink')?'error':''}}"
                        name="menulink"
                        placeholder="Enter Slider Name"
                        value="{{old('menulink')}}"
                        required=""
                    />
                    @if ($errors->has('menulink'))
                    <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('menulink') }}</p>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-sm btn-block btn-primary" style="padding:10px;"><i class="fa fa-plus"></i> Add</button>
            </div>
        </form>
        </div>
    </div>
</div>