<?php
  /**
   * template name: invite
   * Template Post Type:  invites
   */



//OBLIGATOIRE : Récupère les variables globales de Wordpress
  $context = Timber::get_context();

// on récupère le contenu du post actuel grâce à TimberPost
  $post = new TimberPost();

// on ajoute la variable post (qui contient le post) à la variable
// qu'on enverra à la vue twig
  $context['post'] = $post;

  $args_contacts =[
    'post_type' => 'contacts',
  ];
  //// récupère les articles en fonction du tableau d'argument $args_posts
//// en utilisant la méthode de Timber get_posts
//// puis on les enregistre dans l'array $context sous la clé "posts"

  $context['contacts'] = Timber::get_posts($args_contacts);
  $context['url'] = $_SERVER["REQUEST_URI"];


// appelle la vue twig "template-spectacles.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
  Timber::render('/pages/page-614.twig', $context);
