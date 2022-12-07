<?php

class Movie
{

    public $title;
    public $genre;
    public $description;
    public $link;
    public $year;
    public $country;


    public function __construct($title, $genre, $description, $link, $year, $country)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
        $this->link = $link;
        $this->year = $year;
        $this->country = $country;
    }

    public function returnCountry($country)
    {
        if ($country != 'Italia') {
            $this->country = 'Questo film non è Italiano.';
        }
    }
}

$nataleSulNilo = new Movie('Natale sul Nilo', 'Comico', 'Un generale dei Carabinieri, accompagnato da un collega, porta sua figlia quindicenne in Egitto per le feste natalizie. Tra imprevisti, incontri e malintesi, però, la vacanza sarà tutto meno che rilassante, sia per il militare, sia per le altre persone coinvolte.', 'https://www.natalesulnilo.it', '2002', 'Italia');

$immortale = new Movie("L'Immortale", 'Gangster', "La storia di Ciro Di Marzio, personaggio della serie Gomorra. Sopravvissuto a un terremoto, l'uomo cresce in una Napoli cruda, violenta e reale che per lui è casa, famiglia e scuola di vita.", 'https://www.limmortale.it', '2019', 'Italia');

$laParanzaDeiBambini = new Movie('La Paranza Dei Bambini', 'Drammatico', "Un gruppo di bambini impara a conoscere la vita tra le strade della periferia di Napoli, dove il confronto con la malavita li chiama ad armarsi e a farsi rispettare nell'unico modo che conoscono. Tratto dall'omonimo romanzo di Roberto Saviano.", 'https://www.laparanzadeibambini.it', '2019', 'Italia');

$lesMiserables = new Movie('Les Miserables', 'Drammatico', "Stéphane si unisce alla squadra anti crimine di Montfermeil, vicino Parigi, dove regna un clima di tensione e violenza generato dalle bande dei malviventi, il cui unico obiettivo è ottenere il controllo del quartiere.", 'https://www.lemiserables.fr', '2019', 'Francia');

$lesMiserables->returnCountry($country);

var_dump($nataleSulNilo);
var_dump($immortale);
var_dump($laParanzaDeiBambini);
var_dump($lesMiserables);
