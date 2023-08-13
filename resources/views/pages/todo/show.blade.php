@extends('layouts.app')

@section('title')
    DETAIL
@endsection

@section('content')
    <form action="{{ route('todolist.update', $todo->id) }}" method="post">
        @csrf
        @method('PUT')
        <section class="title" style="height: 150px">
            <div class="col-md-12 d-block justify-content-center align-items-center mt-5">
                <div class="heading-title mb-3 text-center">
                    <span class="text-white bold">TITLE</span>
                </div>
                <div class="card col-md-3 mx-auto">
                    <div class="card-body">
                        <div class="col-md-12 mx-auto">
                            <input type="text" name="judul" placeholder="TODO TITLE" style="height: 50px"
                                class="form-control text-center" value="{{ $todo->judul }}" />
                        </div>
                    </div>
                </div>
        </section>
        <section class="title">
            <div class="col-md-12 d-block justify-content-center align-items-center">
                <div class="heading-title mb-3 text-center">
                    <span class="text-white bold text">DESCRIPTION</span>
                </div>
                <div class="card col-md-3 mb-2 mx-auto" style="height: 200px">
                    <div class="card-body">
                        <div class="col-md-12 mx-auto">
                            <textarea type="text" name="description" rows="10" class="form-control text-center">{{ $todo->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="title">
            <div class="col-md-12 d-block justify-content-center align-items-center">
                <div class="col-md-3 mx-auto">
                    <button class="btn btn-warning mx-auto mb-2 col-md-12 mx-auto text-center" style="height: 50px"
                        type="submit">UPDATE</button>
    </form>
    <form action="{{ route('todolist.delete', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mx-auto col-md-12 mx-auto text-center" type="submit"
            style="height: 50px">HAPUS</button>
    </form>
    </div>
    </div>
    </section>
@endsection
