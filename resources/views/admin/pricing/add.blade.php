@extends('layouts.admin.app')

@section('content')
    <div class="page-body">
        @include('layouts.miniheader')
        <div class="card">
            <div class="card-header">
                <h5>New Feature</h5>
            </div>
            <form class="form theme-form" method="post" action="{{ route('add.price') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Section</label>
                                <select name="section" class="form-control" required>
                                    <option value="">Select Section</option>
                                    <option value="listing">Listing</option>
                                    <option value="professional">Professional Profile</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Duration in Days</label>
                                <input type="number" name="duration" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" style="min-height: 150px;" required></textarea>
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
