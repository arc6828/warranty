<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($energyusage->title) ? $energyusage->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($energyusage->content) ? $energyusage->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('place_type') ? 'has-error' : ''}}">
    <label for="place_type" class="control-label">{{ 'Place Type' }}</label>
    <select name="place_type" class="form-control" id="place_type" required>
    @foreach (json_decode('{"factory":"Factory","office":"Office"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyusage->place_type) && $energyusage->place_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('place_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" required>
    @foreach (json_decode('{"electricity":"Electricity","heat":"Heat"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($energyusage->category) && $energyusage->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_begin') ? 'has-error' : ''}}">
    <label for="date_begin" class="control-label">{{ 'Date Begin' }}</label>
    <input class="form-control" name="date_begin" type="date" id="date_begin" value="{{ isset($energyusage->date_begin) ? $energyusage->date_begin : date("Y-m-d", strtotime("2019-01-01")) }}"  required >
    {!! $errors->first('date_begin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_end') ? 'has-error' : ''}}">
    <label for="date_end" class="control-label">{{ 'Date End' }}</label>
    <input class="form-control" name="date_end" type="date" id="date_end" value="{{ isset($energyusage->date_end) ? $energyusage->date_end : date("Y-m-d", strtotime("2019-12-31")) }}"  required>
    {!! $errors->first('date_end', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($energyusage->quantity) ? $energyusage->quantity : '0'}}" required>
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('watts') ? 'has-error' : ''}}">
    <label for="watts" class="control-label">{{ 'Watts' }}</label>
    <input class="form-control" name="watts" type="number" step="any" id="watts" value="{{ isset($energyusage->watts) ? $energyusage->watts : '0'}}"
    onkeyup="document.querySelector('#joules').value = this.value * 3600;"
    onchange="document.querySelector('#joules').value = this.value * 3600;"
    required>
    {!! $errors->first('watts', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('joules') ? 'has-error' : ''}}">
    <label for="joules" class="control-label">{{ 'Joules' }}</label>
    <input class="form-control" name="joules" type="number" id="joules" value="{{ isset($energyusage->joules) ? $energyusage->joules : '0'}}"
    onkeyup="document.querySelector('#watts').value = this.value / 3600;"
    onchange="document.querySelector('#watts').value = this.value / 3600;"
    required>
    {!! $errors->first('joules', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hours_per_day') ? 'has-error' : ''}}">
    <label for="hours_per_day" class="control-label">{{ 'Hours Per Day' }}</label>
    <input class="form-control" name="hours_per_day" type="number" id="hours_per_day" value="{{ isset($energyusage->hours_per_day) ? $energyusage->hours_per_day : '8'}}" >
    {!! $errors->first('hours_per_day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_per_week') ? 'has-error' : ''}}">
    <label for="day_per_week" class="control-label">{{ 'Day Per Week' }}</label>
    <input class="form-control" name="day_per_week" type="number" id="day_per_week" value="{{ isset($energyusage->day_per_week) ? $energyusage->day_per_week : '5'}}" >
    {!! $errors->first('day_per_week', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_name" type="text" id="user_name" value="{{ isset($energyusage->user->name) ? $energyusage->user->name : Auth::user()->name }}" disabled>
    <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ isset($energyusage->user_id) ? $energyusage->user_id : Auth::id() }}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($energyusage->photo) ? $energyusage->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
