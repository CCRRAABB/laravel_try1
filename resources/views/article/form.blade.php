

<div class="form-group">
    {!! Form::label('title','Title:')!!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Body:')!!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('publish_at','Publish on:')!!}
    {!! Form::input('date','publish_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list','Tags:')!!}
    {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'bin bin-primary form-control'])!!}

</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder:'choose a tag',
            tags:true
        });
    </script>
    @endsection