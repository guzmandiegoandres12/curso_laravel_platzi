@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center">Create New Report</h1>
    </section>
    <section class="my-5">
        <a href="/expense_reports" class="btn btn-outline-info">Go to Back</a>
    </section>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $item)
                    <ul class="text-center">{{$item}}</ul>
                @endforeach
            </div>

        @endif
        <form action="/expense_reports" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="title" value="{{old("title")}}">
              <small id="helpId" class="form-text text-muted">Text of title</small>
            </div>
        <button type="submit" class="btn btn-outline-primary">Create New Report</button>
        </form>

    </section>

@endsection
