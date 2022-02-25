<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_name', 'User Name:') !!}
    {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_password', 'User Password:') !!}
    {!! Form::password('user_password', ['class' => 'form-control']) !!}
</div>