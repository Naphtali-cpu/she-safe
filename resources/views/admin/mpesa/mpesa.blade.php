@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Mpesa Credentials</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Simulate
                        </button>
                    </div>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form action="{{ route('mpesa-simulate') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="tel" name="phone" class="form-control" id="phone"
                                        placeholder="254" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" name="amount" class="form-control" id="amount"
                                        placeholder="Amount" required>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('mpesa-auth-data') }}">
                    @csrf
                    <div class="container">
                        <label for="shortcode">Shortcode</label>
                        <input type="number" class="form-control" name="shortcode" id="shortcode"
                            value="{{ $shortcode }}" required>
                    </div>
                    <div class="container">
                        <label for="transactiontype">Consumer Key</label>
                        <input type="password" name="consumerkey" class="form-control" id="transactiontype"
                            value="{{ $consumerkey }}" required>
                    </div>
                    <div class="container">
                        <label for="shortcode">Consumer Secret</label>
                        <input type="password" name="consumersecret" class="form-control" id="shortcode"
                            value="{{ $consumersecret }}" required>
                    </div>
                    <div class="container">
                        <label for="passkey">Pass Key</label>
                        <input type="password" name="passkey" class="form-control" id="passkey"
                            value="{{ $passkey }}" required>
                    </div>
                    <div class="container">
                        <label for="callback">Callback Url</label>
                        <input type="url" class="form-control" name="callback" id="callback"
                            value="{{ $callback }}" required>
                    </div>
                    <div class="container">
                        <label for="transactiontype">Transaction Type</label>
                        <input type="text" name="transactiontype" class="form-control" id="transactiontype"
                            value="{{ $transactiontype }}" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
