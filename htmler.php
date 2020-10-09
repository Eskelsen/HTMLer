<?php

# Tabler: Função que gera tabela HTML a partir de arrays [L]

# string = tabler($array[array[value], $array[headers])

function tabler($c, $h)
{
    echo '<table class="table table-bordered table-hover table-striped"><thead><tr>';
    foreach($h as $header)
    {
        echo '<th><strong>' . $header . '</strong></th>';
    }
    echo '</tr></thead><tbody>';
    foreach($c as $row)
    {
        echo '<tr>';
        foreach($row as $cell)
        {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';    
    }    
    echo '</tbody></table>';  
}
