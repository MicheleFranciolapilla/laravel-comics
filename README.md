# DC COMICS con Laravel #

## Routing su tre pagine ed acquisizione dati da file specifico ##

---

#### Dati: ####
*I dati del progetto sono organizzati in due files, all'interno della cartella config/project_data*
-   *in **comics.php** sono presenti i dati delle cards (titolo, descrizione, autori, immagine principale, immagine secondaria,....)*
-   *in **menus_and_titles.php** sono presenti arrays associativi multidimensionali, entro cui si trovano i titoli delle varie pagine e tutti i menù del progetto. Si è scelto, infatti di visualizzare i menù mediante logica e cicli (anche annidati) piuttosto che mediante scrittura diretta.* 

#### Routing: ####
*Il meccanismo del routing tra le pagine è stato implementato mediante la sequenza logica "**(anchor | pulsante) / route / view**"; nel passaggio tra la pagina "Collection" e la pagina "Comics_data" è stato anche utilizzato un controller.*

*All'interno di ciascuna pagina è presente un pulsante che consente il routing verso le altre pagine; l'accesso alla pagina con i dati della singola card, invece, è realizzato mediante click sulla card in questione, all'interno della pagina "Collection"*

---

