<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
    <title>playawaystress | Stresstest</title>
<meta name="description" content="playawaystress | Stresstest">
    <?php include 'head.php'; ?>
</head>

<body>
    <header>
    <nav id="navcontainer" >  
        <div class="navbackground">
            <a href="index" target="_top" class="nav-logo">
                <img class="logo" src="img/playawaystress-logo.svg" alt="playawaystress-logo"/>
            </a>
        </div>
        <div id="navburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>    
        </div>
        <div class="nav">
            <ul>
                <li><a href="index#stress">Stress</a></li>
                <li><a href="index#konzept">Konzept</a></li>
                <li><a href="stresstest">Stresstest</a></li>
                <li><a href="angebot">Angebote</a></li>
                <li><a href="kontakt">Kontakt</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="pagefadein"></div>
</header>
    
    <section id="stresstest">
        <article class="articlecontainer stresstesttop">
            <figure class="container50 right">
                <img src="img/play-stress-away-hirnnutzungsfaehigkeiten-stresstest.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten"  />
                <img class="animation2" src="img/play-stress-away-hirnnutzungsfaehigkeiten-2.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten"  />
                <img class="animation3" src="img/play-stress-away-hirnnutzungsfaehigkeiten-3.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten"  />
                <img class="animation4" src="img/play-stress-away-hirnnutzungsfaehigkeiten-4.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten"  />
                <figcaption>Wie ist dein Stresslevel bei den gegenwärtigen Stressoren?</figcaption>
            </figure>
            <div class="container50">
                <h1 class="stresstest">Stresstest</h1>
                <p class="lauftext">
                    Du spürst Anzeichen von Stress? Du leidest an den Folgen einer Krankheit oder eines Unfalls, die unverhältnismässig langsam heilen? Du merkst, dass deine gewohnte Leistungsfähigkeit reduziert ist? Deine Fehlerquote steigt bei Abnahme deines Arbeitstempos?
                </p>
                 <button><a class="button goto" href="#stressteststart">Mach den Stresstest!</a></button>
            </div>
        </article>
        
        <article class="articlecontainer" id="stressteststart">
            <div class="table">
                <div class="tr">
                    <div class="th first">Diese <strong>sieben</strong> Fragen helfen dabei, eine Stressfolgen-Gefährdung zu erkennen.</div>
                    <div class="th respout">nie</div>
                    <div class="th respout">kommt vor</div>
                    <div class="th respout">häufig</div>
                    <div class="th respout">sehr oft</div>
                </div>
                <div class="tr">
                    <div class="td first">Schläfst du schlecht?<br><span>Schwierigkeiten beim Einschlafen, häufige Schlafunterbrechungen, zu frühes Aufwachen</span></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['one']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['one']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['one']" value="3"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['one']" value="4"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Meldet dein Körper sich mit Beschwerden?<br><span>Muskel-/Nackenverspannungen, Schmerzen wie z.B. Magen-, oder Kopfschmerzen, Übelkeit, Kreislaufprobleme, Haarausfall, Hautprobleme</span></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['two']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['two']" value="2"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['two']" value="3"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['two']" value="5"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Ist deine Konzentrationsfähigkeit schlechter als gewohnt?</div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['three']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['three']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['three']" value="3"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['three']" value="4"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Bist du emotional unausgeglichen?<br><span>gereizt, lustlos, apathisch, launisch</span></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['four']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['four']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['four']" value="2"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['four']" value="3"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Hast du den Eindruck, dass dein Denkvermögen und dein Gedächtnis nachgelassen haben?<br><span>vergesslich, schwerfällig im Denken, unflexibel, etc.</span></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['five']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['five']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['five']" value="2"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['five']" value="3"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Hast du Schwierigkeiten, dich zu entspannen?</div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['six']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['six']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['six']" value="2"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['six']" value="3"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                <div class="tr">
                    <div class="td first">Kreisen deine Gedanken immerzu um das Gleiche und hast du Mühe abzuschalten?</div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['seven']" value="0"><span class="checkmark"></span><span class="respcheck">nie</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['seven']" value="1"><span class="checkmark"></span><span class="respcheck">kommt vor</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['seven']" value="2"><span class="checkmark"></span><span class="respcheck">häufig</span></label></div>
                    <div class="td"><label class="container"><input class="stresstest" type="radio" name="question['seven']" value="3"><span class="checkmark"></span><span class="respcheck">sehr oft</span></label></div>
                </div>
                    
                <div class="tr">
                    <div class="td firstg">Gesamtpunkte</div>
                    <div class="td result"><span id="amount">0</span></div>
                </div>
                <div class="tr">
                    <div class="td last">Die Gesamtpunkte geben Hinweise darauf, ob dein Stresslevel auf <span class="green">Grün</span>, auf <span class="yellow">Gelb</span> oder auf <span class="red">Rot</span> ist.</div>
                </div>
            </div>
            <p class="copyright">©Brainjoin</p>
        </article>
        
        <article class="articlecontainer">
            <div class="container50">
                <h1>0 - 5 Punkte</h1>
                <p class="lauftext">
                    Herzlichen Glückwunsch! Deine Stressbelastung wirkt sich beneidenswert wenig aus. Bei diesem Testergebnis musst du nichts unternehmen. Wenn du allerdings Probleme hast, die hier nicht abgefragt wurden oder eine innere Stimme dich warnt, nimm das ernst.
                </p>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-hirnnutzungsfaehigkeiten-01.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten"  />
                <img class="animation2" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-1.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation3" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-2.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation4" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-3.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <figcaption class="figcaptionstb green">konzentriert, hört zu und versteht, hohe Merkfähigkeit und Flexibilität, Resilienz, Neuro-Agility</figcaption>
            </figure>
            
        </article>
        <article class="articlecontainer">
            <div class="container50">
                <h1>6 - 10 Punkte</h1>
                <p class="lauftext">
                    Deine Belastungen lösen noch keine besorgniserregenden Stressfolgen aus. Achte aber dennoch auf dich, damit sich die Stressanzeichen nicht langsam und schleichend vermehren. Du kannst aus eigener Kraft Themen in Angriff nehmen und deine Lage verbessern. Mach das, und wiederhole den Test nach sechs Wochen.
                </p>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-hirnnutzungsfaehigkeiten-02.svg" alt="play-stress-away-vitalisierende-gewohnheiten"  />
                <img class="animation2" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-1.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation3" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-2.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation4" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-3.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <figcaption class="figcaptionstb"><span class="green">steigende Fehlerquote, zunehmend vergesslich, </span> <span class="yellow">Emotionsebene statt Sachebene</span></figcaption>
            </figure>
        </article>
        <article class="articlecontainer">
            <div class="container50">
                <h1>11 - 17 Punkte</h1>
                <p class="lauftext">
                    Du bist in einem Zustand, der schnell kritisch werden kann. Bitte nimm das Ergebnis ernst und besprich es mit einer Person deines Vertrauens. Wenn dieser Zustand schon länger anhält, dann beeinflusst die hormonelle Stresssituation deine Leistungsfähigkeit und deine Lebensqualität erheblich.
                </p>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-hirnnutzungsfaehigkeiten-03.svg" alt="play-stress-away-vitalisierende-gewohnheiten"  />
                <img class="animation2" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-1.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation3" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-2.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation4" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-3.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <figcaption class="figcaptionstb yellow">Missverständnisse, Fehler, Anspannung, emotional instabil, Anfälligkeit auf Krankheiten</figcaption>
            </figure>
        </article>
        <article class="articlecontainer">
            <div class="container50">
                <h1>18 - 25 Punkte</h1>
                <p class="lauftext">
                    Sicher hast du gewusst, dass dein Zustand bedenklich ist. Es geht nun darum, einen Totalausfall mit lang andauernden Folgen zu vermeiden. Dazu solltest du dir unbedingt so schnell wie möglich eine professionelle Fachberatung gönnen. Vermeide, noch mehr Zeit zu verlieren und einen Burn-out zu riskieren.
                </p>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-hirnnutzungsfaehigkeiten-04.svg" alt="play-stress-away-vitalisierende-gewohnheiten"  />
                <img class="animation2" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-1.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation3" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-2.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <img class="animation4" src="img/play-stress-away-hirnnutzungsfaehigkeiten-stressoren-3.svg" alt="play-stress-away-hirnnutzungsfaehigkeiten-stressoren"/>
                <figcaption class="figcaptionstb red">Realitätsverzerrung, Misstrauen, hohe Anspannung, berufliche und private Konflikte, Anfälligkeit auf Langzeitausfälle</figcaption>
            </figure>
        </article>
    </section><!--sectionend stresstest-->
    
    <section id="konzept">
        <div class="wave"><img src="img/play-stress-away-wave.png" alt="play-stress-away-wave" /></div>
        <article class="articlecontainer">
            <div class="container100">
                <h1>play away stress® Konzept</h1>
                <p class="lauftext">
                    Basierend auf <strong>aktuellsten neurobiologischen Fakten,</strong> dem Wissen über die fatale Wirkung dauernder Stressanspannung und daraus resultierender Unterfunktion des Immunsystems, entwickelten wir das vitalisierende play away stress® Konzept, mit welchem wirkungsvolle Gewohnheiten in den folgenden drei Bereichen aufgebaut werden. Mit derart <strong>vitalisierenden Gewohnheiten</strong> ändert sich diesmal wirklich etwas:
                </p>
            </div>
        </article>
        
        <article class="articlecontainer">
            <div class="container50 responsivtitle">
                <h1>1. Vitalisierende Gewohnheiten</h1>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-vitalisierende-gewohnheiten.svg" alt="play-stress-away-vitalisierende-gewohnheiten" />
                <figcaption>Vitalisierende Gewohnheiten wirken im Alltag, ganz automatisch!</figcaption>
            </figure>
            <div class="container50">
                <h1 class="screentitle">1. Vitalisierende Gewohnheiten</h1>
                <p class="lauftext">
                    Du setzt die <strong>Macht der Gewohnheiten</strong> für dich ein und baust mit dem play away stress® Konzept, während der <strong>Programmdauer von zwölf Wochen,</strong> neue vitalisierende Gewohnheiten auf. Damit wirken deine neuen vitalisierenden Gewohnheiten in deinem Alltag, ganz automatisch!<br> Oder, nach welchem eintägigen Seminar hast du bisher wirklich etwas verändern können?
                </p>
                <button class="togglebutton">&#43;</button>
            </div>
            <div class="togglebox">
                <p class="lauftext">
                    Mit der Erkenntnis aus der Verhaltensforschung, dass neue Gewohnheiten bis zwölf Wochen und regelmässige Impulse benötigen, begleiten wir die Teilnehmenden genau während dieser Phase.
                    <br>Darum wurde das play away stress® Programm so aufgebaut, dass wir über die Dauer von zwölf Wochen intensiv zusammenarbeiten, um damit tatsächlich vitalisierende Gewohnheiten zu entwickeln. So können alle Teilnehmenden neue vitalisierende Gewohnheiten aufbauen, die im Alltag ihre volle Wirkung entfalten.
                    <br>Wir starten mit der 3,5-stündigen Kick-off-Session, in welcher viel Know-how über das Stresssystem und dessen Funktionsweise vermittelt wird. Du erfährst gleich am eigenen Körper, wie sich tatsächliche Entspannung und der Abbau von Stresshormonen anfühlen können.
                    <br>In den darauf folgenden elf Wochen des play away stress® Programms, setzen wir uns wöchentlich für 75 Minuten mit dem Transfer in den Alltag auseinander und steigern die Entspannungskompetenz sowie die Hirnnutzungsfähigkeiten. Damit verankern alle Teilnehmenden in dieser Zeit die für sich wirkungsvollen vitalisierenden Gewohnheiten mit Wirkung im Alltag, ganz automatisch!

                </p>
            </div>
        </article>
        
        <article class="articlecontainer">
            <div class="container50 responsivtitle">
                <h1>2. Neuronale Aktivierung</h1>
            </div>
            <figure class="container50 right">
                <img src="img/play-stress-away-neuronale-aktivierung-stressabbau.svg" alt="play-stress-away-neuronale-aktivierung-stressabbau" />
                <svg version="1.1" id="neuronaleAktivierung" class="animation3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 360 360" style="enable-background:new 0 0 360 360;" xml:space="preserve">
                    <circle class="puls" cx="180" cy="180" r="150"/>
                    <circle class="puls" cx="180" cy="180" r="120"/>
                    <circle class="puls" cx="180" cy="180" r="180"/>
                </svg>
                <figcaption>Steigere deine Entspannungskompetenz mit neuronaler Aktivierung!</figcaption>
            </figure>
            <div class="container50">
                <h1 class="screentitle">2. Neuronale Aktivierung</h1>
                <p class="lauftext">
                    Mit körpergestützter Mentaltechnik steigerst du deine <strong>Entspannungskompetenz</strong> und wirst in die Lage versetzt, die Stresshormone tatsächlich abzubauen. Mit imaginierten, positiv erlebten Erfahrungen deiner Vergangenheit, aktivierst du alle neun Sinne und steigerst deine Hirnnutzungsfähigkeiten. <strong>Damit aktivierst du deinen Stresshormonabbau,</strong> indem du dich gezielt entspannen kannst und auch die wichtigste Phase des Stresshormonabbaus überhaupt vorbereitest: regenerativen tiefen Schlaf!
                </p>
                <button class="togglebutton">&#43;</button>
            </div>
            <div class="togglebox">
                <p class="lauftext">
                    So wird der dringend benötigte tiefe Schlaf und die tatsächliche Regeneration wieder Teil deines Lebens! In den zwölf Wochen erlernen wir die Zusammenhänge der kombinierten Körperabläufe und der neuronalen Aktivierung, sodass du im Alltag die volle Kraft aufbauen kannst. Da unsere Gewohnheiten im Grunde unbewusste Programme sind, ermöglicht dir die neuronale Aktivierung, eine Neuprogrammierung deiner unbewusst ablaufenden Gewohnheiten.
                    <br>Veränderst du damit deine Gewohnheiten, wendest du deine neuen vitalisierenden Gewohnheiten ohne Kraftanstrengung an, oder musstest du dich schon mal anstrengen beim Zähne putzen?
                    <br>Zur nachhaltigen selbstgesteuerten Veränderung erhältst du als Teilnehmender des play away stress® Konzepts digitale Hilfsmittel, die du einsetzen kannst, damit du deine vollen Hirnnutzungsfähigkeiten entfalten wirst, vitalisierende Gewohnheiten für dich programmierst und deine Stresshormone täglich abbaust!
                </p>
            </div>
        </article>
        
        <article class="articlecontainer">
            <div class="container50 responsivtitle">
                <h1>3. Embodiment</h1>
            </div>
            <figure class="container50">
                <img src="img/play-stress-away-embodiment-stressabbau-1.svg" alt="play-stress-away-neuronale-aktivierung-stressabbau" />
                <img class="animation3" src="img/play-stress-away-embodiment-stressabbau-2.svg" alt="play-stress-away-neuronale-aktivierung-stressabbau"/>
                <figcaption>Vitalisiere Körper und Geist wechselseitig mit Embodiment!</figcaption>
            </figure>
            <div class="container50">
                <h1 class="screentitle">3. Embodiment</h1>
                <p class="lauftext">
                    Gemäss aktuellsten Forschungen, aber auch, aus uraltem Erfahrungswissen, kennen wir die sich <strong>wechselseitig stärkenden Wirkungen von Körper und Geist.</strong> Diesem gemeinsamen Wirken von Körper und Geist messen wir in allen Aspekten des play away stress® Programms <strong>grosse Bedeutung</strong> bei.
                </p>
                <button class="togglebutton">&#43;</button>
            </div>
            <div class="togglebox">
                <p class="lauftext">
                    Damit stellst du für dich sicher, dass du das neue Know How direkt anwendest und mit der körperlichen Verinnerlichung die neuen vitalisierenden Gewohnheiten nachhaltig neu programmierst. Indem du dir deine bisherigen Gewohnheiten bewusst werden lässt und die neuen vitalisierenden Gewohnheiten auch körperlich verinnerlichst, wirken diese neuen Kräfte in deinem Alltag und verhelfen dir zu mehr Energie und Lebensqualität. <br>Folgende Beispiele erwarten dich mit dem play away stress® Konzept, direkt am Arbeitsplatz und im Alltag:<br> 
                    <br>1. Mit körpergestützter Mentaltechnik die hormonell gesteuerten Emotionen bewusst beeinflussen
                    <br>2. Mit speziellen Atemübungen die verbleibenden Stresshormone abbauen
                    <br>3. Einfache körpergestützte Varianten der Hirnaktivierung für die Lösungsfindung gezielt einsetzen
                    <br>4. Mit dynamischem Stehen vitalisierend zwischen sitzender und stehender Haltung wechseln
                    <br>5. Blitzpausen am Arbeitsplatz für lockere Nacken- und Schultermuskeln
                    <br>6. Vitalisierende Blitzpausen in den Alltag integrieren für neuen Fokus und Entspannung, alleine und gemeinsam mit TeamkollegInnen, natürlich ohne grossen Zeitaufwand
                    <br>7. Mit den verschiedensten Utensilien der PlayBox abwechslungsreiche Blitzpausen erleben
                </p>
            </div>
        </article>
        
        <article class="articlecontainer">
            <div class="container50 responsivtitle">
                <h1>Gemeinsame Ziele erreichen</h1>
            </div>
            <figure class="container50 right">
                <img src="img/play-stress-away-gemeinsame-ziele-1.svg" alt="play-stress-away-neuronale-aktivierung-stressabbau" />
                <figcaption>Vitalisierte Mitarbeitende sind gesund und begeistern die Kunden!</figcaption>
            </figure>
            <div class="container50">
                <h1 class="screentitle">Gemeinsame Ziele erreichen</h1>
                <p class="lauftext">
                    Wir begleiten auch dich zu vitalisierenden Gewohnheiten und tagtäglicher Entspannungskompetenz. Es soll normal werden, dass die Mehrheit der Mitarbeitenden in einer gesunden Arbeitsatmosphäre motiviert und vitalisiert, <strong>Kunden begeistern können.</strong> Kunden, die euch weiterempfehlen!<br>Arbeitest du auch lieber in einer solchen Arbeitsumgebung? Dann schau bitte in unsere Angebote rein und <strong>kontaktiere uns</strong> noch heute für ein erstes Treffen - play away stress!
                </p>
                <button><a class="button" href="angebot">Schau in unsere Angebote</a></button>
            </div>
        </article>
    </section><!--sectionend konzept-->
    <?php include 'footer.php'; ?>
</body>
</html>
