@php
    $palestrantes = App\Palestrante::where('id','>',0)->paginate(10);
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
                    <td colspan="2">{{$palestrante->nm_palestrante}}</td>
                    <td class=" text-right">
                        <button type="button" class="btn btn-primary btn-sm ml-1"><i class='fas fa-edit'></i></button>
                        <button type="button" class="btn btn-danger btn-sm ml-1"><i class='fas fa-trash'></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$palestrantes->links()}}
        </div>
    </div>
</div>
