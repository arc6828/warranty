<div class="form-group {{ $errors->has('policy_score') ? 'has-error' : ''}}">
    <label for="policy_score" class="control-label">{{ 'คะแนนนโยบาย' }}</label>
    <input class="form-control" name="policy_score" type="number" id="policy_score" value="{{ isset($energyevaluation->policy_score) ? $energyevaluation->policy_score : ''}}" >
    {!! $errors->first('policy_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('organization_score') ? 'has-error' : ''}}">
    <label for="organization_score" class="control-label">{{ 'คะแนนนการจัดองค์กร' }}</label>
    <input class="form-control" name="organization_score" type="number" id="organization_score" value="{{ isset($energyevaluation->organization_score) ? $energyevaluation->organization_score : ''}}" >
    {!! $errors->first('organization_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('motivation_score') ? 'has-error' : ''}}">
    <label for="motivation_score" class="control-label">{{ 'คะแนนนการสร้างแรงจูงใจ' }}</label>
    <input class="form-control" name="motivation_score" type="number" id="motivation_score" value="{{ isset($energyevaluation->motivation_score) ? $energyevaluation->motivation_score : ''}}" >
    {!! $errors->first('motivation_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('information_score') ? 'has-error' : ''}}">
    <label for="information_score" class="control-label">{{ 'คะแนนนข้อมูลข่าวสาร' }}</label>
    <input class="form-control" name="information_score" type="number" id="information_score" value="{{ isset($energyevaluation->information_score) ? $energyevaluation->information_score : ''}}" >
    {!! $errors->first('information_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('public_relation_score') ? 'has-error' : ''}}">
    <label for="public_relation_score" class="control-label">{{ 'คะแนนนประชาสัมพันธ์' }}</label>
    <input class="form-control" name="public_relation_score" type="number" id="public_relation_score" value="{{ isset($energyevaluation->public_relation_score) ? $energyevaluation->public_relation_score : ''}}" >
    {!! $errors->first('public_relation_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('investment_score') ? 'has-error' : ''}}">
    <label for="investment_score" class="control-label">{{ 'คะแนนนการลงทุน' }}</label>
    <input class="form-control" name="investment_score" type="number" id="investment_score" value="{{ isset($energyevaluation->investment_score) ? $energyevaluation->investment_score : ''}}" >
    {!! $errors->first('investment_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <textarea class="form-control" rows="5" name="remark" type="textarea" id="remark" >{{ isset($energyevaluation->remark) ? $energyevaluation->remark : ''}}</textarea>
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyevaluation->user_id) ? $energyevaluation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyevaluation->energy_report_id) ? $energyevaluation->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
