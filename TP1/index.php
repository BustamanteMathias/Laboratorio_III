<?PHP

require_once "./entidades/eContinente.php";
require_once "./entidades/ePais.php";
require_once "./entidades/eEstado.php";

require_once __DIR__ .'/composer/vendor/autoload.php';

/** 
 * // ---> C O N T I N E N T E S
 * 
 * $Continente  = new Continente("asia");           // CREA UN CONTINENTE CON SUS PAISES
 * $Continentes = new Continente();                 // CREA UNA LISTA DE TODOS LOS CONTINENTES CON TODOS LOS PAISES
 * 
 * $Continente->GetAllPaises();                     // LISTA TODOS LOS PAISES DE ESE CONTINENTE
 * $Continente->GetPais("Afghanistan");             // LISTA UN PAIS ESPECIFICO DE ESE CONTINENTE
*/

/** 
 * // ---> P A I S E S
 * 
 * $Pais = new Pais("Argentina");                   // INSTANCIA UN PAIS CON TODA SU INFORMACION
 * echo $Pais->GetInfo();                           // LLAMA AL METODO QUE INTERNAMENTE USA EL PARENT PARA TOMAR LA INFO DEL PAIS
*/

/**
 * // ---> E S T A D O S 
 * 
 * $Estado = new Estado("Buenos Aires");            // INSTANCIA TODA LA INFORMACION DE SU PAIS RECIBIENDO SU CAPITAL
 * echo json_encode($Estado->GetInfoEstado());      // LISTADO DE INFORMACION DEL ESTADO
 */

 /**
  * // ---> M E T O D O  D E  C L A S E
  * 
  * Continente :: All();                            // LISTA TDOS LOS PAISES CON TODOS SUS CONTINENTES
  */

?>

