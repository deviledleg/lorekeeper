<<<<<<< HEAD
{!! Form::label('Subtype (Optional)') !!}
{!! Form::select('subtype_id', $subtypes, old('subtype_id') ?: $subtype, ['class' => 'form-control', 'id' => 'subtype']) !!}
=======
{!! Form::label(ucfirst(__('lorekeeper.subtype')).' (Optional)') !!}
{!! Form::select('subtype_id', $subtypes, old('subtype_id') ? : $subtype, ['class' => 'form-control', 'id' => 'subtype']) !!}
>>>>>>> 4ce3c4c70745c5449056cb191692917ca9946c3f
