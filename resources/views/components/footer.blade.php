
<footer class="site-footer footer-dark bg-dark text-light">
<div class="container">
    <div class="row text-center py-4">

    <div class="col-md-4">
    Over ons <br>
    <a href="/over-ons">Informatie over onze website en wat je hier kunt vinden.</a>
    </div>

    <div class="col-md-4">
    Contact <br>
    E-mail: info@example.nl <br>
    <a href="{{ route('contact') }}">Contactpagina</a>
    </div>

    <div class="col-md-4">
    Volg ons <br>
    <a href="https://www.instagram.com">Instagram</a> <br>
    <a href="https://www.facebook.com">Facebook</a> <br>
    <a href="https://www.linkedin.com">LinkedIn</a>
    </div>

    <div class="text-center py-3 border-top" style="width: 100%;">
        ©2017-{{ date('Y') }} {{ __('misc.copyright') }}
        </div>
    </div>
</footer>
<!-- Vervang het statische jaartal door het huidige jaar (2026). -->


<!-- analytics code -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NH1EGXC1ME"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NH1EGXC1ME');
</script>

<!--new analytics code-->

<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript">

 if (top.location!= self.location) {
  top.location = self.location.href
 }

</script>
