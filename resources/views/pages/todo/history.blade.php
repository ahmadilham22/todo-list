@extends('layouts.app')

@section('title')
    HISTORY
@endsection

@section('content')
    <section class="title">
        <div class="row">
            @foreach ($dones as $done)
                <div class="col-md-3 mb-4">
                    <div class="card" style="min-height: 250px">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="col">
                                <h5 class="card-title text-center">{{ $done->judul }}</h5>
                                <p class="p-5">{{ $done->description }}</p>
                            </div>
                            <div class="d-flex gap-3" style="">
                                {{-- <a class="btn btn-primary mt-auto"
                                    href="{{ route('todolist.show', $done->id) }}">RESTORE</a> --}}
                                <form action="{{ route('todolist.restore', $done->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success mt-auto" type="submit">RESTORE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
