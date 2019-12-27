<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'เดือน' }}</label>
    <input class="form-control" name="month" type="number" id="month" value="{{ isset($energyheatgenerator->month) ? $energyheatgenerator->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacity') ? 'has-error' : ''}}">
    <label for="capacity" class="control-label">{{ 'กำลังผลิตติดตั้ง (กิโลวัตต์)' }}</label>
    <input class="form-control" name="capacity" type="number" id="capacity" value="{{ isset($energyheatgenerator->capacity) ? $energyheatgenerator->capacity : ''}}" >
    {!! $errors->first('capacity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('primary_fuel_consumption_type') ? 'has-error' : ''}}">
    <label for="primary_fuel_consumption_type" class="control-label">{{ 'ปริมาณการใช้เชื้อเพลง(ชนิด)' }}</label>
    <input class="form-control" name="primary_fuel_consumption_type" type="text" id="primary_fuel_consumption_type" value="{{ isset($energyheatgenerator->primary_fuel_consumption_type) ? $energyheatgenerator->primary_fuel_consumption_type : ''}}" >
    {!! $errors->first('primary_fuel_consumption_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('primary_fuel_consumption_volume') ? 'has-error' : ''}}">
    <label for="primary_fuel_consumption_volume" class="control-label">{{ 'ปริมาณการใช้เชื้อเพลง(ปริมาณ)' }}</label>
    <input class="form-control" name="primary_fuel_consumption_volume" type="number" id="primary_fuel_consumption_volume" value="{{ isset($energyheatgenerator->primary_fuel_consumption_volume) ? $energyheatgenerator->primary_fuel_consumption_volume : ''}}" >
    {!! $errors->first('primary_fuel_consumption_volume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('primary_fuel_consumption_unit') ? 'has-error' : ''}}">
    <label for="primary_fuel_consumption_unit" class="control-label">{{ 'ปริมาณการใช้เชื้อเพลง(หน่วย)' }}</label>
    <input class="form-control" name="primary_fuel_consumption_unit" type="text" id="primary_fuel_consumption_unit" value="{{ isset($energyheatgenerator->primary_fuel_consumption_unit) ? $energyheatgenerator->primary_fuel_consumption_unit : ''}}" >
    {!! $errors->first('primary_fuel_consumption_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('operating_hours') ? 'has-error' : ''}}">
    <label for="operating_hours" class="control-label">{{ 'ชั่วโมงการเดินเครื่อง' }}</label>
    <input class="form-control" name="operating_hours" type="number" id="operating_hours" value="{{ isset($energyheatgenerator->operating_hours) ? $energyheatgenerator->operating_hours : ''}}" >
    {!! $errors->first('operating_hours', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electricity_use') ? 'has-error' : ''}}">
    <label for="electricity_use" class="control-label">{{ 'ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับใช้เอง' }}</label>
    <input class="form-control" name="electricity_use" type="number" id="electricity_use" value="{{ isset($energyheatgenerator->electricity_use) ? $energyheatgenerator->electricity_use : ''}}" >
    {!! $errors->first('electricity_use', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electricity_sale') ? 'has-error' : ''}}">
    <label for="electricity_sale" class="control-label">{{ 'ปริมาณพลังงานไฟฟ้าที่ผลิตได้ (กิโลวัตต์-ชั่วโมง) สำหรับจำหน่าย' }}</label>
    <input class="form-control" name="electricity_sale" type="number" id="electricity_sale" value="{{ isset($energyheatgenerator->electricity_sale) ? $energyheatgenerator->electricity_sale : ''}}" >
    {!! $errors->first('electricity_sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('steam_use') ? 'has-error' : ''}}">
    <label for="steam_use" class="control-label">{{ 'ปริมาณไอน้ำที่ผลิต' }}</label>
    <input class="form-control" name="steam_use" type="number" id="steam_use" value="{{ isset($energyheatgenerator->steam_use) ? $energyheatgenerator->steam_use : ''}}" >
    {!! $errors->first('steam_use', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('steam_sale') ? 'has-error' : ''}}">
    <label for="steam_sale" class="control-label">{{ 'ปริมาณไอน้ำที่จำหน่าย' }}</label>
    <input class="form-control" name="steam_sale" type="number" id="steam_sale" value="{{ isset($energyheatgenerator->steam_sale) ? $energyheatgenerator->steam_sale : ''}}" >
    {!! $errors->first('steam_sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyheatgenerator->user_id) ? $energyheatgenerator->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyheatgenerator->enery_report_id) ? $energyheatgenerator->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
