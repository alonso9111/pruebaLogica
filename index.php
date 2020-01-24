<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Prueba logica</title>
        <script   src="jquery-2.2.4.min.js" 
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous">
        </script>
    </head>
    <body>
        <h2>Recorrido de una cuadricula</h2>
        <p>Indique las dimenciones de una cuadricula para determinar cual 
        sera el recorrido a tomar y hacia donde observando el participante</p>
        <form name="frmCuadricula2" id="frmCuadricula2"> 
            <label><strong>Dimenciones</strong></label><br>
            <input type="texte"  name="pruebas" id="pruebas">
            <p>separa las pruebas por una "," enformato filacolumna ejemplo 11,25,42</p>
            <button type="button" onclick="recorrer()">Enviar</button>
        </form>
        <div id="resultado"></div>
    </body>

    <script>
        /* 
            Casos:
            n == m
                Si el valor es par el resultado es L si no R
            n < m
                si n es par el resultado es L si no R
            n > m
                si m es par el resultado es U si no D
         */
        function recorrer(){
            var $pruebas = $('#pruebas').val();
            var arrayPruebas = $pruebas.split(",");
            var $t = arrayPruebas.length;
            var resultado ="<h3>Resultado</h3>Total de pruebas: "+$t;

            for (var i = 0; i < $t ; i++) {
                $n = Math.trunc(arrayPruebas[i]/10);
                $m = arrayPruebas[i]-($n*10);
                console.log("n= "+$n+", m= "+$m);
                resultado+="<br>Prueba N°"+(i+1)+": "
                if ($n>$m){ 
                    if($m%2==0){
                        resultado+="\nU"
                    }else{
                        resultado+="\nD"
                    }
                }else {
                    if($n<$m){
                        if($n%2==0){
                            resultado+="\nL"
                        }else{
                            resultado+="\nR"
                        }
                    }else{
                        if($n%2!=0){
                            resultado+="\nR"
                        }else{
                            resultado+="\nL"
                        }
                    }
                }
            }
            $("#resultado").html(resultado);
        }
    </script>
</html>