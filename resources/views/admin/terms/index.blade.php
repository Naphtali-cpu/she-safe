@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Write Terms and Conditions</h5>
            </div>
            <form class="form theme-form" method="post" action="{{ route('add.terms') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="col-sm-12">
                        <label class="text-muted">Info</label>
                        <textarea id="text-box" class="editor form-control" name="terms" cols="10" rows="10">
                            @if ($terms != null)
{{ $terms->data }}
@endif
                        </textarea>
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
