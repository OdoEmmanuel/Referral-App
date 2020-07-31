<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Intruction Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('intruction', 'Intruction:') !!}
    {!! Form::textarea('intruction', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reward Points Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reward_points', 'Reward Points:') !!}
    {!! Form::number('reward_points', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tasks.index') }}" class="btn btn-default">Cancel</a>
</div>
