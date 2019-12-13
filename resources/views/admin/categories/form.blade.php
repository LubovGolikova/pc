<div class="row">
    <div class="col-md-7">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('parent_id', 'Parent Category') !!}
                    {!! Form::select('parent_id', $categories , null, ['class'=>'form-control']) !!}
                </div>

            </div>
        </div>
    </div>
</div>