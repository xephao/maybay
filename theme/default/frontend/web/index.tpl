<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hệ Thống vé máy bay TRUST.vn</title>
	

	{include file="frontend/web/includes/general_css.tpl"}
	{include file="frontend/web/includes/general_scripts.tpl"}
</head>
<!-- //Head -->
<!-- Body -->
<body>
	{if $cur_mod eq ""}
	{include file="frontend/web/pages/home/index.tpl"}
	{elseif $cur_mod eq "post"}
	{if $cur_act eq "d"}
	{include file="frontend/web/pages/post/detail/index.tpl"}
	{else}
	{include file="frontend/web/pages/post/list/index.tpl"}
	{/if}
	{elseif $cur_mod eq "booking"}
	{if $cur_act eq "step1"}
	{include file="frontend/web/pages/booking/search/index.tpl"}
	{elseif  $cur_act eq "step2"}
	{include file="frontend/web/pages/booking/aboutguest/index.tpl"}
	{elseif  $cur_act eq "step3"}
	{include file="frontend/web/pages/booking/pay/index.tpl"}
	{/if}
	{else}
	{include file="frontend/web/pages/news/index.tpl"}
	{/if}

	

</body>

</html>

{literal}

{/literal}