<?php

/**
  Retourne la commande de l'URL courante.
  @return string
 */
function get_command() {

  $url = parse_url( $_SERVER['REQUEST_URI'] );
 // debug ( $url, '$url' );
 // // traitement ajax?
 if ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) {
  return $url['query'];
  } else {
    $url =  str_replace( ROOT_URL, '', $url['path'] );
    // enlever le / éventuel au début
    $url  = str_replace( '/', '', $url);
    return $url;
  }
}

/**
  Redirige vers une commande.
  @param  string  la commande.
 */
function redirect( $url ) {

  header('Location: ' . ROOT . $url );
}

function switch_lang($lang)
{
  $cookie_value=$lang;
  setcookie(cookie_name, $cookie_value, time() + (86400 * 30));
}
/**
  Retourne le code de langue.
  @return string
 */
function get_lang() {
  // si le fichier de langue n'est pas trouvé, on le crée et sa valeur
  // est celle imposée par la constante LANG_DEFAULT
  if (!isset($_COOKIE[cookie_name]) || !is_lang_exist($_COOKIE[cookie_name]) ) {
    $l = LANG_DEFAULT;
    $cookie_value = $l;
    setcookie(cookie_name, $cookie_value, time() + (86400 * 30));// 86400 = 1 day
  }else{
    // lire le choix de la langue enregistrée dans le fichier
    $l = $_COOKIE[cookie_name];
  }
  return $l;
}

/**
  Retourne les messages associés au code de langue.
  Les messages sont placés dans un tableau associatif $TEXT.
 */
function get_lang_messages($lang) {
  global $TEXT;

  include LANGS_PATH . $lang . '.php';
}

/**
  Indique si la langue existe.
  @param  string  $lang2check  le nom de langue à évaluer
  @return boolean.
 */
function is_lang_exist($lang2check) {

  // lire toutes les langues
  $langs = explode(',', LANGS);
  foreach($langs as $lang) {
    if ($lang2check == trim($lang) ) {
      return true;
    }
  }
  return false;
}
?>
