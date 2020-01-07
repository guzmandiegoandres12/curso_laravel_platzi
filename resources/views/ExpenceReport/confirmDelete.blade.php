@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center">Confirm Delete item  {{$report->title}}</h1>
    </section>
    <section class="my-5">
        <a href="/expense_reports" class="btn btn-outline-info">Go to Back</a>
    </section>
    <section>

        <form action="/expense_reports/{{$report->id}}" method="POST">
            @csrf
            @method("delete")
        <button type="submit" class="btn btn-outline-danger">Confirm delete</button>
        </form>

    </section>

@endsection
