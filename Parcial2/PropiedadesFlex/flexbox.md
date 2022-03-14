# FlexBox
Flexbox es un sistema de elementos flexibles que llega con la idea de olvidar estos mecanismos y acostumbrarnos a una mecánica más potente, limpia y personalizable, en la que los elementos HTML se adaptan y colocan automáticamente y es más fácil personalizar los diseños. Está especialmente diseñado para crear, mediante CSS, estructuras de una sóla dimensión.

## Conceptos
Para empezar a utilizar flexbox lo primero que debemos hacer es conocer algunos de los elementos básicos de este nuevo esquema, que son los siguientes:
![error](LloveraARo/Parcial2/PropiedadesFlex/conceptos.png)
* **Contenedor:** Es el elemento padre que tendrá en su interior cada uno de los ítems flexibles. Observa que al contrario que muchas otras estructuras CSS, por norma general, en Flex establecemos las propiedades al elemento padre.

    * *Eje principal:* Los contenedores flexibles tendrán una orientación principal específica. Por defecto, es en horizontal (en fila).
    * *Eje secundario:* De la misma forma, los contenedores flexibles tendrán una orientación secundaria, perpendicular a la principal. Si la principal es en horizontal, la secundaria será en vertical, y viceversa.

* **Ítem:** Cada uno de los hijos flexibles que tendrá el contenedor en su interior.
Una vez tenemos claro esto, imaginemos el siguiente escenario:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/1.png)

Para activar el modo flexbox, hemos utilizado sobre el elemento contenedor la propiedad display que vimos en Tipos de elementos, y especificar el valor flex o inline-flex (dependiendo de como queramos que se comporte el contenedor):
![error](LloveraARo/Parcial2/PropiedadesFlex/images/2.png)

Por defecto, y sólo con esto, observaremos que los elementos se disponen todos sobre una misma línea. Esto ocurre porque estamos utilizando el modo flexbox y estaremos trabajando con ítems flexibles básicos, garantizando que no se desbordarán ni mostrarán los problemas que, por ejemplo, tienen los porcentajes sobre elementos que no utilizan flexbox.

## Direccion de los ejes
Existen dos propiedades principales para manipular la dirección y comportamiento de los ítems a lo largo del eje principal del contenedor. Son las siguientes:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/3.png)

Mediante la propiedad flex-direction podemos modificar la dirección del eje principal del contenedor para que se oriente en horizontal (por defecto) o en vertical. Además, también podemos incluir el sufijo -reverse para indicar que coloque los ítems en orden inverso.
![error](LloveraARo/Parcial2/PropiedadesFlex/images/4.png)

Esto nos permite tener un control muy alto sobre el orden de los elementos en una página. Veamos la aplicación de estas propiedades sobre el ejemplo anterior, para modificar el flujo del eje principal del contenedor:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/5.png)

Por otro lado, existe otra propiedad llamada flex-wrap con la que podemos especificar el comportamiento del contenedor respecto a evitar que se desborde (nowrap, valor por defecto) o permitir que lo haga, en cuyo caso, estaríamos hablando de un contenedor flexbox multilinea.
![error](LloveraARo/Parcial2/PropiedadesFlex/images/6.png)

## Propiedades de alineacion
Ahora que tenemos un control básico del contenedor de estos ítems flexibles, necesitamos conocer las propiedades existentes dentro de flexbox para disponer los ítems dependiendo de nuestro objetivo. Vamos a echar un vistazo a 4 propiedades interesantes para ello, la primera de ellas actua en el eje principal, mientras que el resto en el eje secundario:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/7.png)

De esta pequeña lista, hay que centrarse en primer lugar en la primera y la tercera propiedad, que son las más importantes (las otras dos son casos particulares que explicaremos más adelante):
* justify-content: Se utiliza para alinear los ítems del eje principal (por defecto, el horizontal).
* align-items: Usada para alinear los ítems del eje secundario (por defecto, el vertical).

## Sobre el eje principal
La primera propiedad, justify-content, sirve para colocar los ítems de un contenedor mediante una disposición concreta a lo largo del eje principal:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/8.png)
Una vez entendido este caso, debemos atender a la propiedad align-content, que es un caso particular del anterior. Nos servirá cuando estemos tratando con un contenedor flex multilinea, que es un contenedor en el que los ítems no caben en el ancho disponible, y por lo tanto, el eje principal se divide en múltiples líneas (por ejemplo, usando flex-wrap: wrap).

De esta forma, align-content servirá para alinear cada una de las líneas del contenedor multilinea. Los valores que puede tomar son los siguientes:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/9.png)

## Propiedades de hijos
A excepción de la propiedad align-self, todas las propiedades que hemos visto hasta ahora se aplican sobre el elemento contenedor. Las siguientes propiedades, sin embargo, se aplican sobre los ítems hijos. Echemos un vistazo:
![error](LloveraARo/Parcial2/PropiedadesFlex/images/10.png)
En primer lugar, tenemos la propiedad flex-grow para indicar el factor de crecimiento de los ítems en el caso de que no tengan un ancho específico. Por ejemplo, si con flex-grow indicamos un valor de 1 a todos sus ítems, tendrían el mismo tamaño cada uno de ellos. Pero si colocamos un valor de 1 a todos los elementos, salvo a uno de ellos, que le indicamos 2, ese ítem será más grande que los anteriores. Los ítems a los que no se le especifique ningún valor, tendrán por defecto valor de 0.

En segundo lugar, tenemos la propiedad flex-shrink que es la opuesta a flex-grow. Mientras que la anterior indica un factor de crecimiento, flex-shrink hace justo lo contrario, aplica un factor de decrecimiento. De esta forma, los ítems que tengan un valor numérico más grande, serán más pequeños, mientras que los que tengan un valor numérico más pequeño serán más grandes, justo al contrario de como funciona la propiedad flex-grow.

Por último, tenemos la propiedad flex-basis, que define el tamaño por defecto (de base) que tendrán los ítems antes de aplicarle la distribución de espacio. Generalmente, se aplica un tamaño (unidades, porcentajes, etc...), pero también se puede aplicar la palabra clave content que ajusta automáticamente el tamaño al contenido del ítem, que es su valor por defecto.


## Fuente de informacion:
https://lenguajecss.com/css/maquetacion-y-colocacion/flexbox/