<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Referred By Field -->
<div class="form-group">
    {!! Form::label('referred_by', 'Referred By:') !!}
    <p>{{ $user->referred_by }}</p>
</div>

<!-- No Of Refs Field -->
<div class="form-group">
    {!! Form::label('no_of_refs', 'No Of Refs:') !!}
    <p>{{ $user->no_of_refs }}</p>
</div>

<!-- Refs Level Id Field -->
<div class="form-group">
    {!! Form::label('refs_level_id', 'Refs Level Id:') !!}
    <p>{{ $user->refs_level_id }}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role Id:') !!}
    <p>{{ $user->role_id }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

