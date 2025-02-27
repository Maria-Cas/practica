<x-layouts.layout >
<div class=" min-h-full flex flex-col justify-center items-center bg-gray-300" >
    <div class="flex flex-col justify-center items-center p-5 bg-white rounded-xl max-h-full m-5 p-5    ">
<h1 class=" text-2xl text-footer" >Datos nuevo alumno </h1>
<form action="{{route('alumnos.store')}}" method="post" class="space-y-4 grid grid-cols-2 gap-4" >
@csrf <!--  validar  --><!-- Formulario --><div>
<label for="" class="flex flex-col justify-center items-center">Nombre</label>
<input name="name" type="text " placeholder ="nombre"
class="input input-bordered input-footer w-full max-w-xs text" />
</div>
<div>
<label for="" class="flex flex-col justify-center items-center">Dni</label>
<input name="dni" type="text" placeholder ="Dni"
class="input input-bordered input-footer w-full max-w-xs" />
</div>
<div>
<label for="" class="flex flex-col justify-center items-center">Email</label>
<input name="email" type="text" placeholder ="email"
class="input input-bordered input-footer w-full max-w-xs" />
</div>
<div class="flex flex-col justify-center items-center  ">
<button type="submit" class="btn bg-footer" >Guardar</button>
</div>
</form>
</div>
</div>
</x-layouts.layout >