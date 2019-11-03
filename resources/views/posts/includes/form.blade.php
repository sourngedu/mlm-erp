<div class="form-group">
    {!! Form::label('name', 'Group', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('group', null, ["placeholder" => "", "class" => "form-control border-form",  "required"]) !!}
        {{-- @include('includes.form_fields_validation_message', ['name' => 'name']) --}}
    </div>

    {!! Form::label('display_name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        {{-- @include('includes.form_fields_validation_message', ['name' => 'display_name']) --}}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Display Name', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('display_name', null, ["placeholder" => "", "class" => "form-control border-form",  "required"]) !!}
        {{-- @include('includes.form_fields_validation_message', ['name' => 'name']) --}}
    </div>

    {!! Form::label('display_name', 'Description', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('description', null, ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        {{-- @include('includes.form_fields_validation_message', ['name' => 'display_name']) --}}
    </div>
</div>