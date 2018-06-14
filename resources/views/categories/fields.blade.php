<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Категория:') !!}
    <select name="parent_id" id="parent_id">
    	<option value="1">Обои и декор</option>
    	<option value="2">Лаки и краски</option>
    	<option value="3">Напольные покрытия</option>
    	<option value="4">Потолочка</option>
    	<option value="5">Плинтусы</option>
    	<option value="6">Клеи и жидкие гвозди</option>
    	<option value="7">Мелочевка</option>
    	<option value="8">Инструменты</option>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>
