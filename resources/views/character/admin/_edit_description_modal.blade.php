<<<<<<< HEAD
{!! Form::open(['url' => $isMyo ? 'admin/myo/' . $character->id . '/description' : 'admin/character/' . $character->slug . '/description']) !!}
<div class="form-group">
    {!! Form::label('Character Description') !!}
    {!! Form::textarea('description', $character->description, ['class' => 'form-control wysiwyg']) !!}
</div>
=======
{!! Form::open(['url' => $isMyo ? 'admin/myo/'.$character->id.'/description' : 'admin/character/'.$character->slug.'/description']) !!}
    <div class="form-group">
        {!! Form::label(ucfirst(__('lorekeeper.character')).' Description') !!}
        {!! Form::textarea('description', $character->description, ['class' => 'form-control wysiwyg']) !!}
    </div>
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f

<div class="text-right">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

<script>
    $(document).ready(function() {
        @include('js._modal_wysiwyg')
    });
</script>
