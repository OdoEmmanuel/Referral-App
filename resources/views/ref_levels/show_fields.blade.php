<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $refLevel->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $refLevel->description }}</p>
</div>

<!-- Reward Field -->
<div class="form-group">
    {!! Form::label('reward', 'Reward:') !!}
    <p>{{ $refLevel->reward }}</p>
</div>

<!-- Congratulatory Message Field -->
<div class="form-group">
    {!! Form::label('congratulatory_message', 'Congratulatory Message:') !!}
    <p>{{ $refLevel->congratulatory_message }}</p>
</div>

<!-- Target No Refferals Field -->
<div class="form-group">
    {!! Form::label('target_no_refferals', 'Target No Refferals:') !!}
    <p>{{ $refLevel->target_no_refferals }}</p>
</div>

<!-- Point Per Referral Field -->
<div class="form-group">
    {!! Form::label('point_per_referral', 'Point Per Referral:') !!}
    <p>{{ $refLevel->point_per_referral }}</p>
</div>

