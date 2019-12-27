<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'ลำดับที่' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($energyproduction->code) ? $energyproduction->code : ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_name') ? 'has-error' : ''}}">
    <label for="product_name" class="control-label">{{ 'ชื่อผลิตภัณฑ์' }}</label>
    <input class="form-control" name="product_name" type="text" id="product_name" value="{{ isset($energyproduction->product_name) ? $energyproduction->product_name : ''}}" >
    {!! $errors->first('product_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacity') ? 'has-error' : ''}}">
    <label for="capacity" class="control-label">{{ 'กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)' }}</label>
    <input class="form-control" name="capacity" type="number" id="capacity" value="{{ isset($energyproduction->capacity) ? $energyproduction->capacity : ''}}" >
    {!! $errors->first('capacity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('yield') ? 'has-error' : ''}}">
    <label for="yield" class="control-label">{{ 'ปริมาณผลผลิตจริง' }}</label>
    <input class="form-control" name="yield" type="number" id="yield" value="{{ isset($energyproduction->yield) ? $energyproduction->yield : ''}}" >
    {!! $errors->first('yield', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyproduction->user_id) ? $energyproduction->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyproduction->enery_report_id) ? $energyproduction->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
