@php
$palestrantes = App\Palestrante::where('id','>',0)->simplePaginate(10);
@endphp
<div class="row justifi-content">
    <div class="col-md-12 ">

        <table class="table table-striped table-sm table-hover">
            <thead class="thead-light">
                <tr>
                    <th colspan="3">Palestrante</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($palestrantes as $palestrante)
                <tr>
                    <td>{{$palestrante->nm_palestrante}}</td>
                    <td><button type="button" class="btn btn-primary">Alterar</button></td>
                    <td><button type="button" class="btn btn-danger">Danger</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$palestrantes->links()}}
        </div>
    </div>


    </div>
