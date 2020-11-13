@extends('layouts.app2')
@section('content')
<div class="container">
<div class="card">
    <div class="card-body">
        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Código</th>
                    <th>Tour</th>
                    <th>as</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>a</td>
                    <td>a</td>
                    <td>d</td>
                    <td>d</td>
                </tr>
            </tbody>

        </table>

        {{-- <h1> {{$code}} </h1> --}}
        {{-- <h1> {{$passenger}} </h1> --}}
        <h2>{{$code->code}}</h2>
        <h2>{{$code->tour_name}}</h2>
        <h2>{{$code->email}}</h2>
        <h2>PASAJEROS</h2> 
        <ul>
            @foreach($passenger as $p)
                <li> {{$p->name}} - {{$p->passport}} </li>
            @endforeach

        </ul>
        <h2>HOTEL</h2>
        <ul>
            @foreach($hotel as $h)
                <li> {{$h->hotel}} - {{$h->accommodation}} </li>
            @endforeach

        </ul>

        <h2>TREN</h2>
        <ul>
            @foreach($train as $t)
                <li> {{$t->route}} - {{$t->date}} </li>
            @endforeach

        </ul>
        <h2>MENSAJE</h2>
        <p>{{$code->message}} </p>


    </div>
</div>
</div>
@endsection
