<div class="form-group {{ $errors->has('factory_size') ? 'has-error' : ''}}">
    <label for="factory_size" class="control-label">{{ 'กลุ่มโรงงาน' }}</label>
    <select name="factory_size" class="form-control" id="factory_size" >
    @foreach (json_decode('{"group-small":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e17\u0e35\u0e48 1 \u0e02\u0e19\u0e32\u0e14\u0e40\u0e25\u0e47\u0e01","group-large":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e17\u0e35\u0e48 2 \u0e02\u0e19\u0e32\u0e14\u0e43\u0e2b\u0e0d\u0e48"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyfactoryinformation->factory_size) && $energyfactoryinformation->factory_size == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('factory_size', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_address') ? 'has-error' : ''}}">
    <label for="factory_address" class="control-label">{{ 'ที่อยู่โรงงาน' }}</label>
    <textarea class="form-control" rows="5" name="factory_address" type="textarea" id="factory_address" >{{ isset($energyfactoryinformation->factory_address) ? $energyfactoryinformation->factory_address : ''}}</textarea>
    {!! $errors->first('factory_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_tel') ? 'has-error' : ''}}">
    <label for="factory_tel" class="control-label">{{ 'โทรศัพท์' }}</label>
    <input class="form-control" name="factory_tel" type="text" id="factory_tel" value="{{ isset($energyfactoryinformation->factory_tel) ? $energyfactoryinformation->factory_tel : ''}}" >
    {!! $errors->first('factory_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_fax') ? 'has-error' : ''}}">
    <label for="factory_fax" class="control-label">{{ 'โทรสาร' }}</label>
    <input class="form-control" name="factory_fax" type="text" id="factory_fax" value="{{ isset($energyfactoryinformation->factory_fax) ? $energyfactoryinformation->factory_fax : ''}}" >
    {!! $errors->first('factory_fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_email') ? 'has-error' : ''}}">
    <label for="factory_email" class="control-label">{{ 'อีเมล' }}</label>
    <input class="form-control" name="factory_email" type="text" id="factory_email" value="{{ isset($energyfactoryinformation->factory_email) ? $energyfactoryinformation->factory_email : ''}}" >
    {!! $errors->first('factory_email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('office_address') ? 'has-error' : ''}}">
    <label for="office_address" class="control-label">{{ 'ที่อยู่สำนักงาน' }}</label>
    <textarea class="form-control" rows="5" name="office_address" type="textarea" id="office_address" >{{ isset($energyfactoryinformation->office_address) ? $energyfactoryinformation->office_address : ''}}</textarea>
    {!! $errors->first('office_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('office_tel') ? 'has-error' : ''}}">
    <label for="office_tel" class="control-label">{{ 'โทรศัพท์' }}</label>
    <input class="form-control" name="office_tel" type="text" id="office_tel" value="{{ isset($energyfactoryinformation->office_tel) ? $energyfactoryinformation->office_tel : ''}}" >
    {!! $errors->first('office_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('office_fax') ? 'has-error' : ''}}">
    <label for="office_fax" class="control-label">{{ 'โทรสาร' }}</label>
    <input class="form-control" name="office_fax" type="text" id="office_fax" value="{{ isset($energyfactoryinformation->office_fax) ? $energyfactoryinformation->office_fax : ''}}" >
    {!! $errors->first('office_fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('office_email') ? 'has-error' : ''}}">
    <label for="office_email" class="control-label">{{ 'อีเมล' }}</label>
    <input class="form-control" name="office_email" type="text" id="office_email" value="{{ isset($energyfactoryinformation->office_email) ? $energyfactoryinformation->office_email : ''}}" >
    {!! $errors->first('office_email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_type') ? 'has-error' : ''}}">
    <label for="factory_type" class="control-label">{{ 'ประเภทอุตสาหกรรม' }}</label>
    <select name="factory_type" class="form-control" id="factory_type" >
    @foreach (json_decode('{"\u0e2b\u0e34\u0e19 \u0e01\u0e23\u0e27\u0e14 \u0e14\u0e34\u0e19 \u0e17\u0e23\u0e32\u0e22":"\u0e2b\u0e34\u0e19 \u0e01\u0e23\u0e27\u0e14 \u0e14\u0e34\u0e19 \u0e17\u0e23\u0e32\u0e22","\u0e2d\u0e32\u0e2b\u0e32\u0e23 \u0e40\u0e04\u0e23\u0e37\u0e48\u0e2d\u0e07\u0e14\u0e37\u0e48\u0e21\u0e41\u0e25\u0e30\u0e22\u0e32\u0e2a\u0e39\u0e1a":"\u0e2d\u0e32\u0e2b\u0e32\u0e23 \u0e40\u0e04\u0e23\u0e37\u0e48\u0e2d\u0e07\u0e14\u0e37\u0e48\u0e21\u0e41\u0e25\u0e30\u0e22\u0e32\u0e2a\u0e39\u0e1a","\u0e2a\u0e34\u0e48\u0e07\u0e17\u0e2d":"\u0e2a\u0e34\u0e48\u0e07\u0e17\u0e2d","\u0e44\u0e21\u0e49":"\u0e44\u0e21\u0e49","\u0e01\u0e23\u0e30\u0e14\u0e32\u0e29":"\u0e01\u0e23\u0e30\u0e14\u0e32\u0e29","\u0e40\u0e04\u0e21\u0e35":"\u0e40\u0e04\u0e21\u0e35","\u0e2d\u0e42\u0e25\u0e2b\u0e30":"\u0e2d\u0e42\u0e25\u0e2b\u0e30","\u0e42\u0e25\u0e2b\u0e30":"\u0e42\u0e25\u0e2b\u0e30","\u0e1c\u0e25\u0e34\u0e15\u0e20\u0e31\u0e13\u0e11\u0e4c\u0e08\u0e32\u0e01\u0e42\u0e25\u0e2b\u0e30":"\u0e1c\u0e25\u0e34\u0e15\u0e20\u0e31\u0e13\u0e11\u0e4c\u0e08\u0e32\u0e01\u0e42\u0e25\u0e2b\u0e30","\u0e01\u0e32\u0e23\u0e1c\u0e25\u0e34\u0e15\u0e2d\u0e37\u0e48\u0e19\u0e46":"\u0e01\u0e32\u0e23\u0e1c\u0e25\u0e34\u0e15\u0e2d\u0e37\u0e48\u0e19\u0e46","\u0e01\u0e32\u0e23\u0e44\u0e1f\u0e1f\u0e49\u0e32\u0e41\u0e25\u0e30\u0e01\u0e4a\u0e32\u0e0b":"\u0e01\u0e32\u0e23\u0e44\u0e1f\u0e1f\u0e49\u0e32\u0e41\u0e25\u0e30\u0e01\u0e4a\u0e32\u0e0b","\u0e01\u0e32\u0e23\u0e1b\u0e23\u0e30\u0e1b\u0e32":"\u0e01\u0e32\u0e23\u0e1b\u0e23\u0e30\u0e1b\u0e32"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyfactoryinformation->factory_type) && $energyfactoryinformation->factory_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('factory_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_employee') ? 'has-error' : ''}}">
    <label for="factory_employee" class="control-label">{{ 'พนักงงานโรงงาน' }}</label>
    <textarea class="form-control" rows="5" name="factory_employee" type="textarea" id="factory_employee" >{{ isset($energyfactoryinformation->factory_employee) ? $energyfactoryinformation->factory_employee : ''}}</textarea>
    {!! $errors->first('factory_employee', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_operation_time') ? 'has-error' : ''}}">
    <label for="factory_operation_time" class="control-label">{{ 'เวลาดำเนินการ' }}</label>
    <textarea class="form-control" rows="5" name="factory_operation_time" type="textarea" id="factory_operation_time" >{{ isset($energyfactoryinformation->factory_operation_time) ? $energyfactoryinformation->factory_operation_time : ''}}</textarea>
    {!! $errors->first('factory_operation_time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyfactoryinformation->user_id) ? $energyfactoryinformation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  d-none {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyfactoryinformation->energy_report_id) ? $energyfactoryinformation->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
