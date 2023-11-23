@extends('layouts.admin.app')

@section('content')
    <div class="page-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="pull-left">Pricing</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right pull-right">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Add Pricing
                                        </button>
                                        mm
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            @foreach ($pricing as $price)
                                <div class="col-xl-3 col-sm-6 xl-50 box-col-6">
                                    <div class="card  pricing-simple">
                                        <div class="card-body">
                                            <h3 class="text-center">{{ $price['name'] }}</h3>
                                            <h1 class="text-center">Ksh {{ $price['price'] }}</h1>
                                            <h6 class="mb-0 text-center">{{ $price['duration'] }} Days
                                            </h6>
                                            <div>{!! $price['description'] !!}
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-danger btn-block"
                                            onclick="executeval('{{ route('delete.price', $price->id) }}','Delete Price')"><i
                                                class="fa fa-trash"></i>Delete</button>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Pricing Plan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form theme-form" method="post" action="{{ route('add.price') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Duration in Days</label>
                                    <input type="number" name="duration" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Amount</label>
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label>Description</label>
                                <textarea name="description" class="editor form-control" style="min-height: 150px;"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-light" type="reset" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
