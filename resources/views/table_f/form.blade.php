<div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'ประเทศ' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="{{ isset($table_f->country) ? $table_f->country : ''}}" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
    <label for="number" class="control-label">{{ 'จำนวน' }}</label>
    <input class="form-control" name="number" type="number" id="number" value="{{ isset($table_f->number) ? $table_f->number : ''}}" >
    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'มูลค่า (บาท)' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($table_f->cost) ? $table_f->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('connect') ? 'has-error' : ''}}">
    <label for="connect" class="control-label">{{ 'การเชื่อมโยงกับอุตสาหกรรมฯในประเทศ (กรุณากาใส่ข้อความว่า"มี"หรือ"ไม่มี") ' }}</label>
    <input class="form-control" name="connect" type="text" id="connect" value="{{ isset($table_f->connect) ? $table_f->connect : ''}}" >
    {!! $errors->first('connect', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('wage_company') ? 'has-error' : ''}}">
    <label for="wage_company" class="control-label">{{ 'ค่าจ้างออกแบบทางวิศวกรรมจากต่างประเทศจากบริษัท' }}</label>
    <input class="form-control" name="wage_company" type="text" id="wage_company" value="{{ isset($table_f->wage_company) ? $table_f->wage_company : ''}}" >
    {!! $errors->first('wage_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('machinery_Imported') ? 'has-error' : ''}}">
    <label for="machinery_Imported" class="control-label">{{ 'เครื่องจักรหรือชิ้นส่วนใหม่ที่นำเข้าจากต่างประเทศ' }}</label>
    <input class="form-control" name="machinery_Imported" type="text" id="machinery_Imported" value="{{ isset($table_f->machinery_Imported) ? $table_f->machinery_Imported : ''}}" >
    {!! $errors->first('machinery_Imported', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('other') ? 'has-error' : ''}}">
    <label for="other" class="control-label">{{ 'ค่าใช้จ่ายอื่นๆ (เช่น ค่าติดตั้ง ค่าทดลองเครื่อง เป็นต้น)' }}</label>
    <input class="form-control" name="other" type="text" id="other" value="{{ isset($table_f->other) ? $table_f->other : ''}}" >
    {!! $errors->first('other', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'รวมมูลค่ากลุ่ม 1' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($table_f->total) ? $table_f->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
