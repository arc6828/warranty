<div class="form-group {{ $errors->has('energy_production_id') ? 'has-error' : ''}}">
    <label for="energy_production_id" class="control-label">{{ 'ลำดับที่' }}</label>
    <input class="form-control" name="energy_production_id" type="number" id="energy_production_id" value="{{ isset($energyproductionoperation->energy_production_id) ? $energyproductionoperation->energy_production_id : ''}}" >
    {!! $errors->first('energy_production_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('raw_material') ? 'has-error' : ''}}">
    <label for="raw_material" class="control-label">{{ 'วัตถุดิบหลัก' }}</label>
    <input class="form-control" name="raw_material" type="text" id="raw_material" value="{{ isset($energyproductionoperation->raw_material) ? $energyproductionoperation->raw_material : ''}}" >
    {!! $errors->first('raw_material', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'เดือนที่ผลิต' }}</label>
    <input class="form-control" name="month" type="number" id="month" value="{{ isset($energyproductionoperation->month) ? $energyproductionoperation->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('working_hours') ? 'has-error' : ''}}">
    <label for="working_hours" class="control-label">{{ 'ชั่วโมงการทำงาน' }}</label>
    <input class="form-control" name="working_hours" type="number" id="working_hours" value="{{ isset($energyproductionoperation->working_hours) ? $energyproductionoperation->working_hours : ''}}" >
    {!! $errors->first('working_hours', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('production_unit') ? 'has-error' : ''}}">
    <label for="production_unit" class="control-label">{{ 'หน่วยผลผลิต' }}</label>
    <input class="form-control" name="production_unit" type="text" id="production_unit" value="{{ isset($energyproductionoperation->production_unit) ? $energyproductionoperation->production_unit : ''}}" >
    {!! $errors->first('production_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('yield') ? 'has-error' : ''}}">
    <label for="yield" class="control-label">{{ 'ปริมาณผลผลิตจริง' }}</label>
    <input class="form-control" name="yield" type="number" id="yield" value="{{ isset($energyproductionoperation->yield) ? $energyproductionoperation->yield : ''}}" >
    {!! $errors->first('yield', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacity') ? 'has-error' : ''}}">
    <label for="capacity" class="control-label">{{ 'กำลังผลิตติดตั้ง (กำลังการผลิตสูงสุดของเครื่องจักร)'}}</label>
    <input class="form-control" name="capacity" type="number" id="capacity" value="{{ isset($energyproductionoperation->capacity) ? $energyproductionoperation->capacity : ''}}" >
    {!! $errors->first('capacity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyproductionoperation->user_id) ? $energyproductionoperation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyproductionoperation->enery_report_id) ? $energyproductionoperation->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
