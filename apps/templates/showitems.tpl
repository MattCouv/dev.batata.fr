<!DOCTYPE html>
{extends file="layout.tpl"}
{block name=body}
{foreach $items item=item}
	<div>
		<h1>{$item.title}</h1>
		<p>{$item.description}</p>
		<p>{$item.year}</p>
		<img src="http://i3.ytimg.com/vi/{$item.path}/mqdefault.jpg" alt="">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/{$item.path}" frameborder="0" allowfullscreen></iframe>
	</div>
{/foreach}
{/block}