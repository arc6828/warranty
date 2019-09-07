<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($hardware->name) ? $hardware->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($hardware->detail) ? $hardware->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
    <label for="tags" class="control-label">{{ 'Tags' }}</label>
    <input class="form-control" name="tags" type="text" id="tags" value="{{ isset($hardware->tags) ? $hardware->tags : ''}}" >
    {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_purchase') ? 'has-error' : ''}}">
    <label for="date_purchase" class="control-label">{{ 'Date Purchase' }}</label>
    <input class="form-control" name="date_purchase" type="date" id="date_purchase" value="{{ isset($hardware->date_purchase) ? $hardware->date_purchase : ''}}" >
    {!! $errors->first('date_purchase', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_warranty_expire') ? 'has-error' : ''}}">
    <label for="date_warranty_expire" class="control-label">{{ 'Date Warranty Expire' }}</label>
    <input class="form-control" name="date_warranty_expire" type="date" id="date_warranty_expire" value="{{ isset($hardware->date_warranty_expire) ? $hardware->date_warranty_expire : ''}}" >
    {!! $errors->first('date_warranty_expire', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('warranty_duration') ? 'has-error' : ''}}">
    <label for="warranty_duration" class="control-label">{{ 'Warranty Duration (days)' }}</label>
    <input class="form-control" name="warranty_duration" type="number" id="warranty_duration" value="{{ isset($hardware->warranty_duration) ? $hardware->warranty_duration : ''}}" >
    {!! $errors->first('warranty_duration', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'Quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($hardware->quantity) ? $hardware->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" step="any" id="price" value="{{ isset($hardware->price) ? $hardware->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vendor') ? 'has-error' : ''}}">
    <label for="vendor" class="control-label">{{ 'Vendor' }}</label>
    <input class="form-control" name="vendor" type="text" id="vendor" value="{{ isset($hardware->vendor) ? $hardware->vendor : ''}}" >
    {!! $errors->first('vendor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('about_vendor') ? 'has-error' : ''}}">
    <label for="about_vendor" class="control-label">{{ 'About Vendor' }}</label>
    <textarea class="form-control" rows="5" name="about_vendor" type="textarea" id="about_vendor" >{{ isset($hardware->about_vendor) ? $hardware->about_vendor : ''}}</textarea>
    {!! $errors->first('about_vendor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_name" type="text" id="user_name" value="{{ isset($hardware->user->name) ? $hardware->user->name : Auth::user()->name }}"  disabled>
    <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ isset($hardware->user_id) ? $hardware->user_id : Auth::id() }}" >
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
