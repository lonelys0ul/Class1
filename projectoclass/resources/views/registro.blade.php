<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
  <div class="container">
    <div class="row">
      <form action="{{route('registro') }}" method="POST">
        @csrf
        <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre"></input>
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
      </div>
      <div class="mb-3">
              <label for="celular" class="form-label">Celular</label>
               <input type="number" class="form-control" id="celular" name="celular" placeholder="celular"></input>
                @error('celular')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
      </div>
      <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email"></input>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
          </div>
          <input type="submit" value="Enviar">
      </form>
      @if(session()->has('correcto'))
      <div class="alert alert success">{{session()->get('correcto')}}</div>
      @endif
    </div>
</body>

</html>
