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
            <h2>Spin That Disc Online Store</h2>
            <p>Shop a selection of new and classic vinyl records, CDs and musical equipment</p>
            <p>
                <a href="" class="btn btn-primary btn-lg" target="_blank">Vinyl</a>
                <a href="" class="btn btn-primary btn-lg" target="_blank">CD</a>
                <a href="" class="btn btn-primary btn-lg" target="_blank">Equipment</a>
            </p>
        </div> <!-- end jumbotron -->

        @foreach ($products->chunk(8) as $items)
                            <div class="card-columns">
                                @foreach ($items as $product)
                                    <div class="card">
                                        <a href="{{ url('shop', [$product->slug]) }}"><img class="card-img-top img-100" src="{{ asset('img/' . $product->image) }}" alt="product"></a>
                                        <div class="card-block">
                                            <a href="{{ url('shop', [$product->slug]) }}"><h6 class="card-title">{{ $product->name }}</h6>
                                                <p class="card-text"><small class="text-muted">£{{ $product->price }}</small></p>
                                            </a>
                                        </div> <!-- end caption -->
                                    </div> <!-- end thumbnail -->
                                @endforeach




                            </div> <!-- end row -->
            @endforeach
                </div> <!-- end container -->

@endsection