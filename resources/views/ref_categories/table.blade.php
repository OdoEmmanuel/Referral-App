<div class="table-responsive">
    <table class="table" id="refCategories-table">
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
        @foreach($refCategories as $refCategory)
            <tr>
                <td>{{ $refCategory->name }}</td>
            <td>{{ $refCategory->description }}</td>
            <td>{{ $refCategory->reward }}</td>
            <td>{{ $refCategory->congratulatory_message }}</td>
            <td>{{ $refCategory->target_no_refferals }}</td>
            <td>{{ $refCategory->point_per_referral }}</td>
                <td>
                    {!! Form::open(['route' => ['refCategories.destroy', $refCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('refCategories.show', [$refCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('refCategories.edit', [$refCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
