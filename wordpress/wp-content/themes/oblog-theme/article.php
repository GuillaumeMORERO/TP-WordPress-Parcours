<?php get_header(); ?>

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-12">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title">Ivre, il refait tous les challenges en un week-end sans dormir.</h2>
            <p class="infos">
              Posté par <a href="#" class="card-link">Anthony</a> le <time>13/07/2017</time> dans <a href="category.html" class="card-link">#MaVieDeDev</a>
            </p>
            <p class="card-text">Ou comment j'ai appris plein de choses en faisant une nouvelle fois tous les
              challenges que j'avais loupé.</p>
          </div>
        </article>
        
      </main>
      <?php get_footer(); ?>