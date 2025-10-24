@extends('frontend.layouts.app')

@section('title', $page->name)
@section('body_class', 'PageView')

@section('content')
<div class="container-fluid section-details border-top mt-80 ">
    <div class="container mt-2">
        <h2 class="mb-4 text-center"><span class="page-title">{{ $page->name }}</span></h2>
        @if(getMedia($page->id, 4, 1))
        <img src="{{ asset(getMedia($page->id, 4, 1)) }}" alt="{{$page->slug}}" class="img-fluid mb-3" style="width: 100%; max-height: 600px">
        @endif

        <p>{!! $page->short_description !!}</p>

        {!! $page->description !!}
    </div>
</div>
@endsection


@push('css')
<style>
    .contact-card .icon i {
        transition: transform 0.3s;
    }
    .contact-card:hover .icon i {
        transform: scale(1.2);
    }
    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }
    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        border-radius: 10px;
    }
    .page-title {
        display: inline-block;
        padding-bottom: 5px;
        border-bottom: 3px solid #124b65;
        font-weight: 600;
        color: #333;
    }

</style>
@endpush