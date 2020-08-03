@extends('layouts.dashboard')
@section('content')
    <h3><i class="far fa-file-pdf"></i>Gerar Pdf do Palestrante</h3>
    <form action="gerarpdf/" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-12 col-sm-12">
                            <label for="palestrante">Palestrantes</label>
                            <select id="palestrante" name="palestrante"
                                    class="form-control form-control-sm select-find"
                                    style="width: 100%" required>
                                <option></option>
                                @foreach ($palestrantes as $palestrante)
                                    <option value="{{$palestrante->id}}">
                                        {{$palestrante->nm_palestrante}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12"><br>
                            <label for="investimento">Investimento</label>
                            <textarea class="form-control editor" name="investimento" id="investimento"
                                      rows="4" placeholder="Descreva os investimentos" required></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 ">
                            <br>
                            <label for="investimentoPadrao">Incluso impostos</label><br>
                            <div class="form-check form-check-inline d-flex">
                                <input
                                    class="form-check-input  {{ $errors->has('investimentoPadrao') ? 'is-invalid' : '' }}"
                                    type="radio" name="investimentoPadrao" id="sim" checked
                                    value="incluso impostos"
                                />
                                <label class="form-check-label"
                                       for="sim">Sim</label>
                                <input
                                    class="form-check-input  {{ $errors->has('investimentoPadrao') ? 'is-invalid' : '' }}"
                                    type="radio" name="investimentoPadrao" id="nao"
                                    value="não incluso impostos"
                                />
                                <label class="form-check-label"
                                       for="nao">Não</label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12"><br>
                            <label for="equip">Equipamentos Padrões</label>
                            <textarea class="form-control editor" name="equipamentos" id="equip"
                                      rows="4" placeholder="Descreva os equipamentos se necessário"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12"><br>
                            <label for="formapgt">Forma de Pagamento</label>
                            <textarea class="form-control editor" name="formapgt" id="formapgt"
                                      rows="4" placeholder="Descreva os forma de pagamento se necessário"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-right">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-save"></i> Gerar PDF
                </button>
                <button type="reset" class="btn btn-warning text-white btn-sm">
                    <i class="fa fa-eraser"></i> Limpar
                </button>
                <a href="/dashboard/"
                   class="btn btn-danger btn-sm">
                    <i class="fa fa-close"></i> Cancelar
                </a>
            </div>
        </div>
    </form>
@endsection
