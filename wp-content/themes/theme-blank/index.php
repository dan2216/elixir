<?php get_header(); ?>
    <article class="newArticle">
        <h1>Nouveautés</h1>
        <div class="contentNewArticle">
          <div class="picsNews">
            <img src="<?php bloginfo('template_directory'); ?> /src/img/chemisier-rayures.jpg" alt="chemise rayures">
            <p>Chemisier à rayures  <br>Manche nouées</p>
            <span>39,95€</span>
          </div>
          <div class="picsNews">
            <img src="<?php bloginfo('template_directory'); ?> /src/img/trench-denim.jpg" alt="trench-denim.jpg">
            <p>Trench texturé denim</p>
            <span>89,85€</span>
          </div>
          <div class="picsNews">
            <img src=" <?php bloginfo('template_directory'); ?> /src/img/sandales-cuir-franges.jpg" alt="sandales">
            <p>Sandales en cuir à franges</p>
            <span>69,95€</span>
          </div>
          <div class="picsNews">
            <img src="<?php bloginfo('template_directory'); ?> /src/img/veste-longue-daim.jpg" alt="veste">
            <p>Veste longue en daim</p>
            <span>159,00€</span>
          </div>
        </div>
    </article>
    <article class="categoryArticle">
      <h1>Catégories les plus populaires</h1>
      <div class="contentCategoryArticle">
        <div class="categoryPics">
          <div>
            <h3>Chaussures</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/chaussures.png" alt="shoes category">
        </div>
        <div class="categoryPics">
          <div>
            <h3>Accessoires</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/accessoires.png" alt="">
        </div>
        <div class="categoryPics">
          <div>
            <h3>Sacs à main</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/sac-a-main.png" alt="">
        </div>
        <div class="categoryPics">
          <div>
            <h3>Robes</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/robes.png" alt="">
        </div>
        <div class="categoryPics">
          <div>
            <h3>Sport</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/sport.png" alt="">
        </div>
        <div class="categoryPics">
          <div>
            <h3>Vestes</h3>
            <p><a href="#">Voir toute la collection <img src="<?php bloginfo('template_directory'); ?> /src/img/fleche.png" alt=""></a></p>
          </div>
          <img src="<?php bloginfo('template_directory'); ?>/src/img/vestes-homme.png" alt="">
        </div>
      </div>
      <a id="categoryButtom" href="#">Voir toutes les catéCatégories</a>
    </article>

<?php get_footer(); ?>
