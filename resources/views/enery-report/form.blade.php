<div class="form-group {{ $errors->has('legal_name') ? 'has-error' : ''}}">
    <label for="legal_name" class="control-label">{{ 'Legal Name' }}</label>
    <input class="form-control" name="legal_name" type="text" id="legal_name" value="{{ isset($eneryreport->legal_name) ? $eneryreport->legal_name : ''}}" >
    {!! $errors->first('legal_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_name') ? 'has-error' : ''}}">
    <label for="factory_name" class="control-label">{{ 'Factory Name' }}</label>
    <input class="form-control" name="factory_name" type="text" id="factory_name" value="{{ isset($eneryreport->factory_name) ? $eneryreport->factory_name : ''}}" >
    {!! $errors->first('factory_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tsic_id') ? 'has-error' : ''}}">
    <label for="tsic_id" class="control-label">{{ 'Tsic Id' }}</label>
    <input class="form-control" name="tsic_id" type="text" id="tsic_id" value="{{ isset($eneryreport->tsic_id) ? $eneryreport->tsic_id : ''}}" >
    {!! $errors->first('tsic_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="number" id="year" value="{{ isset($eneryreport->year) ? $eneryreport->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($eneryreport->user_id) ? $eneryreport->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
