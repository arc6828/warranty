<div class="form-group {{ $errors->has('organization_chart') ? 'has-error' : ''}}">
    <label for="organization_chart" class="control-label">{{ 'แผนภูมิองค์กร' }}</label>
    <input class="form-control" name="organization_chart" type="file" id="organization_chart" value="{{ isset($energyorganizationchart->organization_chart) ? $energyorganizationchart->organization_chart : ''}}" >
    {!! $errors->first('organization_chart', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('organization_chart_promotion') ? 'has-error' : ''}}">
    <label for="organization_chart_promotion" class="control-label">{{ 'การส่งเสริมแผนผังองค์กร' }}</label>
    <input class="form-control" name="organization_chart_promotion" type="file" id="organization_chart_promotion" value="{{ isset($energyorganizationchart->organization_chart_promotion) ? $energyorganizationchart->organization_chart_promotion : ''}}" >
    {!! $errors->first('organization_chart_promotion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('notice_number') ? 'has-error' : ''}}">
    <label for="notice_number" class="control-label">{{ 'จำนวน ติดประกาศ' }}</label>
    <input class="form-control" name="notice_number" type="text" id="notice_number" value="{{ isset($energyorganizationchart->notice_number) ? $energyorganizationchart->notice_number : ''}}" >
    {!! $errors->first('notice_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('notice') ? 'has-error' : ''}}">
    <label for="notice" class="control-label">{{ 'ติดประกาศ' }}</label>
    <input class="form-control" name="notice" type="file" id="notice" value="{{ isset($energyorganizationchart->notice) ? $energyorganizationchart->notice : ''}}" >
    {!! $errors->first('notice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('poster_number') ? 'has-error' : ''}}">
    <label for="poster_number" class="control-label">{{ 'จำนวน โปสเตอร์' }}</label>
    <input class="form-control" name="poster_number" type="file" id="poster_number" value="{{ isset($energyorganizationchart->poster_number) ? $energyorganizationchart->poster_number : ''}}" >
    {!! $errors->first('poster_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('publication_number') ? 'has-error' : ''}}">
    <label for="publication_number" class="control-label">{{ 'จำนวน เอกสารเผยแพร่' }}</label>
    <input class="form-control" name="publication_number" type="text" id="publication_number" value="{{ isset($energyorganizationchart->publication_number) ? $energyorganizationchart->publication_number : ''}}" >
    {!! $errors->first('publication_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('publication') ? 'has-error' : ''}}">
    <label for="publication" class="control-label">{{ 'เอกสารเผยแพร่' }}</label>
    <input class="form-control" name="publication" type="file" id="publication" value="{{ isset($energyorganizationchart->publication) ? $energyorganizationchart->publication : ''}}" >
    {!! $errors->first('publication', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('voice_number') ? 'has-error' : ''}}">
    <label for="voice_number" class="control-label">{{ 'จำนวน เสียงตามสาย' }}</label>
    <input class="form-control" name="voice_number" type="text" id="voice_number" value="{{ isset($energyorganizationchart->voice_number) ? $energyorganizationchart->voice_number : ''}}" >
    {!! $errors->first('voice_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('voice') ? 'has-error' : ''}}">
    <label for="voice" class="control-label">{{ 'เสียงตามสาย' }}</label>
    <input class="form-control" name="voice" type="file" id="voice" value="{{ isset($energyorganizationchart->voice) ? $energyorganizationchart->voice : ''}}" >
    {!! $errors->first('voice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email_number') ? 'has-error' : ''}}">
    <label for="email_number" class="control-label">{{ 'จำนวน อีเมล' }}</label>
    <input class="form-control" name="email_number" type="text" id="email_number" value="{{ isset($energyorganizationchart->email_number) ? $energyorganizationchart->email_number : ''}}" >
    {!! $errors->first('email_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมล' }}</label>
    <input class="form-control" name="email" type="file" id="email" value="{{ isset($energyorganizationchart->email) ? $energyorganizationchart->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meeting_number') ? 'has-error' : ''}}">
    <label for="meeting_number" class="control-label">{{ 'จำนวน การประชุม' }}</label>
    <input class="form-control" name="meeting_number" type="text" id="meeting_number" value="{{ isset($energyorganizationchart->meeting_number) ? $energyorganizationchart->meeting_number : ''}}" >
    {!! $errors->first('meeting_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('meeting') ? 'has-error' : ''}}">
    <label for="meeting" class="control-label">{{ 'การประชุม' }}</label>
    <input class="form-control" name="meeting" type="file" id="meeting" value="{{ isset($energyorganizationchart->meeting) ? $energyorganizationchart->meeting : ''}}" >
    {!! $errors->first('meeting', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('others_number') ? 'has-error' : ''}}">
    <label for="others_number" class="control-label">{{ 'อื่นๆ จำนวน' }}</label>
    <input class="form-control" name="others_number" type="text" id="others_number" value="{{ isset($energyorganizationchart->others_number) ? $energyorganizationchart->others_number : ''}}" >
    {!! $errors->first('others_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('others') ? 'has-error' : ''}}">
    <label for="others" class="control-label">{{ 'อื่นๆ' }}</label>
    <input class="form-control" name="others" type="file" id="others" value="{{ isset($energyorganizationchart->others) ? $energyorganizationchart->others : ''}}" >
    {!! $errors->first('others', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($energyorganizationchart->user_id) ? $energyorganizationchart->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  d-none {{ $errors->has('energy_report_id') ? 'has-error' : ''}}">
    <label for="energy_report_id" class="control-label">{{ 'Enery Report Id' }}</label>
    <input class="form-control" name="energy_report_id" type="number" id="energy_report_id" value="{{ isset($energyorganizationchart->energy_report_id) ? $energyorganizationchart->energy_report_id : ''}}" >
    {!! $errors->first('energy_report_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
