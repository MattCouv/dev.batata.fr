<!DOCTYPE html>
{extends file="layout.tpl"}
{block name=body}
<form action="save-changes" method="post">
  <input type="text" name="title" value="">
  <input type="text" name="description">
  <input type="file" name="image">
</form>
{/block}
