<div class="modal fade" id="frmPropostaItemModal" tabindex="-1" role="dialog"
     aria-labelledby="frmNomePropostaItemModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="frmPropostaItem" method="POST" action="/dashboard/propostaItem/">
                <input id="num_item_proposta" type="hidden" name="num_item_proposta" value="{{ $data->id_proposta }}" /> 
                
                <input id="id_usuario" type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"/>
                @csrf
                <div class="title_center ">
                    <h4 style='color:red'>Proposta Nrº  {{$data->num_proposta}}</h4>
                </div>
                <div class="ln_solid"></div>
                

                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-4">
                        <label for="id_categoria">Categoria </label>
                        @php
                            $categorias = App\Categoria::all();
                            
                        @endphp   
                        <select id="id_categoria"
                                class="form-control form-control-sm select-find {{ $errors->has('id_categoria') ? 'is-invalid' : '' }}"
                                name="id_categoria" style="width: 100%">
                                
                            <option></option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">
                                    {{$categoria->nm_categoria}}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_categoria'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('id_categoria') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <label for="id_sub_categoria">Sub Categoria </label>
                          
                        <select id="id_sub_categoria"
                                class="form-control form-control-sm select-find {{ $errors->has('id_sub_categoria') ? 'is-invalid' : '' }}"
                                name="id_sub_categoria" style="width: 100%">
                                
                            <option></option>
                            
                        </select>
                        @if ($errors->has('id_sub_categoria'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('id_sub_categoria') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="col-md-4">
                            <label for="id_palestrante">Palestrante</label>
                            @php
                                $palestrantes = App\Palestrante::all();
                            @endphp   
                            <select id="id_palestrante"
                                    class="form-control form-control-sm select-find {{ $errors->has('id_palestrante') ? 'is-invalid' : '' }}"
                                    name="id_palestrante" style="width: 100%">
                                    
                                <option></option>
                                @foreach ($palestrantes as $palestrante)
                                    <option value="{{$palestrante->id}}">
                                        {{$palestrante->nm_palestrante}}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_palestrante'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id_palestrante') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                                            
                <div class="form-group row d-flex justify-content-center">
                    <div class="col-md-6">                            
                        <label for="nm_tipo_servico">Nome serviço</label>
                        <input id="nm_tipo_servico" type="text" class="form-control form-control-sm
                        {{ $errors->has('nm_tipo_servico') ? 'is-invalid' : '' }}" name="nm_tipo_servico"/>
                    </div>
                    <div class="col-md-6">                                        
                        <label for="vlr_servico_item">R$ Serviço</label>
                        <input id="vlr_servico_item" type="text" class="form-control form-control-sm
                        {{ $errors->has('vlr_servico_item') ? 'is-invalid' : '' }}" name="vlr_servico_item"/>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="row">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-save"></i> Salvar
                        </button>
                        <button type="reset" class="btn btn-warning btn-sm text-white">
                            <i class="fa fa-eraser"></i> Limpar
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-close"></i> Cancelar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
