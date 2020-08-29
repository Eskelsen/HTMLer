<?php

# HTMler: Funções em PHP para HTMler

/*

Em execuções de poucos registros, parecem mais rápidas que a escrita normal.
Porém, a partir de dezenasv/centenas de registros se tornam expoencialmente lentas.
Tratam-se portanto de funções para dados de menus e pequenas listas vindos de DB.

foreach($menu as $item){
    li($item);
}

function li($i){
    echo '<li>' . $i . '</li>';
}

*/

# Antiga função HTMLer (Tabela, BR e HR)

function h($arg, $data = "")
{
    if($arg=="br"){ echo '<br>'; };
    if($arg=="t"){ echo '<table border="1">'; };
    if($arg=="/t"){ echo '</table>'; };
    if($arg=="tr"){ echo '<tr>'; };
    if($arg=="/tr"){ echo '</tr>'; };
    if($arg=="th"){ echo '<th>'.$data."</th>"; };
    if($arg=="td"){ echo '<td>'.$data."</td>"; };
}

/*

# Exemplo de uso

$header = extractToDB(...);

h("t");
h("tr");
foreach ($header as $row)
{   
    h("th",$row['Field']);
}
h("/tr");

$data = extractToDB(...);

foreach ($data as $row)
{   
    h("tr");
    foreach ($row as $cell)
    {   
        h("td",$cell);
    }
    h("/tr");
}
h("/t");

*/

# Funções HTMLer (Tabela, BR e HR)

function br()
{
    echo '<br>';
}

function hr()
{
    echo '<hr>';
}

function t()
{
    echo '<table border="1">';
}

function tf()
{
    echo '</table>';
}

function tr()
{
    echo '<tr>'; 
}

function trf()
{
    echo '</tr>'; 
}

function th($arg)
{
    echo '<th>'.$arg."</th>";
}

function td($arg)
{
    echo '<td>'.$arg."</td>";
}

/*

# Exemplo de uso

$header = extractToDB(...);

t();
tr();
foreach ($header as $row)
{   
    th($row['Field']);
}
trf();

$data = extractToDB(...);

foreach ($data as $row)
{   
    tr();
    foreach ($row as $cell)
    {   
        td($cell);
    }
    trf();
}
tf();

*/
