<div class="form-group {{ $errors->has('president') ? 'has-error' : ''}}">
    <label for="president" class="control-label">{{ 'ประธาน' }}</label>
    <input class="form-control" name="president" type="text" id="president" value="{{ isset($energycommittee->president) ? $energycommittee->president : ''}}" >
    {!! $errors->first('president', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('common_responsible_person') ? 'has-error' : ''}}">
    <label for="common_responsible_person" class="control-label">{{ 'ผู้รับผิดชอบสามัญ' }}</label>
    <input class="form-control" name="common_responsible_person" type="text" id="common_responsible_person" value="{{ isset($energycommittee->common_responsible_person) ? $energycommittee->common_responsible_person : ''}}" >
    {!! $errors->first('common_responsible_person', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('common_responsible_person_code') ? 'has-error' : ''}}">
    <label for="common_responsible_person_code" class="control-label">{{ 'ผู้รับผิดชอบสามัญ ทะเบียนเลขที่' }}</label>
    <input class="form-control" name="common_responsible_person_code" type="text" id="common_responsible_person_code" value="{{ isset($energycommittee->common_responsible_person_code) ? $energycommittee->common_responsible_person_code : ''}}" >
    {!! $errors->first('common_responsible_person_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('senior_responsible_person') ? 'has-error' : ''}}">
    <label for="senior_responsible_person" class="control-label">{{ 'ผู้รับผิดชอบอาวุโส' }}</label>
    <input class="form-control" name="senior_responsible_person" type="text" id="senior_responsible_person" value="{{ isset($energycommittee->senior_responsible_person) ? $energycommittee->senior_responsible_person : ''}}" >
    {!! $errors->first('senior_responsible_person', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('senior_responsible_person_code') ? 'has-error' : ''}}">
    <label for="senior_responsible_person_code" class="control-label">{{ 'ผู้รับผิดชอบอาวุโส ทะเบียนเลขที่' }}</label>
    <input class="form-control" name="senior_responsible_person_code" type="text" id="senior_responsible_person_code" value="{{ isset($energycommittee->senior_responsible_person_code) ? $energycommittee->senior_responsible_person_code : ''}}" >
    {!! $errors->first('senior_responsible_person_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_owner') ? 'has-error' : ''}}">
    <label for="factory_owner" class="control-label">{{ 'เจ้าของโรงงาน' }}</label>
    <input class="form-control" name="factory_owner" type="text" id="factory_owner" value="{{ isset($energycommittee->factory_owner) ? $energycommittee->factory_owner : ''}}" >
    {!! $errors->first('factory_owner', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energycommittee->user_id) ? $energycommittee->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energycommittee->energy_report_id) ? $energycommittee->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
