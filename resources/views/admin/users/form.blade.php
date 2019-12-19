<div class="row">
    <div class="col-md-7">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                </div>

                 <div class="form-group">
                    {!! Form::label('password', 'password') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                 </div>

                <div class="form-group">
                    {!! Form::label('role', 'Role') !!}
                    {!! Form::select('role', ['guest'=>'guest', 'author'=>'author', 'admin'=>'admin'], null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'description') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                        {!! Form::label('fb_account', 'fb_account') !!}
                        {!! Form::text('fb_account', null, ['class'=>'form-control']) !!}
                    </div>



                  <div class="form-group">
                        {!! Form::label('telegram_account', 'telegram_account') !!}
                        {!! Form::text('telegram_account', null, ['class'=>'form-control']) !!}
                  </div>

                  <div class="form-group">
                     {!! Form::label('youtube_account', 'youtube_account') !!}
                     {!! Form::text('youtube_account', null, ['class'=>'form-control']) !!}
                  </div>
                   <div class="form-group">
                    {!! Form::label('card', 'card') !!}
                    {!! Form::text('card', null, ['class'=>'form-control']) !!}
                  </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                {!!Form::label('path', 'Image') !!}

                                <div class="col offset-md-4">
                                <img id="holder" src="{{$user->path?$user->path:''}}" style="width:150px"> <br/> <br/>
                    <div class="input-group">

                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                       <input id="thumbnail" class="form-control" type="text" name="path" value="{{$user->path?$user->path:''}}">
                     </div>

                </div>
        </div>
    </div>
</div>
</div>
</div>
