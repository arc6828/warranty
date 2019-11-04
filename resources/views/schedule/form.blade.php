<div class="form-group {{ $errors->has('menu') ? 'has-error' : ''}}">
    <label for="menu" class="control-label">{{ 'ปี' }}</label>
    <input class="form-control" name="menu" type="number" id="menu" value="{{ isset($schedule->menu) ? $schedule->menu : ''}}" >
    {!! $errors->first('menu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost_cons') ? 'has-error' : ''}}">
    <label for="cost_cons" class="control-label">{{ 'ค่าก่อสร้างหรือปรับปรุงอาคาร' }}</label>
    <input class="form-control" name="cost_cons" type="number" id="cost_cons" value="{{ isset($schedule->cost_cons) ? $schedule->cost_cons : ''}}" >
    {!! $errors->first('cost_cons', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost_tool') ? 'has-error' : ''}}">
    <label for="cost_tool" class="control-label">{{ 'ค่าเครื่องจักร/เครื่องมือ/อุปกรณ์' }}</label>
    <input class="form-control" name="cost_tool" type="number" id="cost_tool" value="{{ isset($schedule->cost_tool) ? $schedule->cost_tool : ''}}" >
    {!! $errors->first('cost_tool', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost_install') ? 'has-error' : ''}}">
    <label for="cost_install" class="control-label">{{ 'ค่าติดตั้งเครื่องจักร' }}</label>
    <input class="form-control" name="cost_install" type="number" id="cost_install" value="{{ isset($schedule->cost_install) ? $schedule->cost_install : ''}}" >
    {!! $errors->first('cost_install', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost_test') ? 'has-error' : ''}}">
    <label for="cost_test" class="control-label">{{ 'ค่าทดลองเครื่อง' }}</label>
    <input class="form-control" name="cost_test" type="number" id="cost_test" value="{{ isset($schedule->cost_test) ? $schedule->cost_test : ''}}" >
    {!! $errors->first('cost_test', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('investment') ? 'has-error' : ''}}">
    <label for="investment" class="control-label">{{ 'รวมเงินลงทุน' }}</label>
    <input class="form-control" name="investment" type="number" id="investment" value="{{ isset($schedule->investment) ? $schedule->investment : ''}}" >
    {!! $errors->first('investment', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
