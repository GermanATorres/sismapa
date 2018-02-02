@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contribuyentes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contribuyentes, ['route' => ['contribuyentes.update', $contribuyentes->id], 'method' => 'patch']) !!}

                        @include('contribuyentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection