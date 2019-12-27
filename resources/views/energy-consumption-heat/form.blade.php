<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'Month' }}</label>
    <input class="form-control" name="month" type="number" id="month" value="{{ isset($energyconsumptionheat->month) ? $energyconsumptionheat->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_oil_liter') ? 'has-error' : ''}}">
    <label for="fuel_oil_liter" class="control-label">{{ 'Fuel Oil Liter' }}</label>
    <input class="form-control" name="fuel_oil_liter" type="number" id="fuel_oil_liter" value="{{ isset($energyconsumptionheat->fuel_oil_liter) ? $energyconsumptionheat->fuel_oil_liter : ''}}" >
    {!! $errors->first('fuel_oil_liter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fuel_oil_baht') ? 'has-error' : ''}}">
    <label for="fuel_oil_baht" class="control-label">{{ 'Fuel Oil Baht' }}</label>
    <input class="form-control" name="fuel_oil_baht" type="number" id="fuel_oil_baht" value="{{ isset($energyconsumptionheat->fuel_oil_baht) ? $energyconsumptionheat->fuel_oil_baht : ''}}" >
    {!! $errors->first('fuel_oil_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diesel_oil_liter') ? 'has-error' : ''}}">
    <label for="diesel_oil_liter" class="control-label">{{ 'Diesel Oil Liter' }}</label>
    <input class="form-control" name="diesel_oil_liter" type="number" id="diesel_oil_liter" value="{{ isset($energyconsumptionheat->diesel_oil_liter) ? $energyconsumptionheat->diesel_oil_liter : ''}}" >
    {!! $errors->first('diesel_oil_liter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diesel_oil_baht') ? 'has-error' : ''}}">
    <label for="diesel_oil_baht" class="control-label">{{ 'Diesel Oil Baht' }}</label>
    <input class="form-control" name="diesel_oil_baht" type="number" id="diesel_oil_baht" value="{{ isset($energyconsumptionheat->diesel_oil_baht) ? $energyconsumptionheat->diesel_oil_baht : ''}}" >
    {!! $errors->first('diesel_oil_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lpg_kg') ? 'has-error' : ''}}">
    <label for="lpg_kg" class="control-label">{{ 'Lpg Kg' }}</label>
    <input class="form-control" name="lpg_kg" type="number" id="lpg_kg" value="{{ isset($energyconsumptionheat->lpg_kg) ? $energyconsumptionheat->lpg_kg : ''}}" >
    {!! $errors->first('lpg_kg', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lpg_baht') ? 'has-error' : ''}}">
    <label for="lpg_baht" class="control-label">{{ 'Lpg Baht' }}</label>
    <input class="form-control" name="lpg_baht" type="number" id="lpg_baht" value="{{ isset($energyconsumptionheat->lpg_baht) ? $energyconsumptionheat->lpg_baht : ''}}" >
    {!! $errors->first('lpg_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('natural_gas_millionbtu') ? 'has-error' : ''}}">
    <label for="natural_gas_millionbtu" class="control-label">{{ 'Natural Gas Millionbtu' }}</label>
    <input class="form-control" name="natural_gas_millionbtu" type="number" id="natural_gas_millionbtu" value="{{ isset($energyconsumptionheat->natural_gas_millionbtu) ? $energyconsumptionheat->natural_gas_millionbtu : ''}}" >
    {!! $errors->first('natural_gas_millionbtu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('natural_gas_baht') ? 'has-error' : ''}}">
    <label for="natural_gas_baht" class="control-label">{{ 'Natural Gas Baht' }}</label>
    <input class="form-control" name="natural_gas_baht" type="number" id="natural_gas_baht" value="{{ isset($energyconsumptionheat->natural_gas_baht) ? $energyconsumptionheat->natural_gas_baht : ''}}" >
    {!! $errors->first('natural_gas_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('coal_ton') ? 'has-error' : ''}}">
    <label for="coal_ton" class="control-label">{{ 'Coal Ton' }}</label>
    <input class="form-control" name="coal_ton" type="number" id="coal_ton" value="{{ isset($energyconsumptionheat->coal_ton) ? $energyconsumptionheat->coal_ton : ''}}" >
    {!! $errors->first('coal_ton', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('coal_baht') ? 'has-error' : ''}}">
    <label for="coal_baht" class="control-label">{{ 'Coal Baht' }}</label>
    <input class="form-control" name="coal_baht" type="number" id="coal_baht" value="{{ isset($energyconsumptionheat->coal_baht) ? $energyconsumptionheat->coal_baht : ''}}" >
    {!! $errors->first('coal_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('steam_purchased_ton') ? 'has-error' : ''}}">
    <label for="steam_purchased_ton" class="control-label">{{ 'Steam Purchased Ton' }}</label>
    <input class="form-control" name="steam_purchased_ton" type="number" id="steam_purchased_ton" value="{{ isset($energyconsumptionheat->steam_purchased_ton) ? $energyconsumptionheat->steam_purchased_ton : ''}}" >
    {!! $errors->first('steam_purchased_ton', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('steam_purchased_baht') ? 'has-error' : ''}}">
    <label for="steam_purchased_baht" class="control-label">{{ 'Steam Purchased Baht' }}</label>
    <input class="form-control" name="steam_purchased_baht" type="number" id="steam_purchased_baht" value="{{ isset($energyconsumptionheat->steam_purchased_baht) ? $energyconsumptionheat->steam_purchased_baht : ''}}" >
    {!! $errors->first('steam_purchased_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('other_unit') ? 'has-error' : ''}}">
    <label for="other_unit" class="control-label">{{ 'Other Unit' }}</label>
    <input class="form-control" name="other_unit" type="number" id="other_unit" value="{{ isset($energyconsumptionheat->other_unit) ? $energyconsumptionheat->other_unit : ''}}" >
    {!! $errors->first('other_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('other_baht') ? 'has-error' : ''}}">
    <label for="other_baht" class="control-label">{{ 'Other Baht' }}</label>
    <input class="form-control" name="other_baht" type="number" id="other_baht" value="{{ isset($energyconsumptionheat->other_baht) ? $energyconsumptionheat->other_baht : ''}}" >
    {!! $errors->first('other_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('renewable_energy_unit') ? 'has-error' : ''}}">
    <label for="renewable_energy_unit" class="control-label">{{ 'Renewable Energy Unit' }}</label>
    <input class="form-control" name="renewable_energy_unit" type="number" id="renewable_energy_unit" value="{{ isset($energyconsumptionheat->renewable_energy_unit) ? $energyconsumptionheat->renewable_energy_unit : ''}}" >
    {!! $errors->first('renewable_energy_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('renewable_energy_baht') ? 'has-error' : ''}}">
    <label for="renewable_energy_baht" class="control-label">{{ 'Renewable Energy Baht' }}</label>
    <input class="form-control" name="renewable_energy_baht" type="number" id="renewable_energy_baht" value="{{ isset($energyconsumptionheat->renewable_energy_baht) ? $energyconsumptionheat->renewable_energy_baht : ''}}" >
    {!! $errors->first('renewable_energy_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyconsumptionheat->user_id) ? $energyconsumptionheat->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyconsumptionheat->enery_report_id) ? $energyconsumptionheat->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
