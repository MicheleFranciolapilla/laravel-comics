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