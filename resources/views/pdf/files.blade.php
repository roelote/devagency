

        <div><img src="{{ asset('img/logo.png') }}" width="100" alt="logo"> Dreamy Tours</div>
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