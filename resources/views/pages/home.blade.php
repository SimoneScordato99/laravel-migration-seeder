@extends('layout.app')

@section('train')
<div class="w-100 d-flex justify-content-between flex-wrap gap-4 ">
    @foreach( $trains as $elem )

    <div class="card fs-1" style="width: 18rem;">
        <div class="card-body">
            <h2 class="card-title text-center text-primary">{{$elem['Azienda']}}</h2>
            <h3>Stazione di partenza:{{$elem['Stazione_di_partenza']}}</h3>
            <h3>Stazione di arrivo:{{$elem['Stazione_di_arrivo']}}</h3>
            <h4>Orario di partenza:{{$elem['Orario_di_partenza']}}</h4>
            <h4>Orario di arrivo:{{$elem['Orario_di_arrivo']}}</h4>
        </div>
    </div>
    @endforeach

</div>
@endsection