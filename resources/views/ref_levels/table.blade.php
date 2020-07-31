<div class="table-responsive">
    <table class="table" id="refLevels-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Reward</th>
        <th>Congratulatory Message</th>
        <th>Target No Refferals</th>
        <th>Point Per Referral</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refLevels as $refLevel)
            <tr>
                <td>{{ $refLevel->name }}</td>
            <td>{{ $refLevel->description }}</td>
            <td>{{ $refLevel->reward }}</td>
            <td>{{ $refLevel->congratulatory_message }}</td>
            <td>{{ $refLevel->target_no_refferals }}</td>
            <td>{{ $refLevel->point_per_referral }}</td>
                <td>
                    {!! Form::open(['route' => ['refLevels.destroy', $refLevel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('refLevels.show', [$refLevel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('refLevels.edit', [$refLevel->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
