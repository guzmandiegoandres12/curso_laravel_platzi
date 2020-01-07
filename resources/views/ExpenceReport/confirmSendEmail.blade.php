@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center">Confirm Send report </h1>
    </section>
    <section class="my-5">
        <a href="/expense_reports/{{$report->id}}" class="btn btn-outline-info">Go to Back</a>
    </section>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $item)
                    <ul class="text-center">{{$item}}</ul>
                @endforeach
            </div>

        @endif
        <form action="/expense_reports/{{$report->id}}/sendEmail" method="POST">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email" value="{{old("title")}}">
            </div>
        <button type="submit" class="btn btn-outline-primary">Send Email</button>
        </form>

    </section>

@endsection
