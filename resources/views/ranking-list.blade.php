@extends('layouts.layout')

@section('content')
<div class="content-page wide-lg">
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal">Data Ranking</h2>
            <div class="nk-block-des">
                <p class="lead">Ranking SPK Disini</p>
            </div>
        </div>
    </div><!-- .nk-block -->
    <div class="nk-block">
        <div class="accordion" id="accordionExample">
            @include('item.data-matrix')
            @include('item.normalisasi-matrix')
            @include('item.normalisasi-matrix-terbobot')
            @include('item.matrix-positif-negatif-ideal')
            @include('item.jarak-positif-negatif')
            @include('item.nilai-preferensi')
            @include('item.kesimpulan')
        </div>
    </div><!-- .nk-block -->
</div><!-- .content-page -->


@endsection
