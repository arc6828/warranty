<div class="form-group {{ $errors->has('system') ? 'has-error' : ''}}">
    <label for="system" class="control-label">{{ 'System' }}</label>
    <input class="form-control" name="system" type="text" id="system" value="{{ isset($energymachine->system) ? $energymachine->system : ''}}" >
    {!! $errors->first('system', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('machine_name') ? 'has-error' : ''}}">
    <label for="machine_name" class="control-label">{{ 'Machine Name' }}</label>
    <input class="form-control" name="machine_name" type="text" id="machine_name" value="{{ isset($energymachine->machine_name) ? $energymachine->machine_name : ''}}" >
    {!! $errors->first('machine_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('power_type') ? 'has-error' : ''}}">
    <label for="power_type" class="control-label">{{ 'Power Type' }}</label>
    <input class="form-control" name="power_type" type="text" id="power_type" value="{{ isset($energymachine->power_type) ? $energymachine->power_type : ''}}" >
    {!! $errors->first('power_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('spec') ? 'has-error' : ''}}">
    <label for="spec" class="control-label">{{ 'Spec' }}</label>
    <input class="form-control" name="spec" type="number" id="spec" value="{{ isset($energymachine->spec) ? $energymachine->spec : ''}}" >
    {!! $errors->first('spec', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('spec_unit') ? 'has-error' : ''}}">
    <label for="spec_unit" class="control-label">{{ 'Spec Unit' }}</label>
    <input class="form-control" name="spec_unit" type="text" id="spec_unit" value="{{ isset($energymachine->spec_unit) ? $energymachine->spec_unit : ''}}" >
    {!! $errors->first('spec_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($energymachine->quantity) ? $energymachine->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lifetime') ? 'has-error' : ''}}">
    <label for="lifetime" class="control-label">{{ 'Lifetime' }}</label>
    <input class="form-control" name="lifetime" type="number" id="lifetime" value="{{ isset($energymachine->lifetime) ? $energymachine->lifetime : ''}}" >
    {!! $errors->first('lifetime', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('average_active_hours') ? 'has-error' : ''}}">
    <label for="average_active_hours" class="control-label">{{ 'Average Active Hours' }}</label>
    <input class="form-control" name="average_active_hours" type="number" id="average_active_hours" value="{{ isset($energymachine->average_active_hours) ? $energymachine->average_active_hours : ''}}" >
    {!! $errors->first('average_active_hours', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electric_power') ? 'has-error' : ''}}">
    <label for="electric_power" class="control-label">{{ 'Electric Power' }}</label>
    <input class="form-control" name="electric_power" type="number" id="electric_power" value="{{ isset($energymachine->electric_power) ? $energymachine->electric_power : ''}}" >
    {!! $errors->first('electric_power', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('heat_power') ? 'has-error' : ''}}">
    <label for="heat_power" class="control-label">{{ 'Heat Power' }}</label>
    <input class="form-control" name="heat_power" type="number" id="heat_power" value="{{ isset($energymachine->heat_power) ? $energymachine->heat_power : ''}}" >
    {!! $errors->first('heat_power', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_type') ? 'has-error' : ''}}">
    <label for="fuel_type" class="control-label">{{ 'Fuel Type' }}</label>
    <textarea class="form-control" rows="5" name="fuel_type" type="textarea" id="fuel_type" >{{ isset($energymachine->fuel_type) ? $energymachine->fuel_type : ''}}</textarea>
    {!! $errors->first('fuel_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_unit') ? 'has-error' : ''}}">
    <label for="fuel_unit" class="control-label">{{ 'Fuel Unit' }}</label>
    <input class="form-control" name="fuel_unit" type="number" id="fuel_unit" value="{{ isset($energymachine->fuel_unit) ? $energymachine->fuel_unit : ''}}" >
    {!! $errors->first('fuel_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('performance_spec') ? 'has-error' : ''}}">
    <label for="performance_spec" class="control-label">{{ 'Performance Spec' }}</label>
    <input class="form-control" name="performance_spec" type="number" id="performance_spec" value="{{ isset($energymachine->performance_spec) ? $energymachine->performance_spec : ''}}" >
    {!! $errors->first('performance_spec', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('performance_unit') ? 'has-error' : ''}}">
    <label for="performance_unit" class="control-label">{{ 'Performance Unit' }}</label>
    <input class="form-control" name="performance_unit" type="text" id="performance_unit" value="{{ isset($energymachine->performance_unit) ? $energymachine->performance_unit : ''}}" >
    {!! $errors->first('performance_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('performance_actual') ? 'has-error' : ''}}">
    <label for="performance_actual" class="control-label">{{ 'Performance Actual' }}</label>
    <input class="form-control" name="performance_actual" type="number" id="performance_actual" value="{{ isset($energymachine->performance_actual) ? $energymachine->performance_actual : ''}}" >
    {!! $errors->first('performance_actual', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('performance_actual_unit') ? 'has-error' : ''}}">
    <label for="performance_actual_unit" class="control-label">{{ 'Performance Actual Unit' }}</label>
    <input class="form-control" name="performance_actual_unit" type="text" id="performance_actual_unit" value="{{ isset($energymachine->performance_actual_unit) ? $energymachine->performance_actual_unit : ''}}" >
    {!! $errors->first('performance_actual_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <textarea class="form-control" rows="5" name="remark" type="textarea" id="remark" >{{ isset($energymachine->remark) ? $energymachine->remark : ''}}</textarea>
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energymachine->user_id) ? $energymachine->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energymachine->enery_report_id) ? $energymachine->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
