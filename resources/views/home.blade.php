<?php
use App\Http\Requests;
use App\Product;

?>

@extends('master')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        <div class="jumbotron text-center clearfix">
            <h2>Spin That Disc</h2>
            <p>Home page example</p>
            <p>
                <a href="" class="btn btn-primary btn-lg" target="_blank">Blog Post</a>
                <a href="" class="btn btn-success btn-lg" target="_blank">GitHub Repo</a>
            </p>
        </div> <!-- end jumbotron -->

        <h4>Featured Products</h4>

        @foreach (Product::all()->where('featured', '=', '1')->chunk(8) as $items)
                <div class="card-columns">
                @foreach ($items as $product)
                        <div class="card">
                            <a href="{{ url('shop', [$product->slug]) }}"><img class="card-img-top img-100" src="{{ asset('img/' . $product->image) }}" alt="product"></a>
                            <div class="card-block">
                                <a href="{{ url('shop', [$product->slug]) }}"><h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text"><small class="text-muted">£{{ $product->price }}</small></p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection