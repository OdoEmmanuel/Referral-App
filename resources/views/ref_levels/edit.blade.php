@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ref Level
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($refLevel, ['route' => ['refLevels.update', $refLevel->id], 'method' => 'patch']) !!}

                        @include('ref_levels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection