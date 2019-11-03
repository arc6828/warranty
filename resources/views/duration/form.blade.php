<div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    <label for="duration" class="control-label">{{ 'ระยะเวลาดำเนินงาน(ตั้งแต่..........ถึง..........)' }}</label>
    <input class="form-control" name="duration" type="text" id="duration" value="{{ isset($duration->duration) ? $duration->duration : ''}}" >
    {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('order_m') ? 'has-error' : ''}}">
    <label for="order_m" class="control-label">{{ 'เริ่มสั่งซื้อเครื่องจักร(เดือน..........ปี..........)' }}</label>
    <input class="form-control" name="order_m" type="text" id="order_m" value="{{ isset($duration->order_m) ? $duration->order_m : ''}}" >
    {!! $errors->first('order_m', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('install_m') ? 'has-error' : ''}}">
    <label for="install_m" class="control-label">{{ 'เริ่มติดตั้งเครื่องจักร(เดือน..........ปี..........)' }}</label>
    <input class="form-control" name="install_m" type="text" id="install_m" value="{{ isset($duration->install_m) ? $duration->install_m : ''}}" >
    {!! $errors->first('install_m', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('generate') ? 'has-error' : ''}}">
    <label for="generate" class="control-label">{{ 'เริ่มผลิต(เดือน..........ปี..........)' }}</label>
    <input class="form-control" name="generate" type="text" id="generate" value="{{ isset($duration->generate) ? $duration->generate : ''}}" >
    {!! $errors->first('generate', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
