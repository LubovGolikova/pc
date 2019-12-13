<div class="row">
    <div class="col-md-7">
    <div class="box box-primary">
    <div class="box-body">
         <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category', $categories , null, ['class'=>'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Author') !!}
                {!! Form::select('user_id', $authors , null, ['class'=>'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('content', 'Content') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>
        </div>
    </div></div>

    <div class="col-md-5">
     <div class="box box-primary">
        <div class="box-body">
            <div class="form-group form-check">
                {!! Form::checkbox('approved', '1', null,['class'=>'form-check-input'] ) !!}
                {!! Form::label('approved', 'Approved',['class'=>'form-check-label']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('writed_at', 'Writed') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                {!! Form::date('writed_at', null, ['class'=>"form-control pull-right" ]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="box box-primary">
         <div class="box-body">
            <div class="form-group">
                {!! Form::label('youtube', 'Youtube') !!}
                @if($verse->youtube)
                   <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$verse->getYoutube()}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif

                {!! Form::text('youtube', null, ['class'=>'form-control']) !!}
            </div>
</div>
</div>
<div class="box box-primary">
        <div class="box-body">
            <div class="form-group">
             {!!Form::label('audio', 'Audio') !!} <br/>
            @if($verse->audio)
                <audio controls>
                    <source src="/{{$verse->audio}}" type="audio/mpeg">
                </audio>
            @endif

                {!! Form::file('audio', ['class'=>'form-control']) !!}
            </div>
</div>
</div>
<div class="box box-primary">
        <div class="box-body">
            <div class="form-group">
            {!!Form::label('filepath', 'Image') !!}

                            <div class="col offset-md-4">
                            <img id="holder" src="{{$verse->path?$verse->path:''}}" style="width:150px"> <br/> <br/>
                <div class="input-group">

                   <span class="input-group-btn">
                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                   <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$verse->path?$verse->path:''}}">
                 </div>

            </div>
            </div>
</div>
</div>
<div class="box box-primary">
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('likes', 'Likes') !!}
                {!! Form::number('likes', $verse->likes?$verse->likes:0, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('views', 'Views') !!}
                {!! Form::number('views', $verse->views?$verse->views:0, ['class'=>'form-control']) !!}
            </div>
    </div>
    </div></div></div>