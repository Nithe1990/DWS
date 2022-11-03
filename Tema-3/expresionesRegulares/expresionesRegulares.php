<?php
    $cadena = 'Hoy hace muy buen día y hay nubes';
    $patron = '/hace/';
    echo "<br> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);

    $patron = '/ha/';
    echo "<br> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);

    $patron = '/ha/.\s/';
    echo "<br> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);

    $patron = '/h[o|a]y/';
    echo "<br> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);

    $mes = 'Noviembre';
    $mes1 = 'November';
    $mes2 = 'Nov.';
    $patron = '/^Nov[.|ember|iembre]/';

    echo "<br> Cadena: " .$mes." y patrón: " .$patron."Match: ". preg_match($patron,$mes);
    echo "<br> Cadena: " .$mes1." y patrón: " .$patron."Match: ". preg_match($patron,$mes1);
    echo "<br> Cadena: " .$mes2." y patrón: " .$patron."Match: ". preg_match($patron,$mes2);

    $patron = "/log[0-9]?.log/";
    $cadena = 'log.log';
    $cadena1 = 'log1.log';
    $cadena2 = 'log125.log';

    echo "<br/> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);
    echo "<br/> Cadena: " .$cadena1." y patrón: " .$patron."Match: ". preg_match($patron,$cadena1);
    echo "<br/> Cadena: " .$cadena2." y patrón: " .$patron."Match: ". preg_match($patron,$cadena2);

    $patron = "/[A-Z]{2}[0-9]{2}(\s)?[0-9]{4}(\s)?[0-9]{4}(\s)?[0-9]{2}(\s)?[0-9]{10}/";
    $cadena = 'ES0000000000000000000000';
    $cadena1 = 'ES00 0000 0000 00 0000000000';
    echo "<br/> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);
    echo "<br/> Cadena: " .$cadena1." y patrón: " .$patron."Match: ". preg_match($patron,$cadena1);

    //número entre 0 y 999
    $patron = "/^\d{1,3}$/";
    $cadena = '0';
    $cadena1 = 'a';
    $cadena2 = "1000";
    $cadena3 = "236";
    echo "<br/> Cadena: " .$cadena." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);
    echo "<br/> Cadena: " .$cadena1." y patrón: " .$patron."Match: ". preg_match($patron,$cadena1);
    echo "<br/> Cadena: " .$cadena2." y patrón: " .$patron."Match: ". preg_match($patron,$cadena2);
    echo "<br/> Cadena: " .$cadena3." y patrón: " .$patron."Match: ". preg_match($patron,$cadena3);

    //
    $patron = '/^<\/?\D+\d*>/';
    $cadena = "<html>";
    $cadena1 = "</html>";
    echo "<br/> Cadena: " .str_replace('<',"&lt;",$cadena)." y patrón: " .$patron."Match: ". preg_match($patron,$cadena);
    echo "<br/> Cadena: " .$cadena1." y patrón: " .$patron."Match: ". preg_match($patron,$cadena1);
?>