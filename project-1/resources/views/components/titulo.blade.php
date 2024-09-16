<h1 {{ $attributes ->merge(['class' => 'text-3xl font-bold text-red-500']) }}>
    Meu nome é {{$name}} e tenho {{$age}} anos
    {{$slot}}&nbsp;
    <small class="text-black">{{$subtitulo}}</small>
</h1>
