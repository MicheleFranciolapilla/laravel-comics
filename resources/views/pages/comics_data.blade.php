@extends('layout.app')

@section('page_title')
    {{$title}}
@endsection

@section('upper_header_content')
    @foreach($menu['header']['upper_header'] as $menu_item)
    {
        <li>
            <a href="#">{{ $menu_item }}</a>
        </li>
    }
    @endforeach
@endsection

@section('nav_menu_content')
    @foreach($menu['header']['nav'] as $index => $menu_item)
        @if ($loop->first)
            <li class="active">
        @else
            <li>
        @endif
                <a href="#">{{ $menu_item }}</a>
            </li>
    @endforeach
@endsection

@section('main_section')
    <div id="single_card_view">
        <div id="blue_strip">
            <div id="thumb">
                <img src="{{ $single_data['thumb'] }}" alt="{{ $single_data['title'] }}">
                <h6 class="text-white-50 text-center">VIEW GALLERY</h6>
            </div>
        </div>
        <div id="single_card" class="central">
            <h2>{{ $single_data['title'] }}</h2>
            <div id="data_block" class="d-flex my-3">
                <h6 class="py-1 px-2 border border-1 border-dark text-black bg-info">SERIES: <span class="text-secondary">{{ $single_data['series'] }}</span></h6>
                <h6 class="py-1 px-2 border border-1 border-dark text-black bg-info">TYPE: <span class="text-secondary">{{ $single_data['type'] }}</span></h6>
                <h6 class="py-1 px-2 border border-1 border-dark text-black bg-info">U.S. PRICE: <span class="text-secondary">{{ $single_data['price'] }}</span></h6>
            </div>
            <p>{{ $single_data['description'] }}</p>
            <hr>
            <h6 class="text-black">SALE DATE: <span class="text-secondary">{{ $single_data['sale_date'] }}</span></h6>
            <div id="authors" class="d-flex justify-content-between column-gap-3 w-100 border border-1 border-black rounded-1 p-2">
                <div id="artists">
                    <h6>ART BY</h6>
                    <p class="text-primary">{{ implode(", ", $single_data['artists']) }}</p>
                </div>
                <div id="writers">
                    <h6>WRITTEN BY</h6>
                    <p class="text-primary">{{ implode(", ", $single_data['writers']) }}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="middle_section">
        <a href="{{ route('main') }}"> Go back to HOME PAGE</a>
        <a href="{{ route('collection') }}"> Go back to COLLECTION</a>
    </div>
@endsection

@section('upper_footer_menu_content')
    @foreach($menu['footer']['upper_footer'] as $outer_index => $footer_menu)
        <li class="outer_list_item">
            <a href="#">{{ $outer_index }}</a>
            <ul class="inner_list">
                @foreach($footer_menu as $inner_index => $footer_menu_item)
                    <li class="inner_list_item">
                        <a href="#">{{ $footer_menu_item }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
@endsection 

@section('lower_footer_menu_content')
    @foreach($menu['footer']['lower_footer'] as $menu_item => $sub_menu)
        <li>
            @if ($loop->first)
                <a href="#">{{ $menu_item }}</a>
            @else
                <span>{{ $menu_item }}</span>
                <ul id="social_menu">
                    @foreach($sub_menu as $social_icon)
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/' . $social_icon) }}" alt="{{ $social_icon }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
@endsection