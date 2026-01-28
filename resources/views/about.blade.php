<x-app-layout>
    <div class="max-w-4x1 mx-auto px-4">
        <h1>class="text-3x1 font-bold mb-4">About Page</h1>
        <h2>Hola desde el controlador de PostController</h2>
        <h3>EL valor ingresado del parámetro es: {{$parametro}}</h3>
        <x-alert2 type="Warning" class="mb-4">
            <!-- slot es una variable que representa el contenido dentro del componente -->
            <x-slot name="tittle">Título de la alerta</x-slot>
            Este es un mensaje de alerta personalizado
        </x-alert2>
        <p>Hola mundo</p>
        <!-- Lista de componentes para botones -->
       <x-button type='sucess' id='sucess'>Boton de inicio</x-button>
       <x-button type='danger' id='danger'>Boton de danger</x-button>
       <x-button type='warning' id='warning'>Boton de warning</x-button>
    </div>
    <!-- El siguiente fragmento es el uso de directivas basadas en blade -->
    @if(!empty($nombre))
    <h4>El nombre ingresado es: {{$nombre}}</h4>
    @endif
</x-app-layout>