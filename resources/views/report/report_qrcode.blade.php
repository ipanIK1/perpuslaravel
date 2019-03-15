<style>
    h1{
        text-align:center;
    }
    
    table { width: 100%; }
    table td { text-align: center; }
</style>
<h1>QR CODE BUKU</h1>
<hr>
<table>

@php
    $i = 1;
    $count = count($buku);
@endphp

@foreach($buku as $rsBuku)
@if(($i%5)==1)
<tr> 
@endif
    <td width="20%"><img src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(150)->color(255, 255, 255)->backgroundColor(232, 34, 34)->generate($rsBuku->no_induk_buku)) }}">
    <p>{{ $rsBuku->no_induk_buku }}</p>
    </td>
@if(($i%5)==0 || $i==$count)
</tr> 
@endif

@php
$i++;
@endphp

@endforeach
</table>
