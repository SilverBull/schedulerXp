 <?php
    include '../../../config.php';

    $result = array();

    $result['Codice cliente'] = 1;
    $result['Descrizione cliente'] = "WestSud s.r.l.";
    $result['Numero Progetto'] = 1;
    $result['Data consegna prevista'] = '2020-12-30';
    $result['Note'] = "Note progetto 1";
    $result['Componenti'][1]['Codice'] = 0;
    $result['Componenti'][1]['Descrizione'] = "Descrizione componente 2";
    $result['Componenti'][1]['Quantita'] = 12;
    $result['Componenti'][1]['Data consegna prevista'] = '2020-12-05';
    $result['Componenti'][1]['Data consegna effettiva'] = '2020-12-03';
    $result['Componenti'][1]['Note'] = 'Note componente 1';
    $result['Componenti'][1]['Codice Dato tecnico'] = 3;
    $result['Componenti'][1]['Descrizione Dato tecnico'] = "Descrizione dato tecnico 3";

    $result['Componenti'][1]['Lavorazioni'][0]['Attivita n.'] = 0;
    $result['Componenti'][1]['Lavorazioni'][0]['Codice lavorazione'] = 0;
    $result['Componenti'][1]['Lavorazioni'][0]['Descrizione lavorazione'] = "Invio reference/modelli/schemi";
    $result['Componenti'][1]['Lavorazioni'][0]['Ore lavorazione'] = 1;
    $result['Componenti'][1]['Lavorazioni'][0]['Dipendenza da'] = "";

    $result['Componenti'][1]['Lavorazioni'][0]['Settore']['Codice settore'] = 0;
    $result['Componenti'][1]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
    $result['Componenti'][1]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][1]['Attivita n.'] = 1;
    $result['Componenti'][1]['Lavorazioni'][1]['Codice lavorazione'] = 1;
    $result['Componenti'][1]['Lavorazioni'][1]['Descrizione lavorazione'] = "Copy Medica";
    $result['Componenti'][1]['Lavorazioni'][1]['Ore lavorazione'] = 6;
    $result['Componenti'][1]['Lavorazioni'][1]['Dipendenza da'][1] = "0 - Invio reference/modelli/schemi";

    $result['Componenti'][1]['Lavorazioni'][1]['Settore']['Codice settore'] = 1;
    $result['Componenti'][1]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "MEDICA";
    $result['Componenti'][1]['Lavorazioni'][1]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][2]['Attivita n.'] = 2;
    $result['Componenti'][1]['Lavorazioni'][2]['Codice lavorazione'] = 2;
    $result['Componenti'][1]['Lavorazioni'][2]['Descrizione lavorazione'] = "Revisione digital";
    $result['Componenti'][1]['Lavorazioni'][2]['Ore lavorazione'] = 0;
    $result['Componenti'][1]['Lavorazioni'][2]['Dipendenza da'][1] = "1 - Copy medica";

    $result['Componenti'][1]['Lavorazioni'][2]['Settore']['Codice settore'] = 2;
    $result['Componenti'][1]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "DIGITAL";
    $result['Componenti'][1]['Lavorazioni'][2]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][3]['Attivita n.'] = 3;
    $result['Componenti'][1]['Lavorazioni'][3]['Codice lavorazione'] = 3;
    $result['Componenti'][1]['Lavorazioni'][3]['Descrizione lavorazione'] = "Invio al cliente";
    $result['Componenti'][1]['Lavorazioni'][3]['Ore lavorazione'] = 0;
    $result['Componenti'][1]['Lavorazioni'][3]['Dipendenza da'][1] = "2 - Revisione digital";

    $result['Componenti'][1]['Lavorazioni'][3]['Settore']['Codice settore'] = "";
    $result['Componenti'][1]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "";
    $result['Componenti'][1]['Lavorazioni'][3]['Settore']['Flag'] = "Esterno";

    $result['Componenti'][1]['Lavorazioni'][4]['Attivita n.'] = 4;
    $result['Componenti'][1]['Lavorazioni'][4]['Codice lavorazione'] = 4;
    $result['Componenti'][1]['Lavorazioni'][4]['Descrizione lavorazione'] = "Grafica (rivista JCMT cartace)";
    $result['Componenti'][1]['Lavorazioni'][4]['Ore lavorazione'] = 12;
    $result['Componenti'][1]['Lavorazioni'][4]['Dipendenza da'][1] = "3 - Invio al cliente";

    $result['Componenti'][1]['Lavorazioni'][4]['Settore']['Codice settore'] = 4;
    $result['Componenti'][1]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
    $result['Componenti'][1]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][5]['Attivita n.'] = 5;
    $result['Componenti'][1]['Lavorazioni'][5]['Codice lavorazione'] = 5;
    $result['Componenti'][1]['Lavorazioni'][5]['Descrizione lavorazione'] = "Proof (rivista JCMT)";
    $result['Componenti'][1]['Lavorazioni'][5]['Ore lavorazione'] = 3;
    $result['Componenti'][1]['Lavorazioni'][5]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";

    $result['Componenti'][1]['Lavorazioni'][5]['Settore']['Codice settore'] = 4;
    $result['Componenti'][1]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
    $result['Componenti'][1]['Lavorazioni'][5]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][6]['Attivita n.'] = 6;
    $result['Componenti'][1]['Lavorazioni'][6]['Codice lavorazione'] = 6;
    $result['Componenti'][1]['Lavorazioni'][6]['Descrizione lavorazione'] = "Grafica (rivista digitale)";
    $result['Componenti'][1]['Lavorazioni'][6]['Ore lavorazione'] = 6;
    $result['Componenti'][1]['Lavorazioni'][6]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
    $result['Componenti'][1]['Lavorazioni'][6]['Dipendenza da'][2] = "5 - Proof (rivista JCMT)";

    $result['Componenti'][1]['Lavorazioni'][6]['Settore']['Codice settore'] = 4;
    $result['Componenti'][1]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
    $result['Componenti'][1]['Lavorazioni'][6]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][7]['Attivita n.'] = 7;
    $result['Componenti'][1]['Lavorazioni'][7]['Codice lavorazione'] = 7;
    $result['Componenti'][1]['Lavorazioni'][7]['Descrizione lavorazione'] = "Proof (rivista JCMT)";
    $result['Componenti'][1]['Lavorazioni'][7]['Ore lavorazione'] = 1;
    $result['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
    $result['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][2] = "5 - Proof (rivista JCMT)";
    $result['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][3] = "6 - Grafica rivista digitale";

    $result['Componenti'][1]['Lavorazioni'][7]['Settore']['Codice settore'] = 4;
    $result['Componenti'][1]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
    $result['Componenti'][1]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][8]['Attivita n.'] = 8;
    $result['Componenti'][1]['Lavorazioni'][8]['Codice lavorazione'] = 8;
    $result['Componenti'][1]['Lavorazioni'][8]['Descrizione lavorazione'] = "Controllo qualità";
    $result['Componenti'][1]['Lavorazioni'][8]['Ore lavorazione'] = 1;
    $result['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
    $result['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][2] = "5 - Proof (rivista JCMT)";
    $result['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][3] = "6 - Grafica (rivista digitale)";
    $result['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][4] = "7 - Proof (rivista JCMT)";

    $result['Componenti'][1]['Lavorazioni'][8]['Settore']['Codice settore'] = 6;
    $result['Componenti'][1]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "DIGITAL";
    $result['Componenti'][1]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

    $result['Componenti'][1]['Lavorazioni'][9]['Attivita n.'] = 9;
    $result['Componenti'][1]['Lavorazioni'][9]['Codice lavorazione'] = 9;
    $result['Componenti'][1]['Lavorazioni'][9]['Descrizione lavorazione'] = "Invio al cliente";
    $result['Componenti'][1]['Lavorazioni'][9]['Ore lavorazione'] = "";
    $result['Componenti'][1]['Lavorazioni'][9]['Dipendenza da'][1] = "8 - Controllo qualità";

    $result['Componenti'][1]['Lavorazioni'][9]['Settore']['Codice settore'] = 7;
    $result['Componenti'][1]['Lavorazioni'][9]['Settore']['Descrizione settore'] = "";
    $result['Componenti'][1]['Lavorazioni'][9]['Settore']['Flag'] = "Esterno";

    echo json_encode($result);
    header('Content-Type: application/json');

    ?>