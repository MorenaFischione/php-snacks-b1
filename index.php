<!-- 
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z 
-->

<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ],
    ],
];
?>



<div> 

    <?php foreach($posts as $data => $post) {  // ciclo su posts e recupero chiave e valore?> 
        <h3> <?php echo $data; // stampo chiave?></h3>
        
        <ul>
            <?php foreach($post as $singoloElemento ) {; //ciclo sul singolo post e recupero il valore ?>
                <li> 
                    <h3><?php echo $singoloElemento["title"]; //stampo il titolo del singolo elemento ?> </h3>
                    <h4><?php echo $singoloElemento["author"]; //stampo autore del singolo elemento ?> </h4>
                    <p><?php echo $singoloElemento["text"]; //stampo text del singolo elemento ?> </p>
                </li>
            <?php }; ?>
            
        </ul>
    <?php } ?>
</div> 


<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$miaarray = [];

while (count($miaarray) < 15) {
    $numeroRandomico = rand(1, 100); //genero numero randomico
    array_push($miaarray, $numeroRandomico); //pusho nel mio array il numero randomico
}

var_dump($miaarray);

?>

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
        
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="rettangolo grigio">
        <ul>
            <?php foreach($db["teachers"] as $insegnate) { // ciclo nell'array db solo nell'array teachers e prendo il singolo insegnate ?>
                <li> <?php echo $insegnate["name"] . " " . $insegnate["lastname"] // stampo il nome e cognome dall'array  del singolo insegnate?> </li>
            <?php }; ?>
        </ul>
    </div>
    <div class="rettangolo verde">
        <ul>
            <?php foreach($db["pm"] as $alunno) { // ciclo nell'array db solo nell'array pm e prendo il singolo alunno?>
                <li> <?php echo $alunno["name"] . " " . $alunno["lastname"] // stampo il nome e cognome dall'array del singolo alunno ?> </li>
            <?php }; ?>
        </ul>
    </div>                                                          
</body>
</html>


<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
 
    $classe = [
        [
            'nome' => 'Michele',
            'cognome' => 'Papagni',
            'voti' => [5,6,7,8],
        ],
        [
            'nome' => 'Fabio',
            'cognome' => 'Forghieri',
            "voti" => [5,9,9,3],
        ],
        [
            'nome' => 'Roberto',
            'cognome' => 'Marazzini',
            'voti' => [4,8,9,8],
        ],   
        [
            'nome' => 'Giulia',
            'cognome' => 'Mazzini',
            'voti' => [4,8,9,8],
        ],   
    ]
?>

<?php foreach($classe as $alunno) { // ciclo su classe e prendo singolo alunno ?>
    <h3> <?php echo $alunno["nome"] . " " . $alunno["cognome"]; //stampo nome e cognome dall'array alunno ?> </h3> 
       <p> Media Voti: <?php echo array_sum($alunno["voti"]) /4; // faccio la somma dei voti presenti nell'array alunno e lo divido per 4 == MEDIA ?>
        </p>
<?php  }; ?>

     
<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->
 <?php 
    $paragrafo = "Celebrare Dante per celebrare la lingua e la cultura italiana in tutte le sue forme. E' questo il filo conduttore scelto per la XXI Settimana della Lingua Italiana nel Mondo, che si terrà dal 18 al 24 ottobre.Un appuntamento dedicato quest'anno a 'Dante, l'italiano', che si pone come ideale conclusione del programma di celebrazioni 'Dante, 700 nel mondo', promosso dalla rete diplomatico-consolare nei cinque continenti, ma anche come momento di avvicinamento agli Stati Generali della Lingua e della Creatività Italiane del 29 novembre. Ampia la varietà delle iniziative che la rete estera dedicherà all'esplorazione dei linguaggi e dell'immaginario di Dante Alighieri, attraverso molteplici prospettive e chiavi di lettura: prodotti editoriali inediti, eventi musicali, mostre, spettacoli dal vivo e progetti multimediali, che saranno visibili anche sul sito e sui canali social del ministero degli Esteri e sul portale 'Italiana'. Celebrare Dante, padre del nostro idioma, significa celebrare l'italianità in tutte le sue forme, ha commentato la viceministra degli Esteri Marina Sereni, che presentando stamani l'evento alla Farnesina ha sottolineato il ruolo della nostra lingua come perno intorno a cui ruota il soft power italiano. I vari appuntamenti saranno caratterizzati dalla multidimensionalità, con collaborazioni che vanno dalla fondazione Alda Fendi alla divisione Disney di Giunti editore, ha spiegato Cecilia Piccioni, direttrice centrale per la Promozione della lingua e della cultura italiana, sottolineando che per la prima volta in un evento alla Farnesina c'è un parterre di sole donne. Si tratta di una contingenza, ma è anche il simbolo di come il sistema Paese stia cambiando nel senso di una maggiore parità di genere. A illustrare in presenza gli eventi anche Lucia Nardi, responsabile delle iniziative culturali di Eni, e Ludovica Mantovani, responsabile della Divisione calcio femminile della Figc. Moderatrice la giornalista Rai Serena Bortone. Nata nel 2001 in collaborazione con l'Accademia della Crusca, la Settimana viene realizzata ogni ottobre dalla rete diplomatico-consolare e degli Istituti Italiani di Cultura con il sostegno del MiC, del MUR, del Governo svizzero e dei principali partner della promozione linguistica, tra cui la Rai e la Società Dante Alighieri, con l'Alto Patronato del Presidente della Repubblica."; 

    $paragrafoTrasformato = explode(".", $paragrafo) ; //crea un array partendo da una stringa secondo il valore passato (nel nostro caso . )

?>

 
 <ol>
    <?php foreach($paragrafoTrasformato as $paragrafetto){ // ciclo sul paragrafo trasformato e ottengo i paragrafetti ?>
        <li> 
            <?php 
            if(!empty($paragrafetto)){ // verifico che il paragrafetto non sia vuoto
                echo $paragrafetto;  // stampo paragrafetto
            }
            ?>
        </li>
    <?php }; ?>
 </ol>
 
 
 




