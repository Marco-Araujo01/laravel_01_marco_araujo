<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devil Fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    {{-- Inizio NavBar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <img class="logo" src="./media/apple.webp" alt="Vega logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('Home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Paramecia')}}">Paramecia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Zoan')}}">Zoan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Logia')}}">Logia</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Fine Navbar --}}
      {{-- Inizio Header --}}
      <div class="container-fluid p-3">
        <div class="row justify-content-center align-item-center">
            <div class="col-12 text-center">
                <h1 class="display-1"><strong>Enciclopedia dei frutti del diavolo</strong></h1>
            </div>
        </div>
      </div>
      {{-- Fine Header --}}
      {{-- Inizio Box --}}
      <div class="container my-5"> 
        <div class="card shadow border-0">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-8">
                <p><strong>Salve a tutti il mio nome è Dr. Vegapunk, un umile scienziato geniale.</strong></p>
                <p>Il mistero dei <strong>Frutti del Diavolo</strong> è una delle più grandi meraviglie del nostro mondo. Il loro potenziale è immenso, eppure celano segreti tanto antichi quanto pericolosi. Dopo anni di studio, posso finalmente svelare alcune verità su queste straordinarie entità biologiche.</p>
    
                <h5 class="mt-4"><strong>Cosa sono i Frutti del Diavolo?</strong></h5>
                <p>I Frutti del Diavolo, o <em>Akuma no Mi</em>, sono organismi biologici unici e anomali che, se ingeriti, conferiscono poteri sovrannaturali al consumatore. Esistono tre principali categorie di Frutti, ciascuna con caratteristiche uniche:</p>
                <ul>
                  <li><strong>Paramecia:</strong> Conferiscono poteri fisici o la capacità di manipolare il proprio corpo o l'ambiente. La varietà di questi poteri è sconfinata, dal controllo della gravità alla produzione di sostanze come cera o veleno.</li>
                  <li><strong>Zoan:</strong> Permettono al consumatore di trasformarsi in un animale specifico o in un ibrido uomo-animale. Le Zoan antiche e mitologiche contengono un "codice genetico" eccezionalmente complesso, simile a una banca dati della biologia perduta.</li>
                  <li><strong>Rogia:</strong> Danno al consumatore il potere di trasformarsi in un elemento naturale (come fuoco, ghiaccio o fumo) e di manipolarlo a piacere.</li>
                </ul>
    
                <h5 class="mt-4"><strong>Il segreto dell'origine</strong></h5>
                <p>Attraverso la mia ricerca, sono giunto alla teoria che i Frutti del Diavolo siano il risultato di un’antica tecnologia biologica, risalente a un'epoca in cui scienza e natura erano indistinguibili. Ogni frutto sembra contenere la "volontà" di un'entità, un frammento di coscienza che si manifesta come potere.</p>
    
                <h5 class="mt-4"><strong>Perché si perde la capacità di nuotare?</strong></h5>
                <p>Un consumatore di Frutti del Diavolo viene respinto dal mare stesso, perdendo la capacità di nuotare. Credo che ciò avvenga perché il mare (<em>oceanus maximus</em>) rappresenta l'equilibrio naturale. I Frutti del Diavolo, essendo alterazioni sovrannaturali, sono visti come un'anomalia che il mare rifiuta. La "debolezza" al mare è quindi un meccanismo di bilanciamento naturale.</p>
    
                <h5 class="mt-4"><strong>I Frutti del Diavolo artificiali</strong></h5>
                <p>Ho dedicato una parte significativa della mia carriera alla replica dei Frutti del Diavolo. Grazie a ciò, sono riuscito a creare versioni artificiali, come gli <em>SMILE</em>, sebbene con risultati discutibili. Tuttavia, il mio più grande successo è stato replicare un Frutto Rogia in maniera perfetta. Questo mi porta a credere che i Frutti del Diavolo possano essere decifrati e ricreati interamente tramite ingegneria genetica.</p>
    
                <h5 class="mt-4"><strong>Un’avvertenza finale</strong></h5>
                <p>Questi frutti sono meraviglie ma anche maledizioni. Ogni potere racchiude un peso, una volontà da onorare. Forse, in un'epoca lontana, essi erano strumenti creati per scopi specifici. Usateli con saggezza, perché ogni Frutto porta con sé il prezzo della sua ambizione.</p>
    
                <p class="mt-4"><strong>Dr. Vegapunk</strong><br>Scienziato Capo del Futuro</p>
              </div>
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="/media/DrVegapunk.webp" alt="Dr. Vegapunk" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Fine Box --}}
      {{-- Footer --}}
      <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2020 Copyright:
          <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>