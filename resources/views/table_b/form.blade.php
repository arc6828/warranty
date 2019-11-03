<div class="form-group {{ $errors->has('base_year') ? 'has-error' : ''}}">
    <label for="base_year" class="control-label">{{ 'Base Year' }}</label>
    <input class="form-control" name="base_year" type="number" id="base_year" value="{{ isset($table_b->base_year) ? $table_b->base_year : ''}}" >
    {!! $errors->first('base_year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('products_baseyear') ? 'has-error' : ''}}">
    <label for="products_baseyear" class="control-label">{{ 'Products Baseyear' }}</label>
    <textarea class="form-control" rows="5" name="products_baseyear" type="textarea" id="products_baseyear" >{{ isset($table_b->products_baseyear) ? $table_b->products_baseyear : ''}}</textarea>
    {!! $errors->first('products_baseyear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacity_baseyear') ? 'has-error' : ''}}">
    <label for="capacity_baseyear" class="control-label">{{ 'Capacity Baseyear' }}</label>
    <textarea class="form-control" rows="5" name="capacity_baseyear" type="textarea" id="capacity_baseyear" >{{ isset($table_b->capacity_baseyear) ? $table_b->capacity_baseyear : ''}}</textarea>
    {!! $errors->first('capacity_baseyear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('working_Hourday_byear') ? 'has-error' : ''}}">
    <label for="working_Hourday_byear" class="control-label">{{ 'Working Hourday Byear' }}</label>
    <input class="form-control" name="working_Hourday_byear" type="number" id="working_Hourday_byear" value="{{ isset($table_b->working_Hourday_byear) ? $table_b->working_Hourday_byear : ''}}" >
    {!! $errors->first('working_Hourday_byear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('working_dayyear_byear') ? 'has-error' : ''}}">
    <label for="working_dayyear_byear" class="control-label">{{ 'Working Dayyear Byear' }}</label>
    <input class="form-control" name="working_dayyear_byear" type="number" id="working_dayyear_byear" value="{{ isset($table_b->working_dayyear_byear) ? $table_b->working_dayyear_byear : ''}}" >
    {!! $errors->first('working_dayyear_byear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_year') ? 'has-error' : ''}}">
    <label for="evaluation_year" class="control-label">{{ 'Evaluation Year' }}</label>
    <input class="form-control" name="evaluation_year" type="number" id="evaluation_year" value="{{ isset($table_b->evaluation_year) ? $table_b->evaluation_year : ''}}" >
    {!! $errors->first('evaluation_year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('products_eyear') ? 'has-error' : ''}}">
    <label for="products_eyear" class="control-label">{{ 'Products Eyear' }}</label>
    <textarea class="form-control" rows="5" name="products_eyear" type="textarea" id="products_eyear" >{{ isset($table_b->products_eyear) ? $table_b->products_eyear : ''}}</textarea>
    {!! $errors->first('products_eyear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacity_eyear') ? 'has-error' : ''}}">
    <label for="capacity_eyear" class="control-label">{{ 'Capacity Eyear' }}</label>
    <textarea class="form-control" rows="5" name="capacity_eyear" type="textarea" id="capacity_eyear" >{{ isset($table_b->capacity_eyear) ? $table_b->capacity_eyear : ''}}</textarea>
    {!! $errors->first('capacity_eyear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('working_Hourday_eyear') ? 'has-error' : ''}}">
    <label for="working_Hourday_eyear" class="control-label">{{ 'Working Hourday Eyear' }}</label>
    <input class="form-control" name="working_Hourday_eyear" type="number" id="working_Hourday_eyear" value="{{ isset($table_b->working_Hourday_eyear) ? $table_b->working_Hourday_eyear : ''}}" >
    {!! $errors->first('working_Hourday_eyear', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('working_dayyear_eyear') ? 'has-error' : ''}}">
    <label for="working_dayyear_eyear" class="control-label">{{ 'Working Dayyear Eyear' }}</label>
    <input class="form-control" name="working_dayyear_eyear" type="number" id="working_dayyear_eyear" value="{{ isset($table_b->working_dayyear_eyear) ? $table_b->working_dayyear_eyear : ''}}" >
    {!! $errors->first('working_dayyear_eyear', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
