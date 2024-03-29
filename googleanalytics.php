<div id="cookiebanner">
  <p>Wir verwenden Cookies, um Ihnen das beste Online-Erlebnis zu bieten. Mit Ihrer Zustimmung akzeptieren Sie die Verwendung von Cookies.</p>
  <button id="acceptBtn">Okay</button>
  <button id="declineBtn">Nein, danke</button>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-G4RR6LBGPB"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    const trackingID = 'G-G4RR6LBGPB';
    const disableString = 'ga-disable-' + trackingID;
    const cookiebanner = document.getElementById('cookiebanner');
    const acceptBtn = document.getElementById('acceptBtn');
    const declineBtn = document.getElementById('declineBtn');

    function setCookie(name, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    const expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=None;Secure";
    }

    function getCookie(cname) {
    const name = cname + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') { c = c.substring(1); }
        if (c.indexOf(name) == 0) { return c.substring(name.length, c.length); }
    }
    return "";
    }

    function accept() {
    setCookie('accepted', 'yes, I accept google analytics', 1000);
    cookiebanner.remove();
    gtag('config', trackingID, { 'anonymize_ip': true, 'allow_google_signals': false, 'allow_ad_personalization_signals': false });
    }

    function decline() {
    setCookie(disableString, 'true', 1000);
    cookiebanner.remove();
    }

    acceptBtn.addEventListener('click', accept);
    declineBtn.addEventListener('click', decline);

    if (getCookie(disableString) === 'true') {
    window[disableString] = true;
    cookiebanner.remove();
    } else if (getCookie('accepted') === 'yes, I accept google analytics') {
    accept();
    } else {
    setTimeout(() => { cookiebanner.classList.add('visible'); }, 3500);
    }
</script>
