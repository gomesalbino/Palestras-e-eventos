@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1> Crie o seu evento </h1>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file"/>
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" />
            </div>
             <div class="form-group">
                <label for="date">Data do evento</label>
                <input type="date" class="form-control" id="date" name="date" />
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?">
                </textarea>
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento" />
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select class="form-control custom-select" id="private" name="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Palco">Palco
                </div>
                <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Cerveja grátis">Cerveja grátis
                </div>
                <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Open food">Open food
                </div>
                <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Brindes">Brindes
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Criar Evento" />
        </form>
    </div>

@endsection

