<div class="form-group {{ $errors->has('photo_diagram') ? 'has-error' : ''}}">
    <label for="photo_diagram" class="control-label">{{ 'Photo Diagram' }}</label>
    <input class="form-control" name="photo_diagram" type="file" id="photo_diagram" value="{{ isset($energyproductiondiagram->photo_diagram) ? $energyproductiondiagram->photo_diagram : ''}}" >
    {!! $errors->first('photo_diagram', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($energyproductiondiagram->description) ? $energyproductiondiagram->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_production_id') ? 'has-error' : ''}}">
    <label for="energy_production_id" class="control-label">{{ 'Energy Production Id' }}</label>
    <input class="form-control" name="energy_production_id" type="number" id="energy_production_id" value="{{ isset($energyproductiondiagram->energy_production_id) ? $energyproductiondiagram->energy_production_id : ''}}" >
    {!! $errors->first('energy_production_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyproductiondiagram->user_id) ? $energyproductiondiagram->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energyproductiondiagram->enery_report_id) ? $energyproductiondiagram->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
