<?php

	$title='Cascade - Personal vCard Template';

	$options=array
	(
		'openStart'			=>	'',
		'title'				=>	$title,
		'meta'				=>	array
		(
			'keywords'		=> '',
			'description'	=> ''
		),
		'twitter'			=>	array
		(
			'name'			=>	'quanticalabs',
			'count'			=>	10
		)
	);	

    $page=array
    (
        'about'				=>   array
		(
			'js'			=>	'page-1.js',
			'tab'			=>	'tab-1',
			'html'			=>	'page-1.html',
			'main'			=>	1,
			'title'			=>	$title.' - About Page'
		),
        'portfolio'			=>   array
		(
			'js'			=>	'page-2.js',
			'tab'			=>	'tab-2',
			'html'			=>	'page-2.html',
			'main'			=>	1,
			'title'			=>	$title.' - Portfolio Page'
		),
        'resume'			=>   array
		(
			'js'			=>	'page-3.js',
			'tab'			=>	'tab-3',
			'html'			=>	'page-3.html',
			'main'			=>	1,
			'title'			=>	$title.' - Resume Page'
		),
		'interests'			=>   array
		(
			'js'			=>	'page-4.js',
			'tab'			=>	'tab-4',
			'html'			=>	'page-4.html',
			'main'			=>	1,
			'title'			=>	$title.' - Interests Page'
		),
        'contact'			=>   array
		(
			'js'			=>	'page-5.js',
			'tab'			=>	'tab-5',
			'html'			=>	'page-5.php',
			'main'			=>	1,
			'title'			=>	$title.' - Contact Page'
		)
    );

?>