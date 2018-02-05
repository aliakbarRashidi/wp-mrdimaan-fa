<?php 
 function dimaan_to_farsi( $text )
 {
 	$text = str_replace('0', '۰', $text);
	$text = str_replace('1', '۱', $text);
	$text = str_replace('2', '۲', $text);
	$text = str_replace('3', '۳', $text);
	$text = str_replace('4', '۴', $text);
	$text = str_replace('5', '۵', $text);
	$text = str_replace('6', '۶', $text);
	$text = str_replace('7', '۷', $text);
	$text = str_replace('8', '۸', $text);
	$text = str_replace('9', '۹', $text);
	$text = str_replace('(', '( ', $text);
	$text = str_replace(')', ' )', $text);
	$text = str_replace('December', 'دسامبر سال', $text);
	$text = str_replace('November', 'نوامبر سال', $text);
	$text = str_replace('October', 'اکتبر سال', $text);
	$text = str_replace('September', 'سپتامبر سال', $text);
	$text = str_replace('August', 'آگوست سال', $text);
	$text = str_replace('July', 'جولای سال', $text);
	$text = str_replace('June', 'ژوئن سال', $text);
	$text = str_replace('May', 'می سال', $text);
	$text = str_replace('April', 'آوریل سال', $text);
	$text = str_replace('March', 'مارس سال', $text);
	$text = str_replace('February', 'فوریه سال', $text);
	$text = str_replace('January', 'ژانویه سال', $text);
	return $text;
 }