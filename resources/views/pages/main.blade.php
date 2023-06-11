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