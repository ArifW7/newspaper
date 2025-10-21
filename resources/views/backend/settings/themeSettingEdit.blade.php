@extends('backend.app')

@push('title')
<title>Theme Setting</title>
@endpush

@push('css')
<style>
    /* Container for search */
    .SearchContain {
        position: relative;
    }

    .searchResultlist {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        z-index: 99;
        display: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-radius: 6px;
        overflow: hidden;
    }

    .searchResultlist ul {
        list-style: none;
        padding: 0;
        margin: 0;
        background: #fff;
    }

    .searchResultlist ul li {
        padding: 8px 12px;
        cursor: pointer;
        transition: 0.2s;
    }

    .searchResultlist ul li:hover {
        background-color: #f1f1f1;
    }

    /* Product Grid Card */
    .ProductGridSection {
        border: 1px solid #e3ebf3;
        border-radius: 8px;
        padding: 10px;
        text-align: center;
        transition: 0.3s;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .ProductGridSection:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    .ProductGrid img {
        max-width: 100%;
        max-height: 120px;
        border-radius: 6px;
    }

    .card-title {
        font-weight: 700;
        font-size: 18px;
        color: #00276C;
    }

    table.table-bordered th {
        background-color: #f8f9fa;
        font-weight: 600;
        vertical-align: middle;
    }

    table.table-bordered td {
        vertical-align: middle;
    }

    .btn-group a.btn {
        margin-left: 5px;
    }

    /* Search input */
    .serchProducts {
        border-radius: 8px;
        padding: 6px 10px;
        border: 1px solid #ccd6e6;
    }

    /* Responsive adjustments */
    @media(max-width:768px){
        .ProductGridSection {
            margin-bottom: 15px;
        }
    }

</style>
@endpush

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Theme Setting</h3>
            <div class="btn-group">
                <a class="btn btn-outline-primary" href="{{route('themeSetting')}}">Back</a>
                <a class="btn btn-outline-primary reloadPage1" href="{{route('themeSettingEdit',$homedata->id)}}">
                    <i class="fa-solid fa-rotate"></i>
                </a>
            </div>
        </div>

        <div class="card shadow-sm rounded-3 mb-4">
            <div class="card-header border-bottom">
                <h4 class="card-title mb-0">Manage Theme Settings</h4>
            </div>
            <div class="card-body">
                <form action="{{route('themeSettingUpdate',$homedata->id)}}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label"><b>Title</b></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$homedata->name}}">
                        </div>
                        <div class="col-md-6 d-none">
                            <label class="form-label"><b>Serial</b></label>
                            <input type="number" class="form-control" name="serial" value="{{$homedata->serial}}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><b>Limit</b></label>s
                            <input type="number" class="form-control" name="limit" value="{{$homedata->news_limit}}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><b>News Show Type</b></label>
                            <select class="form-control" name="section_type">
                                <option value="">Select Type</option>
                                <option value="1" {{$homedata->section_type==1?'selected':''}}>ট্রেন্ডিং নিউজ</option>
                                <option value="2" {{$homedata->section_type==2?'selected':''}}>জাতীয় নিউজ</option>
                                <option value="3" {{$homedata->section_type==3?'selected':''}}>সারাদেশ নিউজ</option>
                                <option value="4" {{$homedata->section_type==4?'selected':''}}>খেলা নিউজ</option>
                                <option value="5" {{$homedata->section_type==5?'selected':''}}>আন্তর্জাতিক নিউজ</option>
                                <option value="6" {{$homedata->section_type==6?'selected':''}}>বিনোদন নিউজ</option>
                                <option value="7" {{$homedata->section_type==7?'selected':''}}>রাজনীতি নিউজ</option>
                                <option value="8" {{$homedata->section_type==8?'selected':''}}>এক্সক্লুসিভ নিউজ</option>
                                <option value="9" {{$homedata->section_type==9?'selected':''}}>অর্থনীতি নিউজ</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><b>Status</b></label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="active" {{ $homedata->status=='active' ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success px-4">Update Theme</button>
                        </div>

                        <div class="col-12">
                            <label class="form-label"><b>News List</b></label>
                            <div class="SearchContain mb-3">
                                <input type="text" class="form-control serchProducts" placeholder="Search Product here..">
                                <div class="searchResultlist">
                                    @include('backend.settings.includes.searchResult')
                                </div>
                            </div>
                            <div class="HomeProducts row mb-4">
                                @include('backend.settings.includes.homeProducts')
                            </div>
                        </div>

                        
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js')
<script>
// Use jQ instead of $
jQ(document).ready(function(){

    jQ(".searchResultlist").hide();

    jQ(document).on('click', function(e) {
        var container = jQ(".SearchContain");
        var containerClose = jQ(".searchResultlist");
        if (!jQ(e.target).closest(container).length) {
            containerClose.hide();
        } else {
            containerClose.show();
        }
    });

    var url ="{{route('themeSettingEdit',$homedata->id)}}";
    var key;
    var type;

    // Search products
    jQ(document).on('keyup','.serchProducts',function(){
        type ='search';
        key = jQ(this).val();

        if(key.trim() === "") {
            jQ('.searchResultlist').hide();
            return;
        }

        jQ.ajax({
            url: url,
            dataType: 'json',
            cache: false,
            data: {'key':key,'type':type},
            success: function(data){
                if(data.view && data.view.trim() !== "") {
                    jQ('.searchResultlist').empty().append(data.view).show();
                } else {
                    jQ('.searchResultlist').empty().append('<ul><li style="padding:10px;color:#ff4d4f;">No product found</li></ul>').show();
                }
            },
            error: function() {
                jQ('.searchResultlist').empty().append('<ul><li style="padding:10px;color:#ff4d4f;">Error fetching products</li></ul>').show();
            }
        });
    });

    // Click on search result
    jQ(document).on('click','.searchResultlist ul li',function(){
        var id = jQ(this).data('id');
        var type = jQ(this).data('type');

        // Ignore click on "No product found" message
        if(!id) return;

        jQ(".searchResultlist").hide();

        jQ.ajax({
            url: url,
            dataType: 'json',
            cache: false,
            data: {'key':key,'id':id,'type':type},
            success: function(data){
                jQ('.HomeProducts').empty().append(data.view);
            }
        });
    });

});

</script>
@endpush
