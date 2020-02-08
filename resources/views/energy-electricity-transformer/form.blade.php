<div class="form-group {{ $errors->has('user_serial') ? 'has-error' : ''}}">
    <label for="user_serial" class="control-label">{{ 'หมายเลขผู้ใช้ไฟฟ้า' }}</label>
    <input class="form-control" name="user_serial" type="text" id="user_serial" value="{{ isset($energyelectricitytransformer->user_serial) ? $energyelectricitytransformer->user_serial : ''}}" >
    {!! $errors->first('user_serial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_serial') ? 'has-error' : ''}}">
    <label for="transformer_serial" class="control-label">{{ 'หมายเลขเครื่องวัดไฟฟ้า' }}</label>
    <input class="form-control" name="transformer_serial" type="text" id="transformer_serial" value="{{ isset($energyelectricitytransformer->transformer_serial) ? $energyelectricitytransformer->transformer_serial : ''}}" >
    {!! $errors->first('transformer_serial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_type') ? 'has-error' : ''}}">
    <label for="user_type" class="control-label">{{ 'ประเภทผู้ใช้ไฟฟ้า' }}</label>
    <input class="form-control" name="user_type" type="text" id="user_type" value="{{ isset($energyelectricitytransformer->user_type) ? $energyelectricitytransformer->user_type : ''}}" >
    {!! $errors->first('user_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('usage_rate') ? 'has-error' : ''}}">
    <label for="usage_rate" class="control-label">{{ 'อัตราการใช้ไฟฟ้า' }}</label>
    <select name="usage_rate" class="form-control" id="usage_rate" >
    @foreach (json_decode('{"\u0e1b\u0e01\u0e15\u0e34":"\u0e1b\u0e01\u0e15\u0e34","TOD":"TOD","TOU":"TOU"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyelectricitytransformer->usage_rate) && $energyelectricitytransformer->usage_rate == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('usage_rate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_size') ? 'has-error' : ''}}">
    <label for="transformer_size" class="control-label">{{ 'ขนาดหม้อแปลงไฟฟ้า' }}</label>
    <input class="form-control" name="transformer_size" type="number" id="transformer_size" value="{{ isset($energyelectricitytransformer->transformer_size) ? $energyelectricitytransformer->transformer_size : ''}}" >
    {!! $errors->first('transformer_size', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_quantity') ? 'has-error' : ''}}">
    <label for="transformer_quantity" class="control-label">{{ 'จำนวนหม้อแปลงไฟฟ้า' }}</label>
    <input class="form-control" name="transformer_quantity" type="number" id="transformer_quantity" value="{{ isset($energyelectricitytransformer->transformer_quantity) ? $energyelectricitytransformer->transformer_quantity : ''}}" >
    {!! $errors->first('transformer_quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyelectricitytransformer->user_id) ? $energyelectricitytransformer->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyelectricitytransformer->energy_report_id) ? $energyelectricitytransformer->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
