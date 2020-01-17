<pre>
<?php
function e($cad){
    print $cad;
    print "<br>";
}
$comunidad=array(
 array('tipo'=>'profesor','nombre'=>'Sergio','apellidos'=>'Lujan Mora','cargo'=>'Profesor'),
 array('tipo'=>'estudiante','nombre'=>'Perico','apellidos'=>'de los Palotes','curso'=>2),
 array('tipo'=>'estudiante','nombre'=>'Juan','apellidos'=>'Perez','curso'=>4),
 array('tipo'=>'profesor','nombre'=>'Pedro','apellidos'=>'Palomino','cargo'=>'Director'),
 array('tipo'=>'estudiante','nombre'=>'','apellidos'=>'','curso'=>'')
);

print_r($comunidad);

function ProfesorToString($p){
    $resultado='';

    if(is_array($p)){
        if(isset($p['tipo'])){
            if($p['tipo'] == 'profesor') {
              if($p['nombre'] == '' && $p['apellidos'] == ''){
                $resultado = 'Desconocido, Cargo: '.$p['cargo'];
                } else {
                    $resultado = 'Nombre: '.$p['nombre'].'Apellidos: '.$p['apellidos'];
                }    
            }
        }
    }
    return $resultado;
}
function EstudianteToString($e){
    $resultado='';

    if(is_array($e)){
        if(isset($e['tipo'])){
            if($e['tipo'] == 'estudiante') {
              if($e['nombre'] == '' && $e['apellidos'] == ''){
                $resultado = 'Desconocido, Curso: '.$e['curso'];
                } else {
                    $resultado = 'Nombre: '.$e['nombre'].'Apellidos: '.$e['apellidos'];
                }    
            }
        }
    }
    return $resultado;
}

foreach($comunidad as $miembro){
 if($miembro['tipo'] == 'profesor') {
   e(ProfesorToString($miembro));
 } else if ($miembro['tipo'] == 'estudiante') {
    e(EstudianteToString($miembro));
}
}
foreach($comunidad as &$miembro){
    $miembro['tipo'] = 'estudiante';
    $miembro['curso'] == 5;
}
unset($miembro);

print_r($comunidad);
foreach($comunidad as $key=>$miembro){
    if($miembro['tipo'] == 'profesor') {
        e(ProfesorToString($miembro));
      } else if ($miembro['tipo'] == 'estudiante') {
         e(EstudianteToString($miembro));
     }
}
?>