@extends('layout.app')

@section('train')
<main>
<h2>awuikrghfvauikshfviu</h2>
    @foreach( $trains as $elem )
        <h2>{{$elem['Azienda']}}</h2>
    @endforeach

</main>
@endsection