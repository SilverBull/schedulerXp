<?php

$result = array();

$result[0]['Codice cliente'] = 1;
$result[0]['Descrizione cliente'] = "WestSud s.r.l.";
$result[0]['Numero Progetto'] = 1;
$result[0]['Data consegna prevista'] = '2021-02-02';
$result[0]['Note'] = "Note progetto 1";
$result[0]['Componenti'][1]['Codice'] = 0;
$result[0]['Componenti'][1]['Descrizione'] = "Articoli redaz_rivista JCMT";
$result[0]['Componenti'][1]['Brief'] = "Testata registrata di Momento Medico
Saranno coinvolti 3 KOL (solo firma): Specialista in Otorinolaringoiatria, Specialista in Medicina Interna, Specialista in Immunologia
Sono previste 3 pubblicazioni di Journal of Clinical Medicine and Therapy ciascuna contenente i 2 articoli elaborati dalla ns medica.
Numero di copie 1.500 copie cad. + QrCode per l’accesso ad un caso clinico interattivo";
$result[0]['Componenti'][1]['Quantita'] = 12;
$result[0]['Componenti'][1]['Data consegna prevista'] = '2020-12-05';
$result[0]['Componenti'][1]['Data consegna effettiva'] = '2020-12-03';
$result[0]['Componenti'][1]['Note'] = 'Note componente 1';
$result[0]['Componenti'][1]['Codice Dato tecnico'] = 3;
$result[0]['Componenti'][1]['Descrizione Dato tecnico'] = "Descrizione dato tecnico 3";

$result[0]['Componenti'][1]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[0]['Componenti'][1]['Lavorazioni'][0]['Codice lavorazione'] = 0;
$result[0]['Componenti'][1]['Lavorazioni'][0]['Descrizione lavorazione'] = "Invio reference/modelli/schemi";
$result[0]['Componenti'][1]['Lavorazioni'][0]['Ore lavorazione'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[0]['Componenti'][1]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][1]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][1]['Codice lavorazione'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][1]['Descrizione lavorazione'] = "Copy Medica";
$result[0]['Componenti'][1]['Lavorazioni'][1]['Ore lavorazione'] = 6;
$result[0]['Componenti'][1]['Lavorazioni'][1]['Dipendenza da'][1] = "0 - Invio reference/modelli/schemi";

$result[0]['Componenti'][1]['Lavorazioni'][1]['Settore']['Codice settore'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "MEDICA";
$result[0]['Componenti'][1]['Lavorazioni'][1]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][2]['Codice lavorazione'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][2]['Descrizione lavorazione'] = "Revisione digital";
$result[0]['Componenti'][1]['Lavorazioni'][2]['Ore lavorazione'] = 0;
$result[0]['Componenti'][1]['Lavorazioni'][2]['Dipendenza da'][1] = "1 - Copy medica";

$result[0]['Componenti'][1]['Lavorazioni'][2]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][1]['Lavorazioni'][2]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][3]['Codice lavorazione'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][3]['Descrizione lavorazione'] = "Invio al cliente";
$result[0]['Componenti'][1]['Lavorazioni'][3]['Ore lavorazione'] = 0;
$result[0]['Componenti'][1]['Lavorazioni'][3]['Dipendenza da'][1] = "2 - Revisione digital";

$result[0]['Componenti'][1]['Lavorazioni'][3]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][1]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][1]['Lavorazioni'][3]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][1]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[0]['Componenti'][1]['Lavorazioni'][4]['Codice lavorazione'] = 4;
$result[0]['Componenti'][1]['Lavorazioni'][4]['Descrizione lavorazione'] = "Grafica (rivista JCMT cartace)";
$result[0]['Componenti'][1]['Lavorazioni'][4]['Ore lavorazione'] = 12;
$result[0]['Componenti'][1]['Lavorazioni'][4]['Dipendenza da'][1] = "3 - Invio al cliente";

$result[0]['Componenti'][1]['Lavorazioni'][4]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][1]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[0]['Componenti'][1]['Lavorazioni'][5]['Codice lavorazione'] = 5;
$result[0]['Componenti'][1]['Lavorazioni'][5]['Descrizione lavorazione'] = "Proof (rivista JCMT)";
$result[0]['Componenti'][1]['Lavorazioni'][5]['Ore lavorazione'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][5]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";

$result[0]['Componenti'][1]['Lavorazioni'][5]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][1]['Lavorazioni'][5]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][6]['Attivita n.'] = 6;
$result[0]['Componenti'][1]['Lavorazioni'][6]['Codice lavorazione'] = 6;
$result[0]['Componenti'][1]['Lavorazioni'][6]['Descrizione lavorazione'] = "Grafica (rivista digitale)";
$result[0]['Componenti'][1]['Lavorazioni'][6]['Ore lavorazione'] = 6;
$result[0]['Componenti'][1]['Lavorazioni'][6]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
$result[0]['Componenti'][1]['Lavorazioni'][6]['Dipendenza da'][2] = "4 - Proof (rivista JCMT)";

$result[0]['Componenti'][1]['Lavorazioni'][6]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][1]['Lavorazioni'][6]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][7]['Attivita n.'] = 7;
$result[0]['Componenti'][1]['Lavorazioni'][7]['Codice lavorazione'] = 7;
$result[0]['Componenti'][1]['Lavorazioni'][7]['Descrizione lavorazione'] = "Proof (rivista JCMT)";
$result[0]['Componenti'][1]['Lavorazioni'][7]['Ore lavorazione'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
$result[0]['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][2] = "4 - Proof (rivista JCMT)";
$result[0]['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'][3] = "4 - Grafica rivista digitale";

$result[0]['Componenti'][1]['Lavorazioni'][7]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][1]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][1]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][8]['Attivita n.'] = 8;
$result[0]['Componenti'][1]['Lavorazioni'][8]['Codice lavorazione'] = 8;
$result[0]['Componenti'][1]['Lavorazioni'][8]['Descrizione lavorazione'] = "Controllo qualità";
$result[0]['Componenti'][1]['Lavorazioni'][8]['Ore lavorazione'] = 1;
$result[0]['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][1] = "4 - Grafica (rivista JCMT cartace)";
$result[0]['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][2] = "4 - Proof (rivista JCMT)";
$result[0]['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][3] = "4 - Grafica (rivista digitale)";
$result[0]['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'][4] = "4 - Proof (rivista JCMT)";

$result[0]['Componenti'][1]['Lavorazioni'][8]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][1]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][1]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][1]['Lavorazioni'][9]['Attivita n.'] = 9;
$result[0]['Componenti'][1]['Lavorazioni'][9]['Codice lavorazione'] = 9;
$result[0]['Componenti'][1]['Lavorazioni'][9]['Descrizione lavorazione'] = "Invio al cliente";
$result[0]['Componenti'][1]['Lavorazioni'][9]['Ore lavorazione'] = "";
$result[0]['Componenti'][1]['Lavorazioni'][9]['Dipendenza da'][1] = "6 - Controllo qualità";

$result[0]['Componenti'][1]['Lavorazioni'][9]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][1]['Lavorazioni'][9]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][1]['Lavorazioni'][9]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][2]['Codice'] = 1;
$result[0]['Componenti'][2]['Descrizione'] = "CASI CLINICI INTERATTIVI";
$result[0]['Componenti'][2]['Brief'] = "Realizzazione di 3 casi clinici interattivi, uno per ogni pubblicazione, che saranno veicolati in modalità interattiva in HTML5 con pulsanti di navigazione e quiz caricati sul sito della rivista. Ogni caso clinico sarà costituito da 6 schermate, di cui 2 con
domande a risposta multipla e 2 con i razionali delle risposte";
$result[0]['Componenti'][2]['Quantita'] = 9;
$result[0]['Componenti'][2]['Data consegna prevista'] = '2021-01-06';
$result[0]['Componenti'][2]['Data consegna effettiva'] = '2021-01-07';
$result[0]['Componenti'][2]['Note'] = 'Note componente 2';
$result[0]['Componenti'][2]['Codice Dato tecnico'] = 2;
$result[0]['Componenti'][2]['Descrizione Dato tecnico'] = "Descrizione dato tecnico 2";

$result[0]['Componenti'][2]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[0]['Componenti'][2]['Lavorazioni'][0]['Codice lavorazione'] = 0;
$result[0]['Componenti'][2]['Lavorazioni'][0]['Descrizione lavorazione'] = "Invio reference/modelli/schemi";
$result[0]['Componenti'][2]['Lavorazioni'][0]['Ore lavorazione'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[0]['Componenti'][2]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][2]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][2]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][1]['Codice lavorazione'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][1]['Descrizione lavorazione'] = "Copy Medica";
$result[0]['Componenti'][2]['Lavorazioni'][1]['Ore lavorazione'] = 4;
$result[0]['Componenti'][2]['Lavorazioni'][1]['Dipendenza da'] = "0 - Invio reference/modelli/schemi";

$result[0]['Componenti'][2]['Lavorazioni'][1]['Settore']['Codice settore'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "MEDICA";
$result[0]['Componenti'][2]['Lavorazioni'][1]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][2]['Codice lavorazione'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][2]['Descrizione lavorazione'] = "Invio al cliente per approvazione";
$result[0]['Componenti'][2]['Lavorazioni'][2]['Ore lavorazione'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][2]['Dipendenza da'] = "1 - Copy Medica";

$result[0]['Componenti'][2]['Lavorazioni'][2]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][2]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][2]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[0]['Componenti'][2]['Lavorazioni'][3]['Codice lavorazione'] = 3;
$result[0]['Componenti'][2]['Lavorazioni'][3]['Descrizione lavorazione'] = "Grafica (Prototipo UI e UX)";
$result[0]['Componenti'][2]['Lavorazioni'][3]['Ore lavorazione'] = 9;
$result[0]['Componenti'][2]['Lavorazioni'][3]['Dipendenza da'] = "2 - Invio al cliente per approvazione";

$result[0]['Componenti'][2]['Lavorazioni'][3]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][2]['Lavorazioni'][3]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[0]['Componenti'][2]['Lavorazioni'][4]['Codice lavorazione'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][4]['Descrizione lavorazione'] = "Invio al cliente per approvazione";
$result[0]['Componenti'][2]['Lavorazioni'][4]['Ore lavorazione'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][4]['Dipendenza da'] = "3 - Grafica (Prototipo UI e UX)";

$result[0]['Componenti'][2]['Lavorazioni'][4]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][4]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][2]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[0]['Componenti'][2]['Lavorazioni'][5]['Codice lavorazione'] = 4;
$result[0]['Componenti'][2]['Lavorazioni'][5]['Descrizione lavorazione'] = "Sviluppo";
$result[0]['Componenti'][2]['Lavorazioni'][5]['Ore lavorazione'] = 11;
$result[0]['Componenti'][2]['Lavorazioni'][5]['Dipendenza da'] = "2 - Invio al cliente per approvazione";

$result[0]['Componenti'][2]['Lavorazioni'][5]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][2]['Lavorazioni'][5]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][6]['Attivita n.'] = 6;
$result[0]['Componenti'][2]['Lavorazioni'][6]['Codice lavorazione'] = 5;
$result[0]['Componenti'][2]['Lavorazioni'][6]['Descrizione lavorazione'] = "Revisione digital";
$result[0]['Componenti'][2]['Lavorazioni'][6]['Ore lavorazione'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][6]['Dipendenza da'] = "4 - Sviluppo";

$result[0]['Componenti'][2]['Lavorazioni'][6]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][2]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][2]['Lavorazioni'][6]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][7]['Attivita n.'] = 7;
$result[0]['Componenti'][2]['Lavorazioni'][7]['Codice lavorazione'] = 6;
$result[0]['Componenti'][2]['Lavorazioni'][7]['Descrizione lavorazione'] = "Proof Reading";
$result[0]['Componenti'][2]['Lavorazioni'][7]['Ore lavorazione'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][7]['Dipendenza da'] = "5 - Revisione digital";

$result[0]['Componenti'][2]['Lavorazioni'][7]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][2]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][8]['Attivita n.'] = 8;
$result[0]['Componenti'][2]['Lavorazioni'][8]['Codice lavorazione'] = 7;
$result[0]['Componenti'][2]['Lavorazioni'][8]['Descrizione lavorazione'] = "Controllo qualità";
$result[0]['Componenti'][2]['Lavorazioni'][8]['Ore lavorazione'] = 1;
$result[0]['Componenti'][2]['Lavorazioni'][8]['Dipendenza da'] = "6 - Proof Reading";

$result[0]['Componenti'][2]['Lavorazioni'][8]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][2]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][2]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][2]['Lavorazioni'][9]['Attivita n.'] = 9;
$result[0]['Componenti'][2]['Lavorazioni'][9]['Codice lavorazione'] = 8;
$result[0]['Componenti'][2]['Lavorazioni'][9]['Descrizione lavorazione'] = "Invio al cliente";
$result[0]['Componenti'][2]['Lavorazioni'][9]['Ore lavorazione'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][9]['Dipendenza da'] = "7 - Controllo qualità";

$result[0]['Componenti'][2]['Lavorazioni'][9]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][9]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][2]['Lavorazioni'][9]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][2]['Lavorazioni'][10]['Attivita n.'] = 10;
$result[0]['Componenti'][2]['Lavorazioni'][10]['Codice lavorazione'] = 9;
$result[0]['Componenti'][2]['Lavorazioni'][10]['Descrizione lavorazione'] = "Pubblicazione sul sito http://www.jcmedt.it/index.php#";
$result[0]['Componenti'][2]['Lavorazioni'][10]['Ore lavorazione'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][10]['Dipendenza da'] = "8 - Invio al cliente";

$result[0]['Componenti'][2]['Lavorazioni'][10]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][2]['Lavorazioni'][10]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][2]['Lavorazioni'][10]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Codice'] = 2;
$result[0]['Componenti'][3]['Descrizione'] = "Newsletter MedTopics 1 CTA";
$result[0]['Componenti'][3]['Brief'] = "Campagna di 3 newsletter su Testata Medtopics, Target :55.000 MMG, presenti su Opendoctor.
Timing: 1 articolo al mese con 1 call to action alla versione digitale della pubblicazione (pdf) + ADV ";
$result[0]['Componenti'][3]['Quantita'] = 15;
$result[0]['Componenti'][3]['Data consegna prevista'] = '2021-01-10';
$result[0]['Componenti'][3]['Data consegna effettiva'] = '2021-01-08';
$result[0]['Componenti'][3]['Note'] = 'Note componente 2';
$result[0]['Componenti'][3]['Codice Dato tecnico'] = 2;
$result[0]['Componenti'][3]['Descrizione Dato tecnico'] = "Elevato contenuto scientifico, contenente 1-2 articoli scientifici su prodotto o area terapeutica con ADV, Banner e RCP.";

$result[0]['Componenti'][3]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[0]['Componenti'][3]['Lavorazioni'][0]['Codice lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][0]['Descrizione lavorazione'] = "Copy";
$result[0]['Componenti'][3]['Lavorazioni'][0]['Ore lavorazione'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[0]['Componenti'][3]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][3]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][1]['Codice lavorazione'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][1]['Descrizione lavorazione'] = "Approvazione word Cliente";
$result[0]['Componenti'][3]['Lavorazioni'][1]['Ore lavorazione'] = "";
$result[0]['Componenti'][3]['Lavorazioni'][1]['Dipendenza da'] = "1 - Copy";

$result[0]['Componenti'][3]['Lavorazioni'][1]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][3]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "REFERENTE";
$result[0]['Componenti'][3]['Lavorazioni'][1]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][3]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][2]['Codice lavorazione'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][2]['Descrizione lavorazione'] = "Grafica (ad ed elementi grafici newsletter Medtopics) + banner ADV";
$result[0]['Componenti'][3]['Lavorazioni'][2]['Ore lavorazione'] = 4;
$result[0]['Componenti'][3]['Lavorazioni'][2]['Dipendenza da'] = "2 - Approvazione word Cliente";

$result[0]['Componenti'][3]['Lavorazioni'][2]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][3]['Lavorazioni'][2]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][3]['Codice lavorazione'] = 4;
$result[0]['Componenti'][3]['Lavorazioni'][3]['Descrizione lavorazione'] = "Revisione testi";
$result[0]['Componenti'][3]['Lavorazioni'][3]['Ore lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][3]['Dipendenza da'] = "3 - Grafica (ad ed elementi grafici newsletter Medtopics) + banner ADV";

$result[0]['Componenti'][3]['Lavorazioni'][3]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][3]['Lavorazioni'][3]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[0]['Componenti'][3]['Lavorazioni'][4]['Codice lavorazione'] = 5;
$result[0]['Componenti'][3]['Lavorazioni'][4]['Descrizione lavorazione'] = "Caricamento articolo online (pdf)";
$result[0]['Componenti'][3]['Lavorazioni'][4]['Ore lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][4]['Dipendenza da'] = "4 - Revisione testi";

$result[0]['Componenti'][3]['Lavorazioni'][4]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][3]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[0]['Componenti'][3]['Lavorazioni'][5]['Codice lavorazione'] = 6;
$result[0]['Componenti'][3]['Lavorazioni'][5]['Descrizione lavorazione'] = "Controllo qualità";
$result[0]['Componenti'][3]['Lavorazioni'][5]['Ore lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][5]['Dipendenza da'] = "5 - Caricamento articolo online (pdf)";

$result[0]['Componenti'][3]['Lavorazioni'][5]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][3]['Lavorazioni'][5]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][6]['Attivita n.'] = 6;
$result[0]['Componenti'][3]['Lavorazioni'][6]['Codice lavorazione'] = 7;
$result[0]['Componenti'][3]['Lavorazioni'][6]['Descrizione lavorazione'] = "Invio al Cliente per OK";
$result[0]['Componenti'][3]['Lavorazioni'][6]['Ore lavorazione'] = 2;
$result[0]['Componenti'][3]['Lavorazioni'][6]['Dipendenza da'] = "6 - Controllo qualità";

$result[0]['Componenti'][3]['Lavorazioni'][6]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][3]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][3]['Lavorazioni'][6]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][3]['Lavorazioni'][7]['Attivita n.'] = 7;
$result[0]['Componenti'][3]['Lavorazioni'][7]['Codice lavorazione'] = 8;
$result[0]['Componenti'][3]['Lavorazioni'][7]['Descrizione lavorazione'] = "Invio al target";
$result[0]['Componenti'][3]['Lavorazioni'][7]['Ore lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][7]['Dipendenza da'] = "7 - Invio al Cliente per OK";

$result[0]['Componenti'][3]['Lavorazioni'][7]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][3]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][3]['Lavorazioni'][8]['Attivita n.'] = 8;
$result[0]['Componenti'][3]['Lavorazioni'][8]['Codice lavorazione'] = 9;
$result[0]['Componenti'][3]['Lavorazioni'][8]['Descrizione lavorazione'] = "Reportistica";
$result[0]['Componenti'][3]['Lavorazioni'][8]['Ore lavorazione'] = 1;
$result[0]['Componenti'][3]['Lavorazioni'][8]['Dipendenza da'] = "8 - Invio al Target";

$result[0]['Componenti'][3]['Lavorazioni'][8]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][3]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][3]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Codice'] = 3;
$result[0]['Componenti'][4]['Descrizione'] = "Newsletter MedTopics 2 CTA";
$result[0]['Componenti'][4]['Brief'] = "Campagna di 3 newsletter su Testata Medtopics, Target :55.000 MMG, presenti su Opendoctor. Timing: 1 articolo al mese con 1 call to action alla versione digitale della pubblicazione e una call to action al caso clinico interattivo";
$result[0]['Componenti'][4]['Quantita'] = 10;
$result[0]['Componenti'][4]['Data consegna prevista'] = '2021-01-20';
$result[0]['Componenti'][4]['Data consegna effettiva'] = '2021-01-17';
$result[0]['Componenti'][4]['Note'] = 'Note componente 3';
$result[0]['Componenti'][4]['Codice Dato tecnico'] = 3;
$result[0]['Componenti'][4]['Descrizione Dato tecnico'] = "Elevato contenuto scientifico, contenente 1-2 articoli scientifici su prodotto o area terapeutica con ADV, Banner e RCP.";

$result[0]['Componenti'][4]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[0]['Componenti'][4]['Lavorazioni'][0]['Codice lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][0]['Descrizione lavorazione'] = "Copy";
$result[0]['Componenti'][4]['Lavorazioni'][0]['Ore lavorazione'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[0]['Componenti'][4]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][4]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][1]['Codice lavorazione'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][1]['Descrizione lavorazione'] = "Approvazione word Cliente";
$result[0]['Componenti'][4]['Lavorazioni'][1]['Ore lavorazione'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][1]['Dipendenza da'] = "1 - Copy";

$result[0]['Componenti'][4]['Lavorazioni'][1]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][1]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][4]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][2]['Codice lavorazione'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][2]['Descrizione lavorazione'] = "Grafica (adv)";
$result[0]['Componenti'][4]['Lavorazioni'][2]['Ore lavorazione'] = 4;
$result[0]['Componenti'][4]['Lavorazioni'][2]['Dipendenza da'] = "2 - Approvazione word Cliente";

$result[0]['Componenti'][4]['Lavorazioni'][2]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][4]['Lavorazioni'][2]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][3]['Codice lavorazione'] = 4;
$result[0]['Componenti'][4]['Lavorazioni'][3]['Descrizione lavorazione'] = "Revisione testi";
$result[0]['Componenti'][4]['Lavorazioni'][3]['Ore lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][3]['Dipendenza da'] = "3 - Grafica (adv)";

$result[0]['Componenti'][4]['Lavorazioni'][3]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][4]['Lavorazioni'][3]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[0]['Componenti'][4]['Lavorazioni'][4]['Codice lavorazione'] = 5;
$result[0]['Componenti'][4]['Lavorazioni'][4]['Descrizione lavorazione'] = "Caricamento articolo online (pdf)";
$result[0]['Componenti'][4]['Lavorazioni'][4]['Ore lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][4]['Dipendenza da'] = "4 - Revisione testi";

$result[0]['Componenti'][4]['Lavorazioni'][4]['Settore']['Codice settore'] = 2;
$result[0]['Componenti'][4]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[0]['Componenti'][4]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[0]['Componenti'][4]['Lavorazioni'][5]['Codice lavorazione'] = 6;
$result[0]['Componenti'][4]['Lavorazioni'][5]['Descrizione lavorazione'] = "Controllo qualità";
$result[0]['Componenti'][4]['Lavorazioni'][5]['Ore lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][5]['Dipendenza da'] = "5 - Caricamento articolo online (pdf)";

$result[0]['Componenti'][4]['Lavorazioni'][5]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][4]['Lavorazioni'][5]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][6]['Attivita n.'] = 6;
$result[0]['Componenti'][4]['Lavorazioni'][6]['Codice lavorazione'] = 7;
$result[0]['Componenti'][4]['Lavorazioni'][6]['Descrizione lavorazione'] = "Invio al Cliente per OK";
$result[0]['Componenti'][4]['Lavorazioni'][6]['Ore lavorazione'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][6]['Dipendenza da'] = "6 - Controllo qualità";

$result[0]['Componenti'][4]['Lavorazioni'][6]['Settore']['Codice settore'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "";
$result[0]['Componenti'][4]['Lavorazioni'][6]['Settore']['Flag'] = "Esterno";

$result[0]['Componenti'][4]['Lavorazioni'][7]['Attivita n.'] = 7;
$result[0]['Componenti'][4]['Lavorazioni'][7]['Codice lavorazione'] = 8;
$result[0]['Componenti'][4]['Lavorazioni'][7]['Descrizione lavorazione'] = "Invio al target";
$result[0]['Componenti'][4]['Lavorazioni'][7]['Ore lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][7]['Dipendenza da'] = "7 - Invio al Cliente per OK";

$result[0]['Componenti'][4]['Lavorazioni'][7]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][4]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

$result[0]['Componenti'][4]['Lavorazioni'][8]['Attivita n.'] = 8;
$result[0]['Componenti'][4]['Lavorazioni'][8]['Codice lavorazione'] = 9;
$result[0]['Componenti'][4]['Lavorazioni'][8]['Descrizione lavorazione'] = "Reportistica";
$result[0]['Componenti'][4]['Lavorazioni'][8]['Ore lavorazione'] = 1;
$result[0]['Componenti'][4]['Lavorazioni'][8]['Dipendenza da'] = "8 - Invio al Target";

$result[0]['Componenti'][4]['Lavorazioni'][8]['Settore']['Codice settore'] = 3;
$result[0]['Componenti'][4]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "DIGITAL";
$result[0]['Componenti'][4]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

$result[1]['Codice cliente'] = 1;
$result[1]['Descrizione cliente'] = "WestSud s.r.l.";
$result[1]['Numero Progetto'] = 2;
$result[1]['Data consegna prevista'] = '2021-03-30';
$result[1]['Note'] = "Note progetto 2";
$result[1]['Componenti'][1]['Codice'] = 0;
$result[1]['Componenti'][1]['Descrizione'] = "Landing Page";
$result[1]['Componenti'][1]['Brief'] = "Si tratta della Landing Page nella quale è possibile visualizzare il Viral Video che sarà fornito dal cliente. Stessa struttura dello storico 20OG0333. ";
$result[1]['Componenti'][1]['Quantita'] = 1;
$result[1]['Componenti'][1]['Data consegna prevista'] = '2021-02-01';
$result[1]['Componenti'][1]['Data consegna effettiva'] = '2021-01-30';
$result[1]['Componenti'][1]['Note'] = 'Note componente 1';
$result[1]['Componenti'][1]['Codice Dato tecnico'] = 3;
$result[1]['Componenti'][1]['Descrizione Dato tecnico'] = "Descrizione dato tecnico 3";

$result[1]['Componenti'][1]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[1]['Componenti'][1]['Lavorazioni'][0]['Codice lavorazione'] = 0;
$result[1]['Componenti'][1]['Lavorazioni'][0]['Descrizione lavorazione'] = "Definizione wireframe (schema) del sito";
$result[1]['Componenti'][1]['Lavorazioni'][0]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[1]['Componenti'][1]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][1]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][1]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][1]['Codice lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][1]['Descrizione lavorazione'] = "Alberatura del sito";
$result[1]['Componenti'][1]['Lavorazioni'][1]['Ore lavorazione'] = "no";
$result[1]['Componenti'][1]['Lavorazioni'][1]['Dipendenza da'] = "0 - Definizione wireframe (schema) del sito";

$result[1]['Componenti'][1]['Lavorazioni'][1]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][1]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][1]['Lavorazioni'][1]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][2]['Codice lavorazione'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][2]['Descrizione lavorazione'] = "Copy medico/Digital";
$result[1]['Componenti'][1]['Lavorazioni'][2]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][2]['Dipendenza da'] = "1 - Alberatura del sito";

$result[1]['Componenti'][1]['Lavorazioni'][2]['Settore']['Codice settore'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "MEDICA";
$result[1]['Componenti'][1]['Lavorazioni'][2]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[1]['Componenti'][1]['Lavorazioni'][3]['Codice lavorazione'] = 3;
$result[1]['Componenti'][1]['Lavorazioni'][3]['Descrizione lavorazione'] = "Approvazione word Cliente";
$result[1]['Componenti'][1]['Lavorazioni'][3]['Ore lavorazione'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][3]['Dipendenza da'] = "2 - Copy medico/Digital";

$result[1]['Componenti'][1]['Lavorazioni'][3]['Settore']['Codice settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][3]['Settore']['Flag'] = "Esterno";

$result[1]['Componenti'][1]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[1]['Componenti'][1]['Lavorazioni'][4]['Codice lavorazione'] = 4;
$result[1]['Componenti'][1]['Lavorazioni'][4]['Descrizione lavorazione'] = "Prototipazione (XD oppure PDF)";
$result[1]['Componenti'][1]['Lavorazioni'][4]['Ore lavorazione'] = 4;
$result[1]['Componenti'][1]['Lavorazioni'][4]['Dipendenza da'] = "3 - Approvazione word Cliente";

$result[1]['Componenti'][1]['Lavorazioni'][4]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][1]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[1]['Componenti'][1]['Lavorazioni'][5]['Codice lavorazione'] = 5;
$result[1]['Componenti'][1]['Lavorazioni'][5]['Descrizione lavorazione'] = "Approvazione design Cliente";
$result[1]['Componenti'][1]['Lavorazioni'][5]['Ore lavorazione'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][5]['Dipendenza da'] = "4 - Prototipazione (XD oppure PDF)";

$result[1]['Componenti'][1]['Lavorazioni'][5]['Settore']['Codice settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][5]['Settore']['Flag'] = "Esterno";

$result[1]['Componenti'][1]['Lavorazioni'][6]['Attivita n.'] = 6;
$result[1]['Componenti'][1]['Lavorazioni'][6]['Codice lavorazione'] = 6;
$result[1]['Componenti'][1]['Lavorazioni'][6]['Descrizione lavorazione'] = "Sviluppo html5";
$result[1]['Componenti'][1]['Lavorazioni'][6]['Ore lavorazione'] = 5;
$result[1]['Componenti'][1]['Lavorazioni'][6]['Dipendenza da'] = "5 - Approvazione design Cliente";

$result[1]['Componenti'][1]['Lavorazioni'][6]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][6]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][1]['Lavorazioni'][6]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][7]['Attivita n.'] = 7;
$result[1]['Componenti'][1]['Lavorazioni'][7]['Codice lavorazione'] = 7;
$result[1]['Componenti'][1]['Lavorazioni'][7]['Descrizione lavorazione'] = "Revisione testi/Testing";
$result[1]['Componenti'][1]['Lavorazioni'][7]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][7]['Dipendenza da'] = "6 - Sviluppo html5";

$result[1]['Componenti'][1]['Lavorazioni'][7]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][7]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][1]['Lavorazioni'][7]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][8]['Attivita n.'] = 8;
$result[1]['Componenti'][1]['Lavorazioni'][8]['Codice lavorazione'] = 8;
$result[1]['Componenti'][1]['Lavorazioni'][8]['Descrizione lavorazione'] = "Inserimento correzioni";
$result[1]['Componenti'][1]['Lavorazioni'][8]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][8]['Dipendenza da'] = "7 - Revisione testi/Testing";

$result[1]['Componenti'][1]['Lavorazioni'][8]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][8]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][1]['Lavorazioni'][8]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][9]['Attivita n.'] = 9;
$result[1]['Componenti'][1]['Lavorazioni'][9]['Codice lavorazione'] = 9;
$result[1]['Componenti'][1]['Lavorazioni'][9]['Descrizione lavorazione'] = "Controllo qualità";
$result[1]['Componenti'][1]['Lavorazioni'][9]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][9]['Dipendenza da'] = "8 - Inserimento correzioni";

$result[1]['Componenti'][1]['Lavorazioni'][9]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][1]['Lavorazioni'][9]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][1]['Lavorazioni'][9]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][1]['Lavorazioni'][10]['Attivita n.'] = 10;
$result[1]['Componenti'][1]['Lavorazioni'][10]['Codice lavorazione'] = 10;
$result[1]['Componenti'][1]['Lavorazioni'][10]['Descrizione lavorazione'] = "Invio al cliente per OK";
$result[1]['Componenti'][1]['Lavorazioni'][10]['Ore lavorazione'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][10]['Dipendenza da'] = "9 - Controllo qualità";

$result[1]['Componenti'][1]['Lavorazioni'][10]['Settore']['Codice settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][10]['Settore']['Descrizione settore'] = "";
$result[1]['Componenti'][1]['Lavorazioni'][10]['Settore']['Flag'] = "Esterno";

$result[1]['Componenti'][1]['Lavorazioni'][11]['Attivita n.'] = 11;
$result[1]['Componenti'][1]['Lavorazioni'][11]['Codice lavorazione'] = 11;
$result[1]['Componenti'][1]['Lavorazioni'][11]['Descrizione lavorazione'] = "Pubblicazione online (sottidirectory ftp alter)";
$result[1]['Componenti'][1]['Lavorazioni'][11]['Ore lavorazione'] = 1;
$result[1]['Componenti'][1]['Lavorazioni'][11]['Dipendenza da'] = "10 - Invio al Cliente per OK";

$result[1]['Componenti'][1]['Lavorazioni'][11]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][1]['Lavorazioni'][11]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][1]['Lavorazioni'][11]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][2]['Codice'] = 1;
$result[1]['Componenti'][2]['Descrizione'] = "Viral Video";
$result[1]['Componenti'][2]['Brief'] = "Si tratta del Viral Video che sarà inserito all'interno della Landing Page. Il video sarà fornito dal cliente.";
$result[1]['Componenti'][2]['Quantita'] = 1;
$result[1]['Componenti'][2]['Data consegna prevista'] = '2021-02-15';
$result[1]['Componenti'][2]['Data consegna effettiva'] = '2021-01-10';
$result[1]['Componenti'][2]['Note'] = 'Note componente 2';
$result[1]['Componenti'][2]['Codice Dato tecnico'] = 3;
$result[1]['Componenti'][2]['Descrizione Dato tecnico'] = "Descrizione dato tecnico 3";

$result[1]['Componenti'][2]['Lavorazioni'][0]['Attivita n.'] = 0;
$result[1]['Componenti'][2]['Lavorazioni'][0]['Codice lavorazione'] = 0;
$result[1]['Componenti'][2]['Lavorazioni'][0]['Descrizione lavorazione'] = "Definizione standard per Produzione";
$result[1]['Componenti'][2]['Lavorazioni'][0]['Ore lavorazione'] = 0;
$result[1]['Componenti'][2]['Lavorazioni'][0]['Dipendenza da'] = "";

$result[1]['Componenti'][2]['Lavorazioni'][0]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][0]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][2]['Lavorazioni'][0]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][2]['Lavorazioni'][1]['Attivita n.'] = 1;
$result[1]['Componenti'][2]['Lavorazioni'][1]['Codice lavorazione'] = 1;
$result[1]['Componenti'][2]['Lavorazioni'][1]['Descrizione lavorazione'] = "Redazione storyboard";
$result[1]['Componenti'][2]['Lavorazioni'][1]['Ore lavorazione'] = 0;
$result[1]['Componenti'][2]['Lavorazioni'][1]['Dipendenza da'] = "0 - Definizione standard per Produzione";

$result[1]['Componenti'][2]['Lavorazioni'][1]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][1]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][2]['Lavorazioni'][1]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][2]['Lavorazioni'][2]['Attivita n.'] = 2;
$result[1]['Componenti'][2]['Lavorazioni'][2]['Codice lavorazione'] = 2;
$result[1]['Componenti'][2]['Lavorazioni'][2]['Descrizione lavorazione'] = "Approvazione storyboard Cliente";
$result[1]['Componenti'][2]['Lavorazioni'][2]['Ore lavorazione'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][2]['Dipendenza da'] = "1 - Redazione storyboard";

$result[1]['Componenti'][2]['Lavorazioni'][2]['Settore']['Codice settore'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][2]['Settore']['Descrizione settore'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][2]['Settore']['Flag'] = "Esterno";

$result[1]['Componenti'][2]['Lavorazioni'][3]['Attivita n.'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][3]['Codice lavorazione'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][3]['Descrizione lavorazione'] = "Grafica (ottimizzazione e caricamento)";
$result[1]['Componenti'][2]['Lavorazioni'][3]['Ore lavorazione'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][3]['Dipendenza da'] = "2 - Approvazione storyboard Cliente";

$result[1]['Componenti'][2]['Lavorazioni'][3]['Settore']['Codice settore'] = 2;
$result[1]['Componenti'][2]['Lavorazioni'][3]['Settore']['Descrizione settore'] = "PROGETTAZIONE";
$result[1]['Componenti'][2]['Lavorazioni'][3]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][2]['Lavorazioni'][4]['Attivita n.'] = 4;
$result[1]['Componenti'][2]['Lavorazioni'][4]['Codice lavorazione'] = 6;
$result[1]['Componenti'][2]['Lavorazioni'][4]['Descrizione lavorazione'] = "Controllo qualità";
$result[1]['Componenti'][2]['Lavorazioni'][4]['Ore lavorazione'] = 0;
$result[1]['Componenti'][2]['Lavorazioni'][4]['Dipendenza da'] = "3 - Grafica (ottimizzazione e caricamento)";

$result[1]['Componenti'][2]['Lavorazioni'][4]['Settore']['Codice settore'] = 3;
$result[1]['Componenti'][2]['Lavorazioni'][4]['Settore']['Descrizione settore'] = "DIGITAL";
$result[1]['Componenti'][2]['Lavorazioni'][4]['Settore']['Flag'] = "Interno";

$result[1]['Componenti'][2]['Lavorazioni'][5]['Attivita n.'] = 5;
$result[1]['Componenti'][2]['Lavorazioni'][5]['Codice lavorazione'] = 7;
$result[1]['Componenti'][2]['Lavorazioni'][5]['Descrizione lavorazione'] = "Invio al client per OK";
$result[1]['Componenti'][2]['Lavorazioni'][5]['Ore lavorazione'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][5]['Dipendenza da'] = "6 - Controllo qualità";

$result[1]['Componenti'][2]['Lavorazioni'][5]['Settore']['Codice settore'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][5]['Settore']['Descrizione settore'] = "";
$result[1]['Componenti'][2]['Lavorazioni'][5]['Settore']['Flag'] = "Esterno";

echo json_encode($result);
header('Content-Type: application/json');
