<div class="form-group {{ $errors->has('president') ? 'has-error' : ''}}">
    <label for="president" class="control-label">{{ 'President' }}</label>
    <input class="form-control" name="president" type="text" id="president" value="{{ isset($enerycommittee->president) ? $enerycommittee->president : ''}}" >
    {!! $errors->first('president', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('common_responsible_person') ? 'has-error' : ''}}">
    <label for="common_responsible_person" class="control-label">{{ 'Common Responsible Person' }}</label>
    <input class="form-control" name="common_responsible_person" type="text" id="common_responsible_person" value="{{ isset($enerycommittee->common_responsible_person) ? $enerycommittee->common_responsible_person : ''}}" >
    {!! $errors->first('common_responsible_person', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('common_responsible_person_code') ? 'has-error' : ''}}">
    <label for="common_responsible_person_code" class="control-label">{{ 'Common Responsible Person Code' }}</label>
    <input class="form-control" name="common_responsible_person_code" type="text" id="common_responsible_person_code" value="{{ isset($enerycommittee->common_responsible_person_code) ? $enerycommittee->common_responsible_person_code : ''}}" >
    {!! $errors->first('common_responsible_person_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('senior_responsible_person') ? 'has-error' : ''}}">
    <label for="senior_responsible_person" class="control-label">{{ 'Senior Responsible Person' }}</label>
    <input class="form-control" name="senior_responsible_person" type="text" id="senior_responsible_person" value="{{ isset($enerycommittee->senior_responsible_person) ? $enerycommittee->senior_responsible_person : ''}}" >
    {!! $errors->first('senior_responsible_person', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('senior_responsible_person_code') ? 'has-error' : ''}}">
    <label for="senior_responsible_person_code" class="control-label">{{ 'Senior Responsible Person Code' }}</label>
    <input class="form-control" name="senior_responsible_person_code" type="text" id="senior_responsible_person_code" value="{{ isset($enerycommittee->senior_responsible_person_code) ? $enerycommittee->senior_responsible_person_code : ''}}" >
    {!! $errors->first('senior_responsible_person_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('factory_owner') ? 'has-error' : ''}}">
    <label for="factory_owner" class="control-label">{{ 'Factory Owner' }}</label>
    <input class="form-control" name="factory_owner" type="text" id="factory_owner" value="{{ isset($enerycommittee->factory_owner) ? $enerycommittee->factory_owner : ''}}" >
    {!! $errors->first('factory_owner', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($enerycommittee->user_id) ? $enerycommittee->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enery_report_id') ? 'has-error' : ''}}">
    <label for="enery_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="enery_report_id" type="number" id="enery_report_id" value="{{ isset($enerycommittee->enery_report_id) ? $enerycommittee->enery_report_id : ''}}" >
    {!! $errors->first('enery_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
