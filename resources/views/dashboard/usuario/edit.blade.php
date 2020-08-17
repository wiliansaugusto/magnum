<div class="modal fade" id="modalUsuarioUpdate{{$usuario->id}}" tabindex="-1" role="dialog"
     aria-labelledby="UsuarioUpdate{{$usuario->id}}" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content">
            <form method="POST"
                  action="/dashboard/usuario/{{$usuario->id}}">
                @csrf
                @method('UPDATE')
                <div class="modal-header">
                    <h5 class="modal-title" id="UsuarioUpdate{{$usuario->id}}">
                        Alterar senha do Usuário
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <h2 class="text-uppercase" style="font-weight: bold">{{$usuario->nm_usuario}}</h2>
                    <label id="password">{{$usuario->password}}</label>
                    
                    <input id="password" type="text"
                           class="form-control form-control-sm{{ $errors->has('$usuario->password') ? ' is-invalid' : '' }}"
                           name="password" value="{{ old('$usuario->password') }}" required autofocus
                           autocomplete="off"/>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Sim
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                        <i class="fa fa-close"></i> Não
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
