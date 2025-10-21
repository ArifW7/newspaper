@extends('backend.app')

@push('title')
Theme Setting
@endpush

@push('css')
<style>
    .theme-card {
        border: 1px solid #e3ebf3;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .theme-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    .theme-card h4 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .theme-card .product-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .theme-card .product-item {
        flex: 0 0 calc(16.666% - 10px);
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 5px;
        background: #f9f9f9;
        transition: transform 0.2s ease;
    }

    .theme-card .product-item img {
        width: 100%;
        height: 130px;
        max-height: 130px;
        border-radius: 5px;
    }

    .theme-card .product-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .theme-card .btn-group {
        margin-top: 10px;
    }

    .section-info span {
        font-weight: 500;
        display: inline-block;
        margin-bottom: 5px;
    }
</style>
@endpush

@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Theme Setting</h3>
            <div class="btn-group">
                <a href="{{route('themeSetting',['type'=>'add'])}}" class="btn btn-primary" onclick="return confirm('Are You Want to Add?')">
                    <i class="fa fa-plus"></i> Add
                </a>
                <a href="{{route('themeSetting')}}" class="btn btn-outline-secondary">
                    <i class="fa-solid fa-rotate"></i> Reload
                </a>
            </div>
        </div>

        <div class="row">
            @foreach($homeDatas as $homedata)
                <div class="col-lg-12">
                    <div class="theme-card">
                        <div class="row mb-3">
                             <div class="col-md-5 section-info">
                                <h4><span>Theme Name:</span> {{$homedata->name ?? 'Untitled Section'}}</h4>
                            </div>
                            <div class="col-md-2 section-info">
                                <span>Serial Number:</span> {{$homedata->serial}}
                            </div>
                            <div class="col-md-2 section-info">
                                <span>News Limit:</span> {{$homedata->news_limit}}
                            </div>
                            <div class="col-md-3 section-info">
                                <span>News Type:</span>
                                @switch($homedata->section_type)
                                    @case(1)Indivisual News @break
                                    @case(2)Category News @break
                                    @case(3)Brand News @break
                                    @case(4)Latest News @break
                                    @case(5)Oldest News @break
                                    @case(6)Featured News @break
                                    @case(7)Most Views News @break
                                    @default - @endswitch
                            </div>
                        </div>

                        <div class="product-list mb-3">
                            @foreach($homedata->homeDataIds as $product)
                                <div class="product-item">
                                    @if($product->news)
                                        @if(getMedia($product->news->id, 1, 1))
                                        <img src="{{ asset(getMedia($product->news->id, 1, 1)) }}" alt="{{$product->news->title ?? 'News'}}">
                                        @endif
                                        <div class="mt-1">{{$product->news->title ?? 'News'}}</div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <div class="btn-group">
                            <a href="{{route('themeSettingEdit',$homedata->id)}}" class="btn btn-success">
                                <i class="fa fa-edit"></i> Manage
                            </a>
                            <a href="{{route('themeSettingEdit',[$homedata->id,'type'=>'delete'])}}" class="btn btn-danger" onclick="return confirm('Are You Want to Delete?')">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

@push('js')
@endpush
