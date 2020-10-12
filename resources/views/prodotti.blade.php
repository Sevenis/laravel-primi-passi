@php



@endphp

@extends('layout.app')

    @section('titolo','La Molisana - Prodotti')

    @section('main')
        <div class="cards">
            <h2>Le lunghe</h2>
            <div class="border-box">
                @foreach ($lunghe as $card)
                    <div class="card">
                        <div class="box-card">
                            <h3>{{$card['titolo']}}</h3>
                            <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                        </div>
                    </div>
                @endforeach
            </div>
            <h2>Le corte</h2>
            <div class="border-box">
                @foreach ($corte as $card)
                    <div class="card">
                        <div class="box-card">
                            <h3>{{$card['titolo']}}</h3>
                            <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                        </div>
                    </div>
                @endforeach
            </div>
            <h2>Le cortissime</h2>
            <div class="border-box">
                @foreach ($cortissime as $card)
                    <div class="card">
                        <div class="box-card">
                            <h3>{{$card['titolo']}}</h3>
                            <img src="{{$card['src']}}" alt="{{$card['titolo']}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
