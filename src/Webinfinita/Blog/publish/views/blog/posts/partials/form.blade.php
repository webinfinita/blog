<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label>Image</label>
        {!! Form::file('image', null, ['id' => 'image','class' => 'form-control', 'placeholder' => 'Post image', 'required', 'data-validation-required-message' => 'Please enter the post image', 'aria-invalid' => 'false']) !!}
        <p class="help-block">1900x872px</p>
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label>Title</label>
        {!! Form::text('title', null, ['id' => 'title','class' => 'form-control', 'placeholder' => 'Post title', 'required', 'data-validation-required-message' => 'Please enter the post title', 'aria-invalid' => 'false']) !!}
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label>Subtitle</label>
        {!! Form::text('subtitle', null, ['id' => 'subtitle','class' => 'form-control', 'placeholder' => 'Post subtitle', 'required' => 'required', 'data-validation-required-message' => 'Please enter the post subtitle', 'aria-invalid' => 'false']) !!}
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label>Body</label>
        {!! Form::textarea('body', null, ['id' => 'body','class' => 'form-control', 'rows' => '5', 'placeholder' => 'Post body', 'required', 'data-validation-required-message' => 'Please enter the post body', 'aria-invalid' => 'false']) !!}
        <p class="help-block text-danger"></p>
    </div>
</div>
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label>Publish date</label>
        {!! Form::text('published_at', Carbon\Carbon::now(), ['id' => 'published_at','class' => 'form-control',  'placeholder' => '2015-06-06 15:24:30', 'required', 'data-validation-required-message' => 'Please enter the post publish date', 'aria-invalid' => 'false']) !!}
        <p class="help">Date format must be YYYY-MM-DD hours:minutes:seconds</p>
        <p class="help-block text-danger"></p>
    </div>
</div>
<br>
<div id="success"></div>
