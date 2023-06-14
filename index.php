<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <header class="row p-3 bg-black align-items-center">
        <img class="col-2" src="img/logo.webp" alt="logo">
        <h1 class="col-5 text-white">Viandas POP</h1>
    </header>
    
    <main>
        <form class="bg-white col-10 mx-auto bg-opacity-75 p-3" action="" method="POST">
            <h2>Formulario</h2>
            <div>
                <label for="">Email</label>
                <input type="email">
            </div>
            <div>
                <h3>Tipo de viandas</h3>
                <label for="dieta">Dieta (150 kcal)</label>
                <input type="radio" name="tipo" id="dieta" value="dieta" checked>
                <label for="normal">Normal (300 kcal)</label>
                <input type="radio" name="tipo" id="normal" value="normal">
                <label for="pro">Pro (500 kcal)</label>
                <input type="radio" name="tipo" id="pro" value="pro">
            </div>
    
            <div>
                <h3>Cantidad de viandas</h3>
                <select name="cantidad" id="cantidad">
                </select> 

                <p>
                    Por cada 14 viandas se realiza un 2% de descuento (no aplicable a viandas de tipo dieta)
                </p>
            </div>
            
            <div class="row justify-content-around align-items-center">
                <p class="col-5">
                    Debe seleccionar la mitad de viandas entre carnicos y vegetarianos. <br>
                    Cada vianda no se pueden repetir mas de 4 veces
                </p>
        
                <div class="carnicos col-3 bg-danger p-3">
                    <h3>Carnicos</h3>
                    <table>
                        <tr>
                            <td>Milanesa napolitana con papas</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Ravioles de Pollo con salsa</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Carne al Horno con verduras</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tarta de atun</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Empanadas de carne</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fideos con albondigas</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tarta de Jamon y queso</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pastel de papa</td>
                            <td>
                                <select name="carnicos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="vegetarianos col-3 bg-success p-3">
                    <h3>Vegetarianos</h3>
                    <table>
                        <tr>
                            <td>Milanesa Seitan con ensalada</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nuke de verduras</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Guiso de lentejas vegano</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tarta de verduras</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Empanadas de humita</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Piza integral</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tortilla de papa</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Wok con tofu</td>
                            <td>
                                <select name="vegetarianos[]"  class="cargar">
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div>
                <label for="">Envio a:</label>
                <select id="envio">
                    <option value="1500">San justo</option>
                    <option value="2500">Laferrere</option>
                    <option value="2000">Gonzales Catan</option>
                    <option value="3000">Virrey del pino</option>
                    <option value="2000">Isidro casanova</option>
                </select>
            </div>
            <input type="submit" id="calcular" value="Calcular">
        </form>    
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>