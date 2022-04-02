# Propagacion y captura
#### Propagacion

El principio de propagación es simple.

Cuando un evento ocurre en un elemento, este primero ejecuta los manejadores que tiene asignados, luego los manejadores de su padre, y así hasta otros ancestros.

Digamos que tenemos 3 elementos anidados FORM > DIV > P con un manejador en cada uno de ellos:
![error](.imagenes/1.png)

Un clic en el elemento del interior <p> primero ejecuta onclick:

1. En ese <p>.
2. Luego en el <div> de arriba.
3. Luego en el <form> de más arriba.
4. Y así sucesivamente hasta el objeto document.
![error](.imagenes/2.png)

Así si hacemos clic en <p>, entonces veremos 3 alertas: p → div → form.

Este proceso se conoce como “propagación” porque los eventos “se propagan” desde el elemento más al interior, a través de los padres, como una burbuja en el agua.


###### event.target

Un manejador en un elemento padre siempre puede obtener los detalles sobre dónde realmente ocurrió el evento.

El elemento anidado más profundo que causó el evento es llamado elemento objetivo, accesible como event.target

Nota la diferencia de this (=event.currentTarget):

- event.target – es el elemento “objetivo” que inició el evento, no cambia a través de todo el proceso de propagación.
- this – es el elemento “actual”, el que tiene un manejador ejecutándose en el momento.
Por ejemplo, si tenemos un solo manejador form.onclick, este puede atrapar todos los clicks dentro del formulario. No importa dónde el clic se hizo, se propaga hasta el <form> y ejecuta el manejador.

En el manejador form.onclick:

- this (=event.currentTarget) es el elemento <form>, porque el manejador se ejecutó en él.
- event.target es el elemento actual dentro de el formulario al que se le hizo clic.


[da click en el enlace para ver el ejemplo](http://www.limni.net)