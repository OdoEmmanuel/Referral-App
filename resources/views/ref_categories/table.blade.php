<div class="table-responsive">
    <table class="table" id="refCategories-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Refferal Url</th>
                <th>Visited</th>
                <th>Signups</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refCategories as $refCategory)
            <tr>
                <td>{{ $refCategory->name }}</td>
                <td>{{ route('refs.user',['user_id'=> Auth::user()->id, 'ref_category_id'=> $refCategory->id]) }}</td>
                <td>{{ $refCategory->referral_count }}</td>
                <td>{{ $refCategory->referral_visits }}</td>

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
