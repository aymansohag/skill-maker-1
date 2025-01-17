@extends('admin.includes.app')
@section('content')
    <div class="nk-content-body">
        <div class="card">
            <div class="card-header">
                <h5>{{ $page_name }}</h5>
            </div>
            <div class="card-body">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-preview">
                    <div class="card-inner">
                        <form action="{{ route('seminar-trainers.update', $seminars->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label">Course Name<sup class="text-danger">*</sup></label>
                                <input type="text" disabled  class="form-control" value="{{ $seminars->title }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Select Trainer<sup class="text-danger">*</sup></label>
                                @foreach ($trainers as $trainer)
                                    <li style="list-style: none">
                                        <input type="checkbox" name="trainer_id[]" value="{{ $trainer->id }}"> {{ $trainer->name }}
                                    </li>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <input type="submit" name="btn"  class="btn btn-primary col-6 btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
