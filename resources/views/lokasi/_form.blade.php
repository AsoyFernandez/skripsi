<div class="form-group{{ $errors->has('area') ? ' has-error' : '' }} row">
	{!! Form::label('area', 'Pilih Area', ['class'=>'col-sm-4 control-label']) !!}
	<div class="col-sm-6"> 
		{!! Form::select('area', [''=>'']+App\Tempat::pluck('nama','id')->all(),  null, ['class'=>'form-control, js-selectize ','placeholder' => 'Pilih Area']) !!}
		{!! $errors->first('area', '<p class="help-block">:message</p>') !!}
	</div>
</div>
  
<div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
	{!! Form::label('nama', 'Nama Lokasi', ['class'=>'col-sm-4 control-label']) !!}
	<div class="col-sm-6">
	{!! Form::text('nama', null, 
	['class'=>' form-control', 'placeholder' => 'Tuliskan Lokasi', 'id'=>'nama']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<!--<div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }} row">
	{!! Form::label('detail', 'Detail Lokasi', ['class'=>'col-sm-4 control-label']) !!}
	<div class="col-sm-6"> 
		{!! Form::text('detail',  null, ['class'=>'form-control ',]) !!}
		{!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
	</div>
</div>
-->
<div class="form-group row mb-0">
	<div class="col-md-6 col-md-offset-4">
	{!! Form::submit('Tambah', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
