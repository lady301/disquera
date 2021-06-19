       <div class="mb-3">
            <label for="Nombre" class="form-label">Ingrese el nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control"value="
            {{isset($users->Nombre) ? $users->Nombre :old('Nombre')}}" aria-describedby="Nombrehelp"> 
            @error('Nombre')
            <small id="Nombrehelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
            <div class="valid-feedback">
              Correcto
            </div>
            <div class="invalid-feedback">
             * El campo es obligatorio
            </div>
         </div>

         <div class="mb-3">
            <label for="Apellidos" class="form-label">Ingrese el apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control"value="
            {{isset($users->Apellidos)?$users->Apellidos:old('Apellidos')}}"aria-describedby="Apellidoshelp"> 
            @error('Apellidos')
            <small id="Apellidoshelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
            <div class="invalid-feedback">
             * El campo es obligatorio
            </div>
         </div>

         <div class="mb-3">
            <label for="Identificacion" class="form-label">Ingrese el No de identificacion</label>
            <input type="text" name="identificacion" id="identificacion" class="form-control"value="
            {{isset($users->Identificacion)?$users->Identificacion:old('Identificacion')}}"aria-describedby="identificacionhelp"> 
            @error('Identificacion')
            <small id="identificacionhelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
            <div class="invalid-feedback">
             * El campo es obligatorio
            </div>
         </div>

         <div class="mb-3">
            <label for="Email" class="form-label">Ingrese el email </label>
            <input type="Email" name="Email" id="Email" class="form-control"value="
            {{isset($users->Email)?$users->Email:old('Email')}}"aria-describedby="Emailhelp"> 
            @error('Email')
            <small id="Emailhelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
         </div>

         <div class="mb-3">
            <label for="foto" class="form-label">Anexe la foto del Artista </label>
            <input type="file" name="foto" id="foto" class="form-control"value="
            {{isset($users->Foto)?$users->Foto:old('foto')}}"aria-describedby="fotohelp"> 
            @error('foto')
            <small id="fotohelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
         </div>


         
         <div class="mb-3">
            <label for="Direccion" class="form-label">Ingrese la Dirección</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" value="
            {{isset($users->Direccion)?$users->Direccion:old('Direccion')}}"aria-describedby="Direccionhelp"> 
            @error('Direccion')
            <small id="Direccionhelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
         </div>

         <div class="mb-3">
            <label for="Telefono" class="form-label">Ingrese el Teléfono</label>
            <input type="tel" name="Telefono" id="Telefono" class="form-control" value="
            {{isset($users->Telefono)?$users->Telefono:old('Telefono')}}"aria-describedby="Telefonohelp"> 
            @error('Telefono')
            <small id="Telefonohelp" class="form-text text-muted"> 
            * {{$message}}
            </small>
            @enderror
         </div>


         <div class="mb-3">
            <input type="submit" value="Guardar" class="btn btn-primary">
         </div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

            
            
            

