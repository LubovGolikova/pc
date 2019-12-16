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
                    {!! Form::label('role', 'Role') !!}
                    {!! Form::select('role', ['guest', 'author', 'admin'], null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'description') !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fb_account', 'fb_account') !!}
                    {!! Form::textarea('fb_account', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('gmail_account', 'gmail_account') !!}
                  {!! Form::textarea('gmail_account', null, ['class'=>'form-control']) !!}
              </div>
            </div>
        </div>
    </div>
</div>