<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'เดือน' }}</label>
    <input class="form-control" name="month" type="number" id="month" value="{{ isset($energyconsumptionelectricity->month) ? $energyconsumptionelectricity->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximum_power_p') ? 'has-error' : ''}}">
    <label for="maximum_power_p" class="control-label">{{ 'พลังไฟฟ้าสูงสุด P(กิโลวัตต์)' }}</label>
    <input class="form-control" name="maximum_power_p" type="number" id="maximum_power_p" value="{{ isset($energyconsumptionelectricity->maximum_power_p) ? $energyconsumptionelectricity->maximum_power_p : ''}}" >
    {!! $errors->first('maximum_power_p', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximum_power_pp') ? 'has-error' : ''}}">
    <label for="maximum_power_pp" class="control-label">{{ 'พลังไฟฟ้าสูงสุด PP/OP1(กิโลวัตต์)' }}</label>
    <input class="form-control" name="maximum_power_pp" type="number" id="maximum_power_pp" value="{{ isset($energyconsumptionelectricity->maximum_power_pp) ? $energyconsumptionelectricity->maximum_power_pp : ''}}" >
    {!! $errors->first('maximum_power_pp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximum_power_op') ? 'has-error' : ''}}">
    <label for="maximum_power_op" class="control-label">{{ 'พลังไฟฟ้าสูงสุด OP/OP2(กิโลวัตต์)' }}</label>
    <input class="form-control" name="maximum_power_op" type="number" id="maximum_power_op" value="{{ isset($energyconsumptionelectricity->maximum_power_op) ? $energyconsumptionelectricity->maximum_power_op : ''}}" >
    {!! $errors->first('maximum_power_op', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('maximum_power_expenses') ? 'has-error' : ''}}">
    <label for="maximum_power_expenses" class="control-label">{{ 'ค่าใช้จ่าย (บาท)' }}</label>
    <input class="form-control" name="maximum_power_expenses" type="number" id="maximum_power_expenses" value="{{ isset($energyconsumptionelectricity->maximum_power_expenses) ? $energyconsumptionelectricity->maximum_power_expenses : ''}}" >
    {!! $errors->first('maximum_power_expenses', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electrical_energy_volume') ? 'has-error' : ''}}">
    <label for="electrical_energy_volume" class="control-label">{{ 'พลังงานไฟฟ้า ปริมาณ(กิโลวัตต์-ชั่วโมง)' }}</label>
    <input class="form-control" name="electrical_energy_volume" type="number" id="electrical_energy_volume" value="{{ isset($energyconsumptionelectricity->electrical_energy_volume) ? $energyconsumptionelectricity->electrical_energy_volume : ''}}" >
    {!! $errors->first('electrical_energy_volume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('electrical_energy_expenses') ? 'has-error' : ''}}">
    <label for="electrical_energy_expenses" class="control-label">{{ 'พลังงานไฟฟ้า ค่าใช้จ่าย(บาท)' }}</label>
    <input class="form-control" name="electrical_energy_expenses" type="number" id="electrical_energy_expenses" value="{{ isset($energyconsumptionelectricity->electrical_energy_expenses) ? $energyconsumptionelectricity->electrical_energy_expenses : ''}}" >
    {!! $errors->first('electrical_energy_expenses', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_electric_bill') ? 'has-error' : ''}}">
    <label for="total_electric_bill" class="control-label">{{ 'ค่าไฟฟ้ารวม (บาท)' }}</label>
    <input class="form-control" name="total_electric_bill" type="number" id="total_electric_bill" value="{{ isset($energyconsumptionelectricity->total_electric_bill) ? $energyconsumptionelectricity->total_electric_bill : ''}}" >
    {!! $errors->first('total_electric_bill', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyconsumptionelectricity->user_id) ? $energyconsumptionelectricity->user_id : Auth::id()}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyconsumptionelectricity->energy_report_id) ? $energyconsumptionelectricity->energy_report_id : request('energy_report_id') }}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
