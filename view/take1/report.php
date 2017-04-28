<div class="container" role="main">
        <div class="page-header">
            <h1>Min redovisningsida</h1>
        </div>
        <div class="text">

            <h3>Kmom01</h3>

            <p>
                <h4>Reflektioner</h4>
                    Hela detta kurnmoment kändes otroligt stort och mycket på en gång. Jag vet inte riktigt om det var tanken då jag
                    pga av storleken på detta kursmoment i komination med installationsproblem i webapp, nu ligger efter i båda kurserna.
                    Som jag ser det så var det för mycket att både bygga hela ramverken, gå igenom alla sätt man kan hantera en databas
                    samt göra en mycket stor recap av tidigare PHP-kurser i form av Guess uppgiften. Jag hoppas inte detta första kursmoment
                    speglar hur kursen kommer vara framöver för då blir det mycket svårt att hinna med tyvärr.
                <h4>Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?</h4>
                    Just hur klasser är löst i php känns logiskt för mig. Väldigt smart med autoloader också så man slipper tänka på
                    importer. Även bra om man ändrar sin kod i framtiden och vissa importer blir onödiga, så fungerar principen även
                    som en "unloader".
                <h4>Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida.</h4>
                    Det var ett kul inslag. Var skönt att vara med att bygga upp hela ramverket själv istället för att hoppa in i något redan färdigt.
                    Det ger mycket mer förståelse om hur saker och ting fungerar med vyer och sånt.
                <h4>Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?</h4>
                    Det var inga problem alls. Gillade workbench som program väldigt mycket. Det var ett nice sätt att arbeta med databaserna.

                    <a href="http://www.student.bth.se/~jijo16/dbwebb-kurser/oophp/me/kmom01/guess/">Guess spelen</a>cd
            </p>
            <hr>

            <h3>Kmom02</h3>
            <p>
                <h4>Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?</h4>
                Jag tycker det kändes bra att skriva sin kod i klasser när jag väl förstod ramverket. Även om det för mig vid första ögonkastet
                känns lättare att greppa att skriva sin kod direkt i vyer så förstår jag att en backend kod kan bli väldigt stor och då kan det
                vara skönt att separera den från vyn där man bara hanterar sin frontend.
                <h4>Hur väljer du att organisera dina vyer?</h4>
                Jag har alla basic-sidor (about, home, report etc) i en egen mapp, take1. Resterande som använder sig av klasser har egna mappar
                där dom ligger tillsammans med eventuella processingsidor.
                <h4>Berätta om hur du löste integreringen av klassen Session.</h4>
                Jag valde att inkludera session-objektet i $app för att sedan använda klassens funktioner till att starta sessioner och utföra
                de andra kraven i uppgifterna. Increment och Decrement sköts via processingsidor, och resterande uppgifter sköts direkt i routen
                med hjälp av sessionklassens funktioner.
                <h4>Berätta om hur du löste uppgiften med Tärningsspelet 100/Månadskalendern, hur du tänkte,
                planerade och utförde uppgiften samt hur du organiserade din kod?</h4>
                Jag valde att göra tärningsspelet. Jag löste uppgiften så att jag hade en huvudklass, Dicegame, som i sin tur utnyttjade de andra
                klasserna jag skapade. Playerklassen innehåller en viss spelares poäng, Diceklassen innehåller en funktion som returnerar ett slumpat
                nummer mellan 1 och 6, Roundklassen hanterar varje runda och är den klassen som kommunicerar mest med huvudklassen.
                Sedan skickade jag med ett objekt av klassen Dicegame i sessionen och skriver ut all relevant info från den i vyn.
                Länkarna för de olika saker man kan göra går till processingsidor som i sin tur anropar en specifik funktion i Dicegameobjektet.
                <h4>Några tankar kring SQL så här långt?</h4>
                SQL har inte vart några problem. Allting känns än så länge väldigt logiskt och uppgifterna känns pedagogiska.
            </p>
            <hr>

            <h3>Kmom03</h3>

            <p>
                Kmom03 här...
            </p>
            <hr>

            <h3>Kmom04</h3>

            <p>
                Kmom04 här...
            </p>
            <hr>

            <h3>Kmom05</h3>

            <p>
                Kmom05 här...

            </p>
            <hr>

            <h3>Kmom06</h3>

            <p>
                Kmom06 här...
            </p>
            <hr>

            <h3>Kmom10</h3>

            <p>
                Kmom10 här...
            </p>
            <hr>


        </div>

    </div>
