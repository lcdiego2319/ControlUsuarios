  <div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',null, ['class' => 'form-control','placeholder' => 'Ingresar su nombre...']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('usuario','Usuario') !!}
    {!! Form::text('usuario',null, ['class' => 'form-control','placeholder' => 'Ingresar nombre de usuario...']) !!}
  </div>
  
  <div class="form-group">
    {!! Form::label('password','Contraseña') !!}
    {!! Form::password('password',['class' => 'form-control','placeholder' => 'Ingresar contraseña...']) !!}
  </div>
              
  <div class="form-group">
    {!! Form::label('puesto','Puesto') !!}
    {!! Form::text('puesto',null, ['class' => 'form-control','placeholder' => 'Ingresar puesto...']) !!}
  </div>

  
  
  <div class="form-group">
    {!! Form::label('tipo','Privilegios de usuario') !!}
    
    {!! Form::select('tipo',config('options.types'),null, ['class' => 'form-control']) !!}
  </div>
