<?php
include("conexion.php");
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$sql = "select * from FlujoProceso ";
$sql.= "where Flujo='$flujo' and Proceso='$proceso'";
$res=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($res);
$procesoSig=$fila['ProcesoSiguiente'];
$pantalla=$fila['Pantalla'];
$pantalla.=".inc.php";
?>

<?php include('header.php') ?>
    <div class="body">
        <div class="seccion">
            <div class="separacion">
                <form>
                    <input type="hidden" name="flujo" value="<?php echo $flujo ?>">
                    <input type="hidden" name="proceso" value="<?php echo $procesoSig ?>">
                    <input type="submit" name="Siguiente" value="Siguiente">
                </form>
                <?php include("pantallas/$pantalla")?>
            </div>
            <div class="separacion">
                <h2>Visión FCPN</h2>
                <p>La visión de la FCPN es ser una facultad de excelencia reconocida internacionalmente, que lidera la transformación científica y tecnológica del país. (Segundo Congreso FCPN, 2016)</p>
            </div>
            <div class="separacion">
                <h2>Objetivo General</h2>
                <p>Generar conocimiento reflexivo y crítico enmarcado en las líneas de investigación de la FCPN, para la formación profesional que responda al contexto socio-político local, regional, nacional e internacional, a través de la difusión e innovación que aporten a la solución de las necesidades de la sociedad en su conjunto.</p>
            </div>
        </div>
        <?php include('menu.php') ?>
    </div>
<?php include('footer.php') ?>
