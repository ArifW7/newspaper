<div class="card-header" style="padding: 8px 15px; border: 1px solid #00b5b8; margin-top: 8px;" data-toggle="collapse" href="#accordion3" aria-expanded="false" aria-controls="accordion3">
    <a class="card-title lead collapsed" href="#" style="font-size: 14px;">Depertment</a>
</div>
<div id="accordion3" style="border: 1px solid #00b5b8;border-top: none;" role="tabpanel" data-parent="#accordionWrapa1" class="collapse" aria-expanded="false">
    <div class="card-content">
        <div class="card-body" style="padding:10px;">
            <form action="{{route('menusItemsPost',$menu->id)}}" method="post">
                @csrf
                <input type="hidden" name="parent" value="{{$parent->id}}" />
                <div class="form-group" style="margin-bottom: 5px;">
                    <label for="name">Select Depertment</label>
                    <select data-placeholder="Select Depertments..." name="depertment[]" class="select2 form-control" multiple="multiple" required="">
                        @foreach($depertments as $i=>$bctg)
                        <option value="{{$bctg->id}}">{{$bctg->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-block btn-primary" style="padding:10px;"><i class="fa fa-plus"></i> Add</button>
            </form>
        </div>
    </div>
</div>