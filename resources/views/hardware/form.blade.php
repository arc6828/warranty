<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($hardware->title) ? $hardware->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($hardware->content) ? $hardware->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('place_type') ? 'has-error' : ''}}">
    <label for="place_type" class="control-label">{{ 'Place Type' }}</label>
    <select name="place_type" class="form-control" id="place_type" >
    @foreach (json_decode('{"factory":"Factory","office":"Office"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($hardware->place_type) && $hardware->place_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('place_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"heat":"Heat","electricity":"Electricity"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($hardware->category) && $hardware->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_begin') ? 'has-error' : ''}}">
    <label for="date_begin" class="control-label">{{ 'Date Begin' }}</label>
    <input class="form-control" name="date_begin" type="date" id="date_begin" value="{{ isset($hardware->date_begin) ? $hardware->date_begin : ''}}" >
    {!! $errors->first('date_begin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_end') ? 'has-error' : ''}}">
    <label for="date_end" class="control-label">{{ 'Date End' }}</label>
    <input class="form-control" name="date_end" type="date" id="date_end" value="{{ isset($hardware->date_end) ? $hardware->date_end : ''}}" >
    {!! $errors->first('date_end', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($hardware->quantity) ? $hardware->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('watts') ? 'has-error' : ''}}">
    <label for="watts" class="control-label">{{ 'Watts' }}</label>
    <input class="form-control" name="watts" type="number" id="watts" value="{{ isset($hardware->watts) ? $hardware->watts : ''}}" >
    {!! $errors->first('watts', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('joules') ? 'has-error' : ''}}">
    <label for="joules" class="control-label">{{ 'Joules' }}</label>
    <input class="form-control" name="joules" type="number" id="joules" value="{{ isset($hardware->joules) ? $hardware->joules : ''}}" >
    {!! $errors->first('joules', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hours_per_day') ? 'has-error' : ''}}">
    <label for="hours_per_day" class="control-label">{{ 'Hours Per Day' }}</label>
    <input class="form-control" name="hours_per_day" type="number" id="hours_per_day" value="{{ isset($hardware->hours_per_day) ? $hardware->hours_per_day : ''}}" >
    {!! $errors->first('hours_per_day', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('day_per_week') ? 'has-error' : ''}}">
    <label for="day_per_week" class="control-label">{{ 'Day Per Week' }}</label>
    <input class="form-control" name="day_per_week" type="number" id="day_per_week" value="{{ isset($hardware->day_per_week) ? $hardware->day_per_week : ''}}" >
    {!! $errors->first('day_per_week', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($hardware->user_id) ? $hardware->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($hardware->photo) ? $hardware->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
