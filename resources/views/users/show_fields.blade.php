<!-- User Name Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $users->user_name }}</p>
</div>

<!-- User Password Field -->
<div class="col-sm-12">
    {!! Form::label('user_password', 'User Password:') !!}
    <p>{{ $users->user_password }}</p>
</div>

<!-- User Role Field -->
<div class="col-sm-12">
    {!! Form::label('user_role', 'User Role:') !!}
    <p>{{ $users->user_role }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $users->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $users->updated_at }}</p>
</div>

