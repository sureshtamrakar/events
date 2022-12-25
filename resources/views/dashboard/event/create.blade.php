@extends('layouts.dashboard')
@section('content')
<div class="row vh-100">
    <div class="col-md-12 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">
            <h1 class="h2">Create Event</h1>
            <div class="card border-0">
                <div class="card-header p-0"></div>
                <div class="card-body">
                    <div class="m-sm-4">
                        <form method="POST" action="{{ route('event.store') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Title</label>
                                    <input class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" placeholder="Enter Event Title">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control form-control-lg @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description">
                                    </textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label"> Event Start Date</label>
                                    <input class="form-control form-control-lg start_date @error('start_date') is-invalid @enderror" type="text" name="start_date" placeholder="Start Date">
                                    @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label"> Event End Date</label>
                                    <input class="form-control form-control-lg end_date @error('end_date') is-invalid @enderror" type="text" name="end_date" placeholder="End Date">
                                    @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div> <!-- End card body -->
            </div>
        </div>
    </div>
</div>
@endsection