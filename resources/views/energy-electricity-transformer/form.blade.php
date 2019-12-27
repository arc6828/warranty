<div class="form-group {{ $errors->has('user_serial') ? 'has-error' : ''}}">
    <label for="user_serial" class="control-label">{{ 'User Serial' }}</label>
    <input class="form-control" name="user_serial" type="text" id="user_serial" value="{{ isset($energyelectricitytransformer->user_serial) ? $energyelectricitytransformer->user_serial : ''}}" >
    {!! $errors->first('user_serial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_serial') ? 'has-error' : ''}}">
    <label for="transformer_serial" class="control-label">{{ 'Transformer Serial' }}</label>
    <input class="form-control" name="transformer_serial" type="text" id="transformer_serial" value="{{ isset($energyelectricitytransformer->transformer_serial) ? $energyelectricitytransformer->transformer_serial : ''}}" >
    {!! $errors->first('transformer_serial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_type') ? 'has-error' : ''}}">
    <label for="user_type" class="control-label">{{ 'User Type' }}</label>
    <input class="form-control" name="user_type" type="text" id="user_type" value="{{ isset($energyelectricitytransformer->user_type) ? $energyelectricitytransformer->user_type : ''}}" >
    {!! $errors->first('user_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('usage_rate') ? 'has-error' : ''}}">
    <label for="usage_rate" class="control-label">{{ 'Usage Rate' }}</label>
    <select name="usage_rate" class="form-control" id="usage_rate" >
    @foreach (json_decode('{"\u0e1b\u0e01\u0e15\u0e34":"\u0e1b\u0e01\u0e15\u0e34","TOD":"TOD","TOU":"TOU"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyelectricitytransformer->usage_rate) && $energyelectricitytransformer->usage_rate == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('usage_rate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_size') ? 'has-error' : ''}}">
    <label for="transformer_size" class="control-label">{{ 'Transformer Size' }}</label>
    <input class="form-control" name="transformer_size" type="number" id="transformer_size" value="{{ isset($energyelectricitytransformer->transformer_size) ? $energyelectricitytransformer->transformer_size : ''}}" >
    {!! $errors->first('transformer_size', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transformer_quantity') ? 'has-error' : ''}}">
    <label for="transformer_quantity" class="control-label">{{ 'Transformer Quantity' }}</label>
    <input class="form-control" name="transformer_quantity" type="number" id="transformer_quantity" value="{{ isset($energyelectricitytransformer->transformer_quantity) ? $energyelectricitytransformer->transformer_quantity : ''}}" >
    {!! $errors->first('transformer_quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyelectricitytransformer->user_id) ? $energyelectricitytransformer->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyelectricitytransformer->enery_report_id) ? $energyelectricitytransformer->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
