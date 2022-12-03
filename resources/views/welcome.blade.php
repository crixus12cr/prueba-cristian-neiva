<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>Prueba Cristian Perdomo</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- include the style -->
    <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}" />

</head>

<body>

    <div class="container">
        <h1 class="display-1">Formulario</h1>
        <form id="form" >
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="users_id" id="users_id">
                            @foreach ($respuesta['users'] as $user)
                                <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text" >Fecha</span>
                            <input type="date" class="form-control" placeholder="Us" aria-label="Username"
                                aria-describedby="basic-addon1" id="fecha" name="fecha">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text" >Hora Inicio</span>
                            <input type="time" class="form-control" placeholder="Us" aria-label="Username"
                                aria-describedby="basic-addon1" name="hora_inicio" id="hora_inicio">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text" >Hora Final</span>
                            <input type="time" class="form-control" placeholder="Us" aria-label="Username"
                                aria-describedby="basic-addon1" name="hora_final" id="hora_final">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="derechos_culturales_id" id="derechos_culturales_id">
                            @foreach ($respuesta['derechos'] as $derecho)
                                <option value="{{ $derecho->id }}">{{ $derecho->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="nacs_id" id="nacs_id">
                            @foreach ($respuesta['nacs'] as $nac)
                                <option value="{{ $nac->id }}">{{ $nac->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="experticias_id" id="experticias_id">
                            @foreach ($respuesta['experticios'] as $experticio)
                                <option value="{{ $experticio->id }}">{{ $experticio->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
        <!-- table -->
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CONSECUTIVO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DERECHO CULTURAL</th>
                    <th scope="col">NAC</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA INICIO</th>
                    <th scope="col">HORA FINAL</th>
                    <th scope="col">EXPERTICIA</th>
                    <th scope="col">FECHA CARGA</th>
                </tr>
            </thead>
            <tbody>

                @foreach($respuesta['listados'] as $listado)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $listado->id }}</td>
                    <td>{{ $listado->consecutivo }}</td>
                    <td>{{ $listado['users']['nombre']}}</td>
                    <td>{{ $listado['derechos_culturales']['nombre']}}</td>
                    <td>{{ $listado['nacs']['nombre'] }}</td>
                    <td>{{ $listado->fecha }}</td>
                    <td>{{ $listado->hora_inicio }}</td>
                    <td>{{ $listado->hora_final }}</td>
                    <td>{{ $listado['experticias']['nombre'] }}</td>
                    <td>{{ $listado->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script>
    let data = {}
  const route = `{{ route('formulario') }}`;

  const formContact = document.getElementById('form')
  formContact.addEventListener('submit', (e) => {
    e.preventDefault()

    const users_id = document.getElementById('users_id').value
    const fecha = document.getElementById('fecha').value
    const hora_inicio = document.getElementById('hora_inicio').value
    const hora_final = document.getElementById('hora_final').value
    const derechos_culturales_id = document.getElementById('derechos_culturales_id').value
    const nacs_id = document.getElementById('nacs_id').value
    const experticias_id = document.getElementById('experticias_id').value

    if (!(users_id && fecha && hora_inicio && hora_final && derechos_culturales_id && nacs_id && experticias_id)) return alert('verifica los campos')

    data = {
        users_id,
        fecha,
        hora_inicio,
        hora_final,
        derechos_culturales_id,
        nacs_id,
        experticias_id,
    }
    // console.log(data)
    document.getElementById('users_id').value=''
    document.getElementById('fecha').value=''
    document.getElementById('hora_inicio').value=''
    document.getElementById('hora_final').value=''
    document.getElementById('derechos_culturales_id').value=''
    document.getElementById('nacs_id').value=''
    document.getElementById('experticias_id').value=''
    saveComment(data);
  })

  const saveComment = async (datos) => {
    const csrf = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    const res = await fetch(route, {
      headers: {
        'X-CSRF-Token': csrf,
        'Content-Type': 'application/json',
      },
      method: 'POST',
      body: JSON.stringify(datos)
    })
    const message = await res.json();
    if (res.status == 500) return alertify.error(message)
    alertify.success(message);
    console.log(message);
    setTimeout(() => {
        location.reload()
    }, 2000);
  }
</script>
</body>
<script src='{{ asset('js/alertify.min.js') }}'></script>
</html>
