        <div class="mb-3">
            <label for="Nombre" class="form-label">Ingrese el nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control"value="
            {{isset($users->Nombre) ? $users->Nombre : ''}}">
         </div>

         <div class="mb-3">
            <label for="Apellidos" class="form-label">Ingrese el apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control"value="
            {{isset($users->Apellidos)?$users->Apellidos:''}}">
         </div>

         <div class="mb-3">
            <label for="Identificacion" class="form-label">Ingrese el No de identificacion</label>
            <input type="text" name="identificacion" id="identificacion" class="form-control"value="
            {{isset($users->Identificacion)?$users->Identificacion:''}}">
         </div>

         <div class="mb-3">
            <label for="Email" class="form-label">Ingrese el email </label>
            <input type="Email" name="Email" id="Email" class="form-control"value="
            {{isset($users->Email)?$users->Email:''}}">
         </div>

         <div class="mb-3">
            <label for="foto" class="form-label">Anexe la foto del Artista </label>
            <input type="file" name="foto" id="foto" class="form-control"value="
            {{isset($users->Foto)?$users->Foto:''}}">
         </div>


         
         <div class="mb-3">
            <label for="Direccion" class="form-label">Ingrese la Dirección</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" value="
            {{isset($users->Direccion)?$users->Direccion:''}}">
         </div>

         <div class="mb-3">
            <label for="Telefono" class="form-label">Ingrese el Teléfono</label>
            <input type="tel" name="Telefono" id="Telefono" class="form-control" value="
            {{isset($users->Telefono)?$users->Telefono:''}}">
         </div>


         <div class="mb-3">
            <input type="submit" value="Guardar" class="btn btn-primary">
         </div>
