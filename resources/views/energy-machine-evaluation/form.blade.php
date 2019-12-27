<div class="form-group {{ $errors->has('power_consumption_size') ? 'has-error' : ''}}">
    <label for="power_consumption_size" class="control-label">{{ 'ขนาดการใช้พลังงาน' }}</label>
    <input class="form-control" name="power_consumption_size" type="number" id="power_consumption_size" value="{{ isset($energymachineevaluation->power_consumption_size) ? $energymachineevaluation->power_consumption_size : ''}}" >
    {!! $errors->first('power_consumption_size', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('operating_hours') ? 'has-error' : ''}}">
    <label for="operating_hours" class="control-label">{{ 'ชั่วโมงการใช้งาน' }}</label>
    <input class="form-control" name="operating_hours" type="number" id="operating_hours" value="{{ isset($energymachineevaluation->operating_hours) ? $energymachineevaluation->operating_hours : ''}}" >
    {!! $errors->first('operating_hours', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('improvement_potential') ? 'has-error' : ''}}">
    <label for="improvement_potential" class="control-label">{{ 'ศักยภาพในการปรับปรุง' }}</label>
    <input class="form-control" name="improvement_potential" type="number" id="improvement_potential" value="{{ isset($energymachineevaluation->improvement_potential) ? $energymachineevaluation->improvement_potential : ''}}" >
    {!! $errors->first('improvement_potential', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_score') ? 'has-error' : ''}}">
    <label for="total_score" class="control-label">{{ 'คะแนนรวม' }}</label>
    <input class="form-control" name="total_score" type="number" id="total_score" value="{{ isset($energymachineevaluation->total_score) ? $energymachineevaluation->total_score : ''}}" >
    {!! $errors->first('total_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('priority') ? 'has-error' : ''}}">
    <label for="priority" class="control-label">{{ 'ลำดับความสำคัญ' }}</label>
    <input class="form-control" name="priority" type="number" id="priority" value="{{ isset($energymachineevaluation->priority) ? $energymachineevaluation->priority : ''}}" >
    {!! $errors->first('priority', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('department') ? 'has-error' : ''}}">
    <label for="department" class="control-label">{{ 'ประเภทพลังงาน' }}</label>
    <input class="form-control" name="department" type="text" id="department" value="{{ isset($energymachineevaluation->department) ? $energymachineevaluation->department : ''}}" >
    {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_machine_id') ? 'has-error' : ''}}">
    <label for="energy_machine_id" class="control-label">{{ 'Energy Machine Id' }}</label>
    <input class="form-control" name="energy_machine_id" type="number" id="energy_machine_id" value="{{ isset($energymachineevaluation->energy_machine_id) ? $energymachineevaluation->energy_machine_id : ''}}" readonly >
    {!! $errors->first('energy_machine_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energymachineevaluation->user_id) ? $energymachineevaluation->user_id : ''}}" readonly  >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($energymachineevaluation->enery_report_id) ? $energymachineevaluation->enery_report_id : ''}}"readonly  >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
