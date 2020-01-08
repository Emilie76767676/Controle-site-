<header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<h1 class="titresite">
  <span class="letters letters-1">Recherche</span>
  <span class="letters letters-2">De</span>
  <span class="letters letters-3">Stage!</span>
</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <nav>
    <ul>
      <li><a href="index.php?page=accueil" title="Page d'accueil">Accueil</a></li>
      <li>
        <a href="index.php?page=presentation" title="Presentation">Presentation</a></li>
      <li>
        <a href="index.php?page=cv" title="CV">Mon CV</a></li>
      <li>
        <a href="index.php?page=contact" title="Nous contacter">Contact</a></li>
      <li>
        <a href="index.php?page=mentions" title="Les mentions légales">Mentions légales</a></li>
    </ul>
  </nav>
</header>
<script type="text/javascript">
var titresite = {};
titresite.opacityIn = [0,1];
titresite.scaleIn = [0.2, 1];
titresite.scaleOut = 3;
titresite.durationIn = 800;
titresite.durationOut = 600;
titresite.delay = 500;

anime.timeline({loop: true})
.add({
  targets: '.titresite .letters-1',
  opacity: titresite.opacityIn,
  scale: titresite.scaleIn,
  duration: titresite.durationIn
}).add({
  targets: '.titresite .letters-1',
  opacity: 0,
  scale: titresite.scaleOut,
  duration: titresite.durationOut,
  easing: "easeInExpo",
  delay: titresite.delay
}).add({
  targets: '.titresite .letters-2',
  opacity: titresite.opacityIn,
  scale: titresite.scaleIn,
  duration: titresite.durationIn
}).add({
  targets: '.titresite .letters-2',
  opacity: 0,
  scale: titresite.scaleOut,
  duration: titresite.durationOut,
  easing: "easeInExpo",
  delay: titresite.delay
}).add({
  targets: '.titresite .letters-3',
  opacity: titresite.opacityIn,
  scale: titresite.scaleIn,
  duration: titresite.durationIn
}).add({
  targets: '.titresite .letters-3',
  opacity: 0,
  scale: titresite.scaleOut,
  duration: titresite.durationOut,
  easing: "easeInExpo",
  delay: titresite.delay
}).add({
  targets: '.titresite',
  opacity: 0,
  duration: 500,
  delay: 500
});
</script>
