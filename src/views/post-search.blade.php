@extends('FaqPackage::master')
@section('title')
    FAQ - Artículos
@endsection
@section('head-styles')
    <style>
        body {
            background-color: #f3f5f7;
        }
    </style>
@endsection
@section('content')
    <div id="posts">
        {{--        <posts initial-query="{{ $query }}"--}}
        {{--                roles="{{$roles}}"--}}
        {{--                algolia-id="{{ $algolia_id }}"--}}
        {{--                algolia-search="{{ $algolia_search }}">--}}
        {{--        </posts>--}}
    </div>
@section('body-scripts')
    <script>
        function search() {

        }

        // document.querySelector("#ow3 > div > div.qCHScd.r14hdb > div.ZqMF5b > div > span").innerHTML;
    </script>
    {{--    <script src="{{ mix('js/app.js', 'vendor/faq-package') }}"></script>--}}
@endsection
@section('body-styles')
    @parent
@endsection
@endsection