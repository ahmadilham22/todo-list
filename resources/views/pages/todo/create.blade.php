@extends('layouts.app')

@section('title')
    CREATE
@endsection

@section('content')
    <form action="{{ route('todolist.store') }}" method="post">
        @csrf
        <section class="title" style="height: 150px">
            <div class="col-md-12 d-block justify-content-center align-items-center mt-5">
                <div class="heading-title mb-3 text-center">
                    <span class="text-white bold">TITLE</span>
                </div>
                <div class="card col-md-3 mx-auto">
                    <div class="card-body">
                        <div class="col-md-12 mx-auto">
                            <input type="text" name="judul" placeholder="TODO TITLE" style="height: 50px"
                                class="form-control text-center" />
                        </div>
                    </div>
                </div>
        </section>
        <section class="title" style="min-height: 265px">
            <div class="col-md-12 d-block justify-content-center align-items-center">
                <div class="heading-title mb-3 text-center">
                    <span class="text-white bold">DESCRIPTION</span>
                </div>
                <div class="card col-md-3 mx-auto">
                    <div class="card-body">
                        <div class="col-md-12 mx-auto">
                            <textarea type="text" name="description" rows="10" class="form-control text-center"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="title">
            <div class="col-md-12 d-block justify-content-center align-items-center">
                <div class="col-md-3 mx-auto">
                    <button class="btn btn-primary mx-auto col-md-12 mx-auto text-center bg-primary"
                        style="height: 50px">SUBMIT</button>
                </div>
            </div>
        </section>
    </form>
@endsection
