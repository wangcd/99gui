<style>
.bor{
	border:1px solid;
}
.fl{
	float:left;
}
a{
	text-decoration:none;
	color:#555555;
}
.show_article_list{
	margin:auto;
	width:1200px;
}
.article_list_bg{
	width:1200px;
	height:36px;
	
	background:url(themes/red_two/images/act_bg.png) no-repeat;
}
.inde_pzdd_more{
	text-align:right;
	width:50px;
	height:36px;
	font-size:12px;
	margin-left:335px;
	line-height:36px;
	display:inline;
	float:left;
}
.inde_pzdd_more a{
	color:#FFF;
	text-decoration:none;
}
.article_list_content{
	width:1198px;
	height:270px;
	border-right-width:1px;
	border-bottom-width:1px;
	border-left-width:1px;
	border-right-style:solid;
	border-bottom-style:solid;
	border-left-style:solid;
	border-right-color:#e6e6e6;
	border-bottom-color:#e6e6e6;
	border-left-color:#e6e6e6;
}
.article_list_main{
	width:375px;
	height:302px;
	padding-left:20px;
}
.article_list_main p{
	font-size:12px;
	height:28px;
	width:360px;
	line-height:27px;
	border-bottom:1px dashed #cccccc;
}
.article_list_main p span{
	float:right;
	color:#adacac;
}
</style>
    	<div class="article_list_main fl">
        <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
            	<p><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo sub_str($this->_var['article_item']['short_title'],13); ?></a><span><?php echo $this->_var['article_item']['add_time']; ?></span></p>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>          
        </div>

