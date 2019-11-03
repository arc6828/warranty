<div class="form-group {{ $errors->has('request_number') ? 'has-error' : ''}}">
    <label for="request_number" class="control-label">{{ 'Request Number' }}</label>
    <input class="form-control" name="request_number" type="number" id="request_number" value="{{ isset($table_a->request_number) ? $table_a->request_number : ''}}" >
    {!! $errors->first('request_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('registration_date') ? 'has-error' : ''}}">
    <label for="registration_date" class="control-label">{{ 'Registration Date' }}</label>
    <input class="form-control" name="registration_date" type="date" id="registration_date" value="{{ isset($table_a->registration_date) ? $table_a->registration_date : ''}}" >
    {!! $errors->first('registration_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fullname') ? 'has-error' : ''}}">
    <label for="fullname" class="control-label">{{ 'Fullname' }}</label>
    <input class="form-control" name="fullname" type="text" id="fullname" value="{{ isset($table_a->fullname) ? $table_a->fullname : ''}}" >
    {!! $errors->first('fullname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
    <label for="company" class="control-label">{{ 'Company' }}</label>
    <input class="form-control" name="company" type="text" id="company" value="{{ isset($table_a->company) ? $table_a->company : ''}}" >
    {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('production') ? 'has-error' : ''}}">
    <label for="production" class="control-label">{{ 'Production' }}</label>
    <input class="form-control" name="production" type="text" id="production" value="{{ isset($table_a->production) ? $table_a->production : ''}}" >
    {!! $errors->first('production', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('promotion_certificate_number') ? 'has-error' : ''}}">
    <label for="promotion_certificate_number" class="control-label">{{ 'Promotion Certificate Number' }}</label>
    <input class="form-control" name="promotion_certificate_number" type="number" id="promotion_certificate_number" value="{{ isset($table_a->promotion_certificate_number) ? $table_a->promotion_certificate_number : ''}}" >
    {!! $errors->first('promotion_certificate_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('promotion_date') ? 'has-error' : ''}}">
    <label for="promotion_date" class="control-label">{{ 'Promotion Date' }}</label>
    <input class="form-control" name="promotion_date" type="date" id="promotion_date" value="{{ isset($table_a->promotion_date) ? $table_a->promotion_date : ''}}" >
    {!! $errors->first('promotion_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
