<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $task->title }}</p>
</div>

<!-- Intruction Field -->
<div class="form-group">
    {!! Form::label('intruction', 'Intruction:') !!}
    <p>{{ $task->intruction }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $task->user_id }}</p>
</div>

<!-- Reward Points Field -->
<div class="form-group">
    {!! Form::label('reward_points', 'Reward Points:') !!}
    <p>{{ $task->reward_points }}</p>
</div>

