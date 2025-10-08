<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC y ORM en Laravel: Presentación Interactiva</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #f0fdf4 100%);
            overflow: hidden;
        }
        .scroll-snap-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
        }
        .scroll-snap-section {
            scroll-snap-align: start;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 1rem;
        }
        .presentation-card {
            max-width: 90%;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .code-block {
            background-color: #0f172a;
            color: #f8fafc;
            padding: 1.25rem;
            border-radius: 0.75rem;
            font-family: monospace;
            white-space: pre-wrap;
            border-left: 5px solid #38bdf8;
        }
        .placeholder-image {
            background: linear-gradient(45deg, #1e3a8a, #3b82f6);
            color: #dbeafe;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            min-height: 12rem;
        }
        .section-title {
            position: relative;
            padding-bottom: 0.75rem;
            margin-bottom: 2rem;
            display: inline-block;
            font-size: 2.25rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #6366f1);
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <div class="scroll-snap-container">

        <!-- PORTADA -->
        <section class="scroll-snap-section">
            <div class="presentation-card text-center">
                <h1 class="text-6xl font-extrabold text-gray-800 mb-6">¿Cómo esperas darle una carta a alguien sin papel?</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    En el mundo del desarrollo web, enviar información sin una estructura clara es como intentar entregar una carta sin papel, sin mensaje o sin mensajero.  
                    Laravel y su arquitectura MVC nos enseñan a escribir, empaquetar y entregar cada “carta digital” de la forma más ordenada posible.
                </p>
            </div>
        </section>

        <!-- DIAPOSITIVA 2: Introducción a MVC -->
        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">1. MVC: El lenguaje del orden</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El patrón <strong>MVC (Modelo-Vista-Controlador)</strong> es como un servicio de mensajería bien organizado: el papel, el mensaje y el mensajero trabajan juntos para que la carta llegue al destino correcta.
                </p>
                <ul class="list-disc list-inside text-lg text-gray-800 font-semibold bg-blue-50 p-4 rounded-lg border border-blue-200">
                    <li><strong class="text-blue-600">Modelo:</strong> el papel donde se guarda la información importante (los datos y sus reglas).</li>
                    <li><strong class="text-blue-600">Vista:</strong> el mensaje que ve el destinatario, con todo el formato bonito.</li>
                    <li><strong class="text-blue-600">Controlador:</strong> el mensajero que recoge el papel, prepara el sobre y lo entrega al usuario correcto.</li>
                </ul>
                <p class="text-lg italic text-gray-500 mt-6">
                    Si cada rol cumple su función, el sistema fluye sin caos, igual que en un correo bien coordinado.
                </p>
            </div>
        </section>

        <!-- DIAPOSITIVA 3: El Modelo y ORM -->
        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">2. El Modelo: el papel donde escribimos la verdad</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El <strong>Modelo</strong> representa el papel donde se escriben los datos y las reglas del mundo real.  
                    Laravel usa <strong>Eloquent ORM</strong> para traducir entre la base de datos (el depósito de papeles) y los objetos PHP (los documentos digitales).
                </p>
                <div class="code-block text-sm">
                    // 📂 app/Models/Docente.php<br>
                    use Illuminate\Database\Eloquent\Model;<br>
                    <br>
                    class Docente extends Model {<br>
                    &nbsp;&nbsp;protected $table = 'docentes';<br>
                    &nbsp;&nbsp;protected $fillable = ['nombre', 'email'];<br>
                    }<br>
                    <br>
                    // Recuperar docentes<br>
                    $todos = Docente::all();<br>
                    $uno = Docente::where('email', 'ana@correo.com')->first();
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    Como un papel que guarda lo que escribimos, el Modelo guarda cada dato que la aplicación necesita recordar.
                </p>
            </div>
        </section>

        <!-- DIAPOSITIVA 4: La Vista -->
        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">3. La Vista: el mensaje que llega al lector</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    La <strong>Vista</strong> es el mensaje en sí: lo que el usuario ve, toca y entiende.  
                    Laravel usa <strong>Blade</strong> para dar forma a ese mensaje con HTML dinámico.
                </p>
                <div class="code-block text-sm">
                    // 📂 resources/views/docentes/index.blade.php<br>
                    @extends('layouts.app')<br>
                    @section('content')<br>
                    &nbsp;&nbsp;<h1>Listado de docentes</h1><br>
                    &nbsp;&nbsp;@foreach($docentes as $d)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<li>{{ $d->nombre }} - {{ $d->email }}</li><br>
                    &nbsp;&nbsp;@endforeach<br>
                    @endsection
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    La Vista es el sobre decorado que entrega el mensaje final: bonita, clara y sin tocar los datos directamente.
                </p>
            </div>
        </section>

        <!-- DIAPOSITIVA 5: El Controlador -->
        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">4. El Controlador: el mensajero confiable</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El <strong>Controlador</strong> es quien lleva la carta del remitente al destinatario.  
                    Recibe la solicitud, revisa el papel (Modelo) y entrega el mensaje (Vista).
                </p>
                <div class="code-block text-sm">
                    // 📂 app/Http/Controllers/DocenteController.php<br>
                    use App\Models\Docente;<br>
                    use Illuminate\Http\Request;<br><br>
                    class DocenteController extends Controller {<br>
                    &nbsp;&nbsp;public function store(Request $r) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$data = $r->validate(['nombre' => 'required']);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;Docente::create($data);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;return redirect('/docentes')->with('ok', 'Carta entregada.');<br>
                    &nbsp;&nbsp;}<br>
                    }
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    Sin el mensajero, ni el papel ni el mensaje llegarían. El Controlador da vida al recorrido.
                </p>
            </div>
        </section>

        <!-- DIAPOSITIVA 6: Cierre -->
        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl text-center">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">5. MVC en acción</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-8">
                    El flujo es simple: el usuario pide algo → la ruta guía al mensajero → el controlador busca el papel correcto → la vista muestra el mensaje.
                </p>
                <div class="code-block text-sm max-w-xl mx-auto">
                    // 📂 routes/web.php<br>
                    Route::get('/docentes', [DocenteController::class, 'index']);
                </div>
                <p class="text-lg italic text-gray-500 mt-8">
                    En resumen, Laravel es un sistema postal digital: <br>
                    El Modelo guarda el contenido, el Controlador lo transporta, y la Vista lo muestra con elegancia.
                </p>
            </div>
        </section>
    </div>

</body>
</html>
