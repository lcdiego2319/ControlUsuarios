  <div class="form-group">
               {!! Form::label('name','Nombre') !!}
                {!! Form::text('name',null, ['class' => 'form-control','placeholder' => 'Por favor ingresar su nombre']) !!}
              </div>
              <div class="form-group">
               {!! Form::label('email','Correo electronico') !!}
                {!! Form::text('email',null, ['class' => 'form-control','placeholder' => 'Por favor ingresar el correo electronico']) !!}
              </div>

               <div class="form-group">
               {!! Form::label('passsword','Password') !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
              </div>
              
              <div class="form-group">
              {!! Form::label('type','Tipo de usuario') !!}
              {!! Form::select('type',['' => 'Seleccione tipo','user' => 'Usuario', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
              </div>