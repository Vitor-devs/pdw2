@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<data>
@foreach ($registros as $item)
    <item>
        <modelo>{{ $item->modelo }}</modelo>
        <marca>{{ $item->marca }}</marca>
        <processador>{{ $item->processador }}</processador>
        <ram>{{ $item->ram }}</ram>
        <preco>{{ $item->preco }}</preco>
    </item>
@endforeach
</data>