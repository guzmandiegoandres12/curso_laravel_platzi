@extends('layouts.base')
@section('content')
    <section>
        <h1 class="text-center"> Add Expense to {{$report->title}}</h1>
    </section>
    {{$report}}
    <section class="my-5">
        <a href="/expense_reports/{{$report->id}}" class="btn btn-outline-info">Go to Back</a>
        <a href="/expense_reports" class="btn btn-outline-info">Go to reports </a>
    </section>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $item)
                    <ul class="text-center">{{$item}}</ul>
                @endforeach
            </div>

        @endif
        <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Description</label>
              <input type="text" class="form-control" name="descripsion" id="descripsion" aria-describedby="helpId" placeholder="descripcion" value="{{old("descripsion")}}">
            </div>
            <div class="form-group">
                <label for="title">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" aria-describedby="helpId" placeholder="amount" value="{{old("amount")}}">
              </div>
        <button type="submit" class="btn btn-outline-primary">Create New Report</button>
        </form>

    </section>

@endsection
