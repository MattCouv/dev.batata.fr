<!DOCTYPE html>
{extends file="layout.tpl"}
{block name=body}
<form action="save-item" method="post" class="form">
  <p><label>Titre <input type="text" name="title"></label></p>
  <p><label>Description <input type="text" name="description"></label></p>
  <p><label>Année <input type="text" name="year"></label></p>
  <p><label>type <input type="text" name="type"></label></p>
  <p><label>Lien de la vidéo <input name="path"></label></p>
  <button type="submit">submit</button>
</form>
{/block}
