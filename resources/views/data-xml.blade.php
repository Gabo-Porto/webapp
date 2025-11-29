<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
    {{-- A variável $registros deve ser a coleção de todos os seus ramais --}}
    @foreach ($registros as $item)
    <item>
        <nome>{{ $item->nome }}</nome>
        <area>{{ $item->area }}</area>
        <ramal>{{ $item->ramal }}</ramal>
        <andar>{{ $item->andar }}</andar>
        <email>{{ $item->email }}</email>
    </item>
    @endforeach
</data>
