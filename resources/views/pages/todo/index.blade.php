@extends('layouts.app')

@section('content')
    <section class="title">
        <div class="row">
            @foreach ($datas as $data)
                <div class="col-md-3 mb-4">
                    <div class="card" style="min-height: 250px">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="col">
                                <h5 class="card-title text-center">{{ $data->judul }}</h5>
                                <p class="p-5">{{ $data->description }}</p>
                            </div>
                            <div class="d-flex gap-3" style="">
                                <a class="btn btn-primary mt-auto" href="{{ route('todolist.show', $data->id) }}">VIEW</a>
                                <form action="{{ route('todolist.clear', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success mt-auto" type="submit">DONE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
