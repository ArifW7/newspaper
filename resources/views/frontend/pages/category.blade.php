@extends('frontend.layouts.app')
@section('title', 'News Details')
@section('body_class', 'details-page')

@section('content')
<div class="container-fluid section-details border-top mt-80">
    <!-- Category -->
    <p class="title-blue fw-semibold mt-4">{{ $category->name }}</p>
    <div class="related-tag d-flex gap-3 bottom-dark-border">
        <ul class="nav nav-tabs related-tag border-0" id="partyTabs" role="tablist">
            @foreach($category->subCategories as $i=>$ctg)
            <li class="nav-item {{ $i < $category->subCategories->count() - 1 ? 'right-border' : '' }}" role="presentation">
                <a href="{{route('subCategory', ['category_slug' => $category->slug, 'subcategory_slug' => $ctg->slug])}}" class="nav-link " id="bnp-tab"  >{{$ctg->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- first news and add -->
    <div class="row bottom-border">
        <div class="col-md-9 col-12 right-border">
            @php $lead = $category->news->first(); @endphp
            @if($lead)
            <div class="row">
                <div class="col-md-6 col-12">
                    <a href="{{ route('newsDetails', $lead->slug) }}" class="detailsLink">
                        <h4 class="news-normal-title">{{ $lead->title }}</h4>
                    </a>
                    <p>{{Str::limit($lead->short_description, 350)}}</p>
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{ asset(getMedia($lead->id, 1, 1)) }}" alt="{{ $lead->slug ?? $lead->title }}" class="img-fluid">
                </div>
            </div>
            @endif
        </div>


        <!--End popular and latest news section  -->


        <div class="col-md-3 col-12 ">
            <div class="sidebar-add ">
                <img src="https://tpc.googlesyndication.com/simgad/11373802009826816949" class="img-fluid mobile-image">
            </div>


        </div>


    </div>
    <!--end first news and add -->
    <!-- Second news and add -->

    <div class="row bottom-border">
        <div class="col-md-9 col-12 right-border">
            <!-- first row -->
            <div class="row bottom-border">
                @foreach($category->news->skip(1) as $i=>$item)
                <div class="col-md-6 col-12 {{ ($i == 0 || ($i + 1) % 2 == 1) ? 'right-border' : '' }}">
                    <div class="row">
                        <div class="col-md-7 col-7">
                            <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                                <p class="fw-normal news-normal-title">
                                    {{ $item->title }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-5 col-5">
                            <a href="{{ route('newsDetails', $item->slug) }}">
                                <img src="{{ asset(getMedia($item->id, 1, 1)) }}" alt="{{ $item->slug ?? $item->title }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>





        <div class="col-md-3 col-12 ">
            <div class="border-top border-2 border-bottom mb-3 pb-2">
                <h4 class="fw-bold text-dark py-2">সর্বশেষ</h4>
            </div>
            @foreach ($latests as $item)
                <div class="row bottom-border">
                    <div class="col-md-7 col-7">
                        <a href="{{ route('newsDetails', $item->slug) }}" class="detailsLink">
                            <p class="fw-semibold ">
                                {{$item->title}}
                            </p>
                        </a>
                    </div>
                    <div class="col-md-5 col-4">
                        <a href="{{ route('newsDetails', $item->slug) }}">
                            <img src="{{ asset(getMedia($item->id, 1, 1)) }}" alt="{{ $item->slug ?? $item->title }}" class="me-3" width="124" height="85" loading="lazy">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection