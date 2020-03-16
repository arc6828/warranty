<div class="form-group {{ $errors->has('system') ? 'has-error' : ''}}">
    <label for="system" class="control-label">{{ 'ระบบ' }}</label>
    <input class="form-control" name="system" type="text" id="system" value="{{ isset($energyportionheat->system) ? $energyportionheat->system : ''}}" >
    {!! $errors->first('system', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('equipment') ? 'has-error' : ''}}">
    <label for="equipment" class="control-label">{{ 'อุปกรณ์' }}</label>
    <input class="form-control" name="equipment" type="text" id="equipment" value="{{ isset($energyportionheat->equipment) ? $energyportionheat->equipment : ''}}" >
    {!! $errors->first('equipment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_consumption_type') ? 'has-error' : ''}}">
    <label for="fuel_consumption_type" class="control-label">{{ 'การใช้พลังงานเชื้อเพลิง (ชนิดเชื้อเพลง)' }}</label>
    <input class="form-control" name="fuel_consumption_type" type="text" id="fuel_consumption_type" value="{{ isset($energyportionheat->fuel_consumption_type) ? $energyportionheat->fuel_consumption_type : ''}}" >
    {!! $errors->first('fuel_consumption_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_consumption_megajoule') ? 'has-error' : ''}}">
    <label for="fuel_consumption_megajoule" class="control-label">{{ 'การใช้พลังงานเชื้อเพลิง (เมกะจูล/ปี)' }}</label>
    <input class="form-control" name="fuel_consumption_megajoule" type="number" id="fuel_consumption_megajoule" value="{{ isset($energyportionheat->fuel_consumption_megajoule) ? $energyportionheat->fuel_consumption_megajoule : ''}}" >
    {!! $errors->first('fuel_consumption_megajoule', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('method_assessment') ? 'has-error' : ''}}">
    <label for="method_assessment" class="control-label">{{ 'วิธีการประเมิน' }}</label>
    <input class="form-control" name="method_assessment" type="text" id="method_assessment" value="{{ isset($energyportionheat->method_assessment) ? $energyportionheat->method_assessment : ''}}" >
    {!! $errors->first('method_assessment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('method_check') ? 'has-error' : ''}}">
    <label for="method_check" class="control-label">{{ 'วิธีการตรวจวัด' }}</label>
    <input class="form-control" name="method_check" type="text" id="method_check" value="{{ isset($energyportionheat->method_check) ? $energyportionheat->method_check : ''}}" >
    {!! $errors->first('method_check', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyportionheat->user_id) ? $energyportionheat->user_id : Auth::id() }}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyportionheat->energy_report_id) ? $energyportionheat->energy_report_id : request('energy_report_id') }}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
