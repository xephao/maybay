<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta property="og:url"           content="{$server_url}/{$cur_mod}/d/{if $cur_mod eq 'project'}{$list_get_record_pro.project_seo_link}{elseif $cur_mod eq 'product'}{$list_get_record_pro.product_seo_link}{else}{$list_get_record_article.article_seo_link}{/if}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Vé máy bay" />
<meta property="og:description"   content="{if $cur_mod eq 'project'}{$list_get_record_pro.project_desc}{elseif $cur_mod eq 'product'}{$list_get_record_pro.product_desc}{else}{$list_get_record_article.article_desc}{/if}" />
<meta property="og:image"         content="{if $cur_mod eq 'project'}{$list_get_record_pro.photo_url}{elseif $cur_mod eq 'product'}{$list_get_record_pro.photo_url}{else}{$list_get_record_article.photo_url}{/if}" />