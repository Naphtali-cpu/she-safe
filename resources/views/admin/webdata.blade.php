@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Web Information</h5>
            </div>
            <form class="form theme-form" method="post" action="{{ route('store.webdata') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-12">
                    <label for="decription">Description</label>
                    <textarea id="decription" class="form-control" name="description" cols="10" rows="10">
                        @if ($webdata != null)
{{ $webdata->description }}
@endif
                    </textarea>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <label class="text-muted">About EasyBiz</label>
                        <textarea id="text-box" class="editor form-control" name="about" cols="10" rows="10">
                            @if ($webdata != null)
{{ $webdata->about }}
@endif
                        </textarea>
                    </div>
                    <br>
                    <div class="col-sm-12">
                        <label class="text-muted">Info</label>
                        <textarea id="text-box" class="editor form-control" name="choose" cols="10" rows="10">
                            @if ($webdata != null)
{{ $webdata->choice }}
@endif
                        </textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" class="form-control"
                                value="@if ($webdata != null) {{ $webdata->phone }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" class="form-control"
                                value="@if ($webdata != null) {{ $webdata->email }} @endif" required>
                        </div>
                        <div class="col-md-4">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control"
                                value="@if ($webdata != null) {{ $webdata->address }} @endif" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <input class="btn btn-light" type="reset" value="Cancel">
                </div>
            </form>

        </div>

    </div>
@endsection
