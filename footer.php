<footer>
    <div class="wave"><img src="img/play-stress-away-wave.svg" alt="play-stress-away-wave" width="100%" /></div>
    <div class="nav-footer">
        <ul>
            <li><a class="footer" href="#stress">Stress</a></li>
            <li><a class="footer" href="#konzept">Konzept</a></li>
            <li><a href="stresstest">Stresstest</a></li>
            <li><a href="kontakt">Kontakt</a></li>
        </ul>
    </div>
    
    <div class="impressum" data-toggle="#impressum">Impressum</div>
        <div id="impressum">    
            <p><b>Design &#38; Interaction:</b><br>Schwizer &#38; Schlatter GmbH<br>Davidstrasse 45<br>9000 St.Gallen<br>
                <a class="linkw" href="https://www.schwizerschlatter.com" target="_blank">www.schwizerschlatter.com</a>
            </p>
            
            <h1 class="left">
            play stress away gmbh<br>
            Schaffhauserstrasse 115<br>
            8302 Kloten<br><br>
            <a href="tel:+41448306000">Telefon +41 44 830 60 00</a>
            <a href="mailto:gil.monroy@playstressaway.ch">gil.monroy@playstressaway.ch</a>
        </h1>
            
            <p><b>Design &#38; Interaction:</b><br>Schwizer &#38; Schlatter GmbH<br>Davidstrasse 45<br>9000 St.Gallen<br>
                <a class="linkw" href="https://www.schwizerschlatter.com" target="_blank">www.schwizerschlatter.com</a>
            </p>
            <p>© 2019 Bauherrengemeinschaft Baumgarten. All rights reserved | <span class="linkw disclamer impressum" data-toggle="#datenschutz">Disclamer</span></p>
        </div>
</footer>

<div id="optoutbanner99">
    <p>Wir verwenden Cookies für ein besseres Online-Erlebnis. </p>
    <a id="acceptga" onclick="accept()">Okay</a>
</div>

<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    var gaProperty = 'UA-142487628-1';
    var disableStr = 'ga-disable-' + gaProperty;
    if (document.cookie.indexOf(disableStr + '=true') > -1) { 
        window[disableStr] = true;
        document.getElementById("optoutbanner99").remove();
    }
    function accept() {
        expiry = new Date('July 1, 2099');
        document.cookie = "accepted=yes, i accept google analytics; expires=" + expiry.toGMTString();
        document.getElementById('optoutbanner99').remove();
    }
    if (document.cookie.indexOf("accepted=") >= 0) {
        document.getElementById('optoutbanner99').remove();
    }
</script>

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-142487628-1', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
</script>
 
