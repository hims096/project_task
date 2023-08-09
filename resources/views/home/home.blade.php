@extends('master')


@section('home')
    <div>
        <div class="container my-2">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <center class="alert alert-danger">{{ $error }}</center>
                    @endforeach
                </div>
            @endif
            @if (session()->has('error'))
                <center class="alert alert-danger">{{ session('error') }}</center>
            @endif
            @if (session()->has('success'))
                <center class="alert alert-success">{{ session('success') }}</center>
            @endif
        </div>
       

        <center class="my-3">
            <h2>Welcome Weather Application</h2>
        </center>
        <div class="container">
            <form action="{{ route('home.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email ID</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">location</label>
                    <input type="text" class="form-control" name="location">
                </div>
                <button type="submit">Submit</button>

            </form>
        </div>
        <div class="container card my-3">
            <center>
                <h2><b>Wether Update...</b></h2>
                <hr>
            </center>
            <div class="">

                <form class="form-inline col-6" action="{{ route('weather') }}" method="GET">
                    @csrf
                    <input type="search" class="form-control mr-sm-2 " name="search_temp" placeholder="search your city"
                        value="">
                    <button class="btn btn-outline-success my-2 my-sm-2">Search</button>
                    
                </form>
                <div class="mx-4 row">
                    <div class="">


                    </div>
                </div>
            </div>
        </div>
        {{-- <footer class="border border-white border-2 bg-dark text-center text-lg-start text-light">
            <div class="container p-4 pb-0">

                <form action="{{ route('subscribe') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col-auto mb- mb-md-0">
                            <p class="pt-2">
                                <strong>Subscribe For Daily Update</strong>
                            </p>
                        </div>

                        <div class="col-md-5 col-12 mb-4 mb-md-0">

                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter Your Email ID" />

                            </div>
                        </div>

                        <div class="col-auto mb-4 mb-md-0">

                            <button type="submit" class="btn btn-primary mb-4">
                                Subscribe
                            </button>
                        </div>

                    </div>

                </form>
            </div>

            <div class="text-center p-3" style="background-color: rgba(227, 217, 217, 0.2);">
                © {{ date('Y') }} Copyright:
                <a class="text-light" href="">www.weather.com</a>
            </div>

        </footer> --}}
    </div>
@endsection
