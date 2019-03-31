# Datos Entrega 2
En el `zip` se encuentran tres carpetas:

- `comun` : Contiene todos los datos compartidos entre ambos grupos. Esto significa que ambos grupos deben importar estos datos a sus bases de datos correspondientes. Los archivos al interior son los siguientes:
	
	- `usuario.csv` : Contiene los usuarios de las aplicaciones correspondientes. Estos tienen `uid` que corresponde a un ID único que posee cada usuario de la aplicación. También poseen los siguientes datos (que pueden no ser únicos): `nombre`, `correo`, `nacimiento` y `nacionalidad`

	- `region.csv`: Corresponde a las regiones de Chile, cada una con un `rid` único, así como un `nombre` y `descripcion`.

- `impar`: En esta carpeta se encuentran datos que deben importar sólo el grupo impar. Los archivos al interior son los siguientes:
	- `agencia_agenciaregion_tour.csv` : Contiene la información de las agencias, y regiones asociadas a cada tour. Los datos de las agencias son: `nombre` ,`direccion` y `telefono`. Cada agencia que existe en el sistema tiene un `aid` único, sin embrago el csv puede contener `aid` duplicados dado que hay al menos un tour por cada presencia de la agencia en una región. El archivo cuenta además con un `rid` por cada tour en el archivo. Se puede asumir que si existe un tour en una región, este va asociado a una agencia en la misma región. Luego está el `tid` que es un ID único por tour. El resto de las columnas son información asociada a cada tour.

	-`hotel_habitaciones.csv`: Corresponde a todas las habitaciones, asociadas a un hotel. Las primeras 6 columnas son información del hotel donde la habitación se encuentra. Sin embrago, `hid` es la única columna es la única que es única por hotel. El resto de las columnas son información de la habitación, `habid` es el ID único por habitación. Este es único independiente del hotel.
	-`reserva.csv`: corresponde a la información que hay en una reserva. Hay al menos una reserva por habitación. `resvid` es un id único por cada reserva. `fecha1` es la fecha donde comienza la reserva y `fecha2` cuando termina. Puedes asumir que `fecha2` siempre es después de `fecha1`.

	- `restaurante_platos.csv`: Corresponde a los platos asociados a cada restaurante. Las primeras 6 columnas son información del restaurante. `rid` corresponde al ID de la región donde se encuentra el restaurante. `restid` es un ID único por restaurante. El resto de las columnas es información de los platos, con `pid` siendo el ID de cada plato, independiente del restaurante.


- `par`: En esta carpeta se encuentran datos que deben importar sólo el grupo par. Los archivos al interior son los siguientes:

	-`vina_enovina_enoturismo.csv`: Corresponde a la información de cada viña que hay por `enotour`. `rid` corresponde a el ID de la región donde se encuentra la viña recorrida en el tour. Las primeras 5 columnas son información de la viña. `vid` es el ID único por viña. El resto de la información es del tour asociado a la viña. `eid` es el ID único por tour.

	- `vino.csv`: Corresponde a la información de cada vino. `vinoid` es un ID único por vino, y `vid` es un id que relaciona cada vino a una viña.

- `enovino.csv` : Corresponde a una archivo que indica los vinos degustados en cada enotour. Puedes asumir que la viña asociada al vino, es visitada. `eid` es el ID único del `enotour` asociado. `vinoid` es el ID del vino asociado.

- `parques_nacionales_atractivos`: Corresponde a los atractivos en cada parque nacional. Hay al menos un parque nacional por región. Y al menos un atractivo por parque. `aid` es el ID único por atractivo, `pid` es el ID único por parque nacional. Las primeras 6 columnas están asociadas al parque, mientras que el resto es información del atractivo.

- `parques_nacionales_senderos`: Corresponde a los senderos en cada parque nacional. Hay al menos un parque nacional por región. Y al menos un atractivo por parque. `sid` es el ID único por sendero, `pid` es el ID único por parque nacional. Las primeras 6 columnas están asociadas al parque, mientras que el resto es información del sendero.

- `registro.csv`: Corresponde al registro de usuarios que han ingresado a casa sendero. Hay al menos un registro por sendero  `regid` es el ID único por registro.


