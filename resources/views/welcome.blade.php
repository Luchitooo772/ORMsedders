<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC y ORM en Laravel: Presentación Interactiva 🚀</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            /* Fondo degradado suave y moderno */
            background: linear-gradient(135deg, #e0f2fe 0%, #f0f9ff 100%);
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
            padding: 2.5rem;
            border-radius: 1.5rem;
            /* Sombra más suave y moderna */
            box-shadow: 0 20px 50px rgba(17, 24, 39, 0.1);
            transition: transform 0.3s ease;
        }
        .presentation-card:hover {
            transform: translateY(-5px);
        }
        .code-block {
            /* Fondo más oscuro (slate) para contraste */
            background-color: #1e293b; 
            color: #e2e8f0;
            padding: 0; /* Quitamos padding aquí para meter barra de título */
            border-radius: 0.75rem;
            font-family: 'Fira Code', monospace; /* Fuente de código */
            white-space: pre-wrap;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .code-header {
            background-color: #334155;
            color: #cbd5e1;
            padding: 0.75rem 1.25rem;
            font-size: 0.875rem;
            border-bottom: 1px solid #475569;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .code-content {
            padding: 1.25rem;
            border-left: 5px solid #06b6d4; /* Color Teal para el borde de Laravel */
            font-size: 0.95rem;
        }
        .section-title {
            position: relative;
            padding-bottom: 0.75rem;
            margin-bottom: 2rem;
            display: inline-block;
            font-size: 2.5rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            /* Degradado de colores de Laravel/modernos */
            background: linear-gradient(90deg, #10b981, #06b6d4); 
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <div class="scroll-snap-container">

        <section class="scroll-snap-section">
            <div class="presentation-card text-center max-w-4xl">
                <h1 class="text-7xl font-extrabold text-gray-900 mb-8 leading-tight">
                    ¿Cómo esperas darle una carta a alguien sin papel? ✉️
                </h1>
                <p class="text-2xl text-gray-600 leading-relaxed mb-4">
                    En el mundo del desarrollo web, enviar información sin una estructura clara es como intentar entregar una carta sin papel, sin mensaje o sin mensajero. 
                </p>
                <p class="text-2xl text-indigo-600 font-semibold">
                    Laravel y su arquitectura MVC nos enseñan a escribir, empaquetar y entregar cada “carta digital” de la forma más ordenada posible.
                </p>
                <div class="mt-8 text-sm text-gray-400">Desliza para continuar 👇</div>
            </div>
        </section>

        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">1. MVC: El lenguaje del orden 🧩</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El patrón <strong>MVC (Modelo-Vista-Controlador)</strong> es como un servicio de mensajería bien organizado: el papel, el mensaje y el mensajero trabajan juntos para que la carta llegue al destino correcta.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-indigo-50 rounded-xl border border-indigo-200 hover:shadow-lg transition">
                        <h3 class="text-2xl font-bold text-indigo-700 mb-2">Modelo</h3>
                        <p class="text-lg text-gray-700">El papel donde se guarda la información importante (los datos y sus reglas).</p>
                    </div>
                    <div class="p-6 bg-teal-50 rounded-xl border border-teal-200 hover:shadow-lg transition">
                        <h3 class="text-2xl font-bold text-teal-700 mb-2">Vista</h3>
                        <p class="text-lg text-gray-700">El mensaje que ve el destinatario, con todo el formato bonito.</p>
                    </div>
                    <div class="p-6 bg-green-50 rounded-xl border border-green-200 hover:shadow-lg transition">
                        <h3 class="text-2xl font-bold text-green-700 mb-2">Controlador</h3>
                        <p class="text-lg text-gray-700">El mensajero que recoge el papel, prepara el sobre y lo entrega al usuario correcto.</p>
                    </div>
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    Si cada rol cumple su función, el sistema fluye sin caos, igual que en un correo bien coordinado.
                </p>
            </div>
        </section>

        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">2. El Modelo: el papel donde escribimos la verdad (ORM) 📄</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El <strong>Modelo</strong> representa el papel donde se escriben los datos y las reglas del mundo real. 
                    Laravel usa <strong>Eloquent ORM</strong> para traducir entre la base de datos (el depósito de papeles) y los objetos PHP (los documentos digitales).
                </p>
                <div class="code-block text-sm">
                    <div class="code-header">
                        <span>// app/Models/Docente.php (El Papel)</span>
                        <span class="text-xs px-2 py-1 bg-gray-600 rounded">PHP</span>
                    </div>
                    <pre class="code-content">use Illuminate\Database\Eloquent\Model;

class Docente extends Model {
   protected $table = 'docentes';
   protected $fillable = ['nombre', 'email'];
}

// Recuperar docentes (Eloquent ORM)
$todos = Docente::all(); 
$uno = Docente::where('email', 'ana@correo.com')->first();</pre>
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    Como un papel que guarda lo que escribimos, el Modelo guarda cada dato que la aplicación necesita recordar.
                </p>
            </div>
        </section>

        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">3. La Vista: el mensaje que llega al lector (Blade) 🖼️</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    La <strong>Vista</strong> es el mensaje en sí: lo que el usuario ve, toca y entiende. 
                    Laravel usa <strong>Blade</strong> para dar forma a ese mensaje con HTML dinámico.
                </p>
                <div class="code-block text-sm">
                    <div class="code-header">
                        <span>// resources/views/docentes/index.blade.php (El Mensaje)</span>
                        <span class="text-xs px-2 py-1 bg-gray-600 rounded">Blade</span>
                    </div>
                    <pre class="code-content">@extends('layouts.app')
@section('content')
  &lt;h1 class="text-3xl font-bold text-teal-500"&gt;Listado de docentes&lt;/h1&gt;
  &lt;ul&gt;
    @foreach($docentes as $d)
      &lt;li&gt;{{ $d->nombre }} - {{ $d->email }}&lt;/li&gt;
    @endforeach
  &lt;/ul&gt;
@endsection</pre>
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    La Vista es el sobre decorado que entrega el mensaje final: bonita, clara y sin tocar los datos directamente.
                </p>
            </div>
        </section>

        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">4. El Controlador: el mensajero confiable 🧭</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    El <strong>Controlador</strong> es quien lleva la carta del remitente al destinatario. Recibe la solicitud, revisa el papel (Modelo) y entrega el mensaje (Vista).
                </p>
                <div class="code-block text-sm">
                    <div class="code-header">
                        <span>// app/Http/Controllers/DocenteController.php (El Mensajero)</span>
                        <span class="text-xs px-2 py-1 bg-gray-600 rounded">PHP</span>
                    </div>
                    <pre class="code-content">use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller {

  public function index() {
    // 1. Pide los datos al Modelo
    $docentes = Docente::all(); 

    // 2. Envía los datos a la Vista
    return view('docentes.index', compact('docentes'));
  }
  
  public function store(Request $r) {
    // Lógica para guardar un nuevo docente
    $data = $r->validate(['nombre' => 'required']);
    Docente::create($data);
    return redirect('/docentes')->with('ok', 'Carta entregada.');
  }
}</pre>
                </div>
                <p class="text-lg italic text-gray-500 mt-6">
                    Sin el mensajero, ni el papel ni el mensaje llegarían. El Controlador da vida al recorrido.
                </p>
            </div>
        </section>

        <section class="scroll-snap-section">
            <div class="presentation-card max-w-5xl text-center">
                <h2 class="section-title font-extrabold text-gray-800 text-5xl">5. MVC en acción: el ciclo completo ✅</h2>
                <p class="text-xl text-gray-700 leading-relaxed mb-8">
                    El flujo es simple: el usuario pide algo → la ruta guía al mensajero → el controlador busca el papel correcto → la vista muestra el mensaje.
                </p>
                
                <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                    <div class="text-2xl font-bold text-indigo-500">Ruta 🗺️</div>
                    <span class="text-3xl text-gray-400">&rarr;</span>
                    <div class="text-2xl font-bold text-green-500">Controlador 🧑‍💻</div>
                    <span class="text-3xl text-gray-400">&harr;</span>
                    <div class="text-2xl font-bold text-blue-500">Modelo 🗃️</div>
                    <span class="text-3xl text-gray-400">&rarr;</span>
                    <div class="text-2xl font-bold text-teal-500">Vista 🖥️</div>
                </div>

                <div class="code-block text-sm max-w-xl mx-auto mt-8">
                    <div class="code-header">
                        <span>// routes/web.php</span>
                        <span class="text-xs px-2 py-1 bg-gray-600 rounded">PHP</span>
                    </div>
                    <pre class="code-content">Route::get('/docentes', [DocenteController::class, 'index']);</pre>
                </div>
                <p class="text-lg italic text-gray-500 mt-8">
                    En resumen, Laravel es un sistema postal digital: <br>
                    El **Modelo** guarda el contenido, el **Controlador** lo transporta, y la **Vista** lo muestra con elegancia.
                </p>
            </div>
        </section>
    </div>

</body>
</html>