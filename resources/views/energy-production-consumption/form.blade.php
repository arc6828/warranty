<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'เดือน' }}</label>
    <input class="form-control" name="month" type="number" id="month" value="{{ isset($energyproductionconsumption->month) ? $energyproductionconsumption->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('yield') ? 'has-error' : ''}}">
    <label for="yield" class="control-label">{{ 'ปริมาณผลผลิต' }}</label>
    <input class="form-control" name="yield" type="number" id="yield" value="{{ isset($energyproductionconsumption->yield) ? $energyproductionconsumption->yield : ''}}" >
    {!! $errors->first('yield', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('consumption_electricity') ? 'has-error' : ''}}">
    <label for="consumption_electricity" class="control-label">{{ 'พลังงานไฟฟ้าที่ใช้ (กิโลวัตต์-ชั่วโมง)' }}</label>
    <input class="form-control" name="consumption_electricity" type="number" id="consumption_electricity" value="{{ isset($energyproductionconsumption->consumption_electricity) ? $energyproductionconsumption->consumption_electricity : ''}}" >
    {!! $errors->first('consumption_electricity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('consumption_heat') ? 'has-error' : ''}}">
    <label for="consumption_heat" class="control-label">{{ 'พลังงานความร้อนที่ใช้ (เมกะจูล)' }}</label>
    <input class="form-control" name="consumption_heat" type="number" id="consumption_heat" value="{{ isset($energyproductionconsumption->consumption_heat) ? $energyproductionconsumption->consumption_heat : ''}}" >
    {!! $errors->first('consumption_heat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_production_id') ? 'has-error' : ''}}">
    <label for="energy_production_id" class="control-label">{{ 'Energy Production Id' }}</label>
    <input class="form-control" name="energy_production_id" type="number" id="energy_production_id" value="{{ isset($energyproductionconsumption->energy_production_id) ? $energyproductionconsumption->energy_production_id : ''}}" readonly >
    {!! $errors->first('energy_production_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyproductionconsumption->user_id) ? $energyproductionconsumption->user_id : ''}}" readonly >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyproductionconsumption->energy_report_id) ? $energyproductionconsumption->energy_report_id : ''}}" readonly >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
