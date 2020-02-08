<div class="form-group {{ $errors->has('system') ? 'has-error' : ''}}">
    <label for="system" class="control-label">{{ 'ระบบ' }}</label>
    <input class="form-control" name="system" type="text" id="system" value="{{ isset($energyportionelectricity->system) ? $energyportionelectricity->system : ''}}" >
    {!! $errors->first('system', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electric_power_consumption') ? 'has-error' : ''}}">
    <label for="electric_power_consumption" class="control-label">{{ 'การใช้พลังงานไฟฟ้า' }}</label>
    <input class="form-control" name="electric_power_consumption" type="number" id="electric_power_consumption" value="{{ isset($energyportionelectricity->electric_power_consumption) ? $energyportionelectricity->electric_power_consumption : ''}}" >
    {!! $errors->first('electric_power_consumption', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('method_assessment') ? 'has-error' : ''}}">
    <label for="method_assessment" class="control-label">{{ 'วิธีการประเมิน' }}</label>
    <input class="form-control" name="method_assessment" type="text" id="method_assessment" value="{{ isset($energyportionelectricity->method_assessment) ? $energyportionelectricity->method_assessment : ''}}" >
    {!! $errors->first('method_assessment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('method_check') ? 'has-error' : ''}}">
    <label for="method_check" class="control-label">{{ 'วิธีการตรวจวัด' }}</label>
    <input class="form-control" name="method_check" type="text" id="method_check" value="{{ isset($energyportionelectricity->method_check) ? $energyportionelectricity->method_check : ''}}" >
    {!! $errors->first('method_check', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyportionelectricity->user_id) ? $energyportionelectricity->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyportionelectricity->energy_report_id) ? $energyportionelectricity->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
