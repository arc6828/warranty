<div class="form-group {{ $errors->has('peetharn') ? 'has-error' : ''}}">
    <label for="peetharn" class="control-label">{{ 'ปีฐาน' }}</label>
    <input class="form-control" name="peetharn" type="number" id="peetharn" value="{{ isset($table_c->peetharn) ? $table_c->peetharn : ''}}" >
    {!! $errors->first('peetharn', '<p class="help-block">:message</p>') !!}
</div> 
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'ต้นทุนทางตรงต่อหน่วยการผลิต/การบริการ' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($table_c->cost) ? $table_c->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('yield') ? 'has-error' : ''}}">
    <label for="yield" class="control-label">{{ 'อัตราการได้มา(Yield)' }}</label>
    <input class="form-control" name="yield" type="number" id="yield" value="{{ isset($table_c->yield) ? $table_c->yield : ''}}" >
    {!! $errors->first('yield', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'ตัวชี้วัดผลผลิตภาพแรงงานเชิงมูลค่าเพิ่ม(Amount of Processing per Employee)' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($table_c->amount) ? $table_c->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('efficiency') ? 'has-error' : ''}}">
    <label for="efficiency" class="control-label">{{ 'ตัวชี้วัดประสิทธิภาพการลงทุนในเครื่องจักรและอุปกรณ์(Efficiency of Machinery Investment Ratio)' }}</label>
    <input class="form-control" name="efficiency" type="number" id="efficiency" value="{{ isset($table_c->efficiency) ? $table_c->efficiency : ''}}" >
    {!! $errors->first('efficiency', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('overall') ? 'has-error' : ''}}">
    <label for="overall" class="control-label">{{ 'ตัวชี้วัดประสิทธิผลโดยรวมของเครื่องจัก(Overall Equipment Effectiveness (OEE))' }}</label>
    <input class="form-control" name="overall" type="number" id="overall" value="{{ isset($table_c->overall) ? $table_c->overall : ''}}" >
    {!! $errors->first('overall', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('equipment') ? 'has-error' : ''}}">
    <label for="equipment" class="control-label">{{ 'ตัวชี้วัดอัตราการใช้เครื่องจักร(Equipment Operating Ratio(EOR))' }}</label>
    <input class="form-control" name="equipment" type="number" id="equipment" value="{{ isset($table_c->equipment) ? $table_c->equipment : ''}}" >
    {!! $errors->first('equipment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mean') ? 'has-error' : ''}}">
    <label for="mean" class="control-label">{{ 'ตัวชี้วัดการประเมินอายุการใช้งานของชิ้นส่วน,อุปกรณ์และเครื่องจักร(Mean Time between Failures(MTBF))' }}</label>
    <input class="form-control" name="mean" type="number" id="mean" value="{{ isset($table_c->mean) ? $table_c->mean : ''}}" >
    {!! $errors->first('mean', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('actual') ? 'has-error' : ''}}">
    <label for="actual" class="control-label">{{ 'ตัวชี้วัดประสิทธิภาพของการผลิตได้จริงเปรียบเทียบกับความสามารถในการผลิตที่ควรทำได้(Actual Production Rate as a Percentage of the Maximum Capable Production Rate)' }}</label>
    <input class="form-control" name="actual" type="number" id="actual" value="{{ isset($table_c->actual) ? $table_c->actual : ''}}" >
    {!! $errors->first('actual', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
