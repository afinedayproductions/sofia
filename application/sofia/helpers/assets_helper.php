<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url() . 'assets/sofia/css/' . $nom . '.css';
	}
}

if ( ! function_exists('docs_url'))
{
	function docs_url($nom)
	{
		return base_url() . 'assets/sofia/docs/' . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url() . 'assets/sofia/img/' . $nom;
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url() . 'assets/sofia/js/' . $nom . '.js';
	}
}

if ( ! function_exists('upload_url'))
{
	function upload_url($nom)
	{
		return base_url() . 'assets/sofia/uploads/' . $nom ;   
	}
}