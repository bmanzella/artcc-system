@extends('layouts.master', ['pageTitle' => 'Weather'])


@section('content')

    <div class="row">
        <div class="col-sm-12">
            {{ dump(new \Illuminate\Database\Eloquent\Collection()) }}
        </div>
    </div>

@endsection