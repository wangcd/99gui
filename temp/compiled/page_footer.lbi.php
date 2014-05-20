



<div id="footer" class="rs_footer">
<div class="sitewith rs_footer_ex">
<ul><li><div class="pic ex_pic1"></div>
<div class="ex_con"><strong>正品保障</strong><p>品牌厂商&nbsp;&nbsp;直接供货</p></div></li>
<li><div class="pic ex_pic2"></div>
<div class="ex_con"><strong>免运费</strong><p>全场免运费</p></div></li>
<li><div class="pic ex_pic3"></div>
<div class="ex_con"><strong>放心购</strong><p>洛阳市区内&nbsp;&nbsp;货到付款</p></div></li>
<li><div class="pic ex_pic4"></div>
<div class="ex_con"><strong>方便付款</strong><p>多种支付&nbsp;&nbsp;任您选择</p></div></li>
<li><div class="pic ex_pic5"></div>
<div class="ex_con"><strong>开箱验</strong><p>当场验货&nbsp;&nbsp;放心付款</p></div></li>
<li><div class="pic ex_pic6"></div>
<div class="ex_con"><strong>好服务</strong><p>20分钟&nbsp;&nbsp;限时送货</p></div></li></ul>
<div class="cl"></div></div>

<?php if ($this->_var['helps']): ?>
<div class="sitewith rs_fhwrap">
<div class="rs_footer_helps">
<ul>
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['foo']['iteration']++;
?>
<li><h3><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></h3>
<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<p><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></p>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></ul>
</div>
<div class="rs_footer_weixin">
	<img class="rs_f_wx_code" src="themes/red_two/images/weixin.jpg" />
	<div class="rs_f_wx_str">
		<h3 style="color:#B31D06;font-weight:bold;">营业时间：10：00 — 24：00</h3>
		<h3>玖櫃官方微信</h3>
		<p>微信扫描二维码，随时随地亲密接触，精彩活动，劲爆优惠触手可得！</p>
	</div>
</div>
<div class="cl"></div>
</div>


<?php endif; ?>


  <p class="ft_footer_link"> 
    <?php if ($this->_var['navigator_list']): ?> 
    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_12222600_1400557424');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_12222600_1400557424']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
    <a href="<?php echo $this->_var['nav_0_12222600_1400557424']['url']; ?>" 
    <?php if ($this->_var['nav_0_12222600_1400557424']['opennew'] == 1): ?> 
    target="_blank" 
    <?php endif; ?> 
    ><?php echo $this->_var['nav_0_12222600_1400557424']['name']; ?></a> 
    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
    | 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php endif; ?> 
  </p>
   
  <?php if ($this->_var['icp_number']): ?>
  <p><?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a></p>
  <?php endif; ?>
  
  <p> <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?></p>
  <p> <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $this->_var['im']; ?>&amp;site=<?php echo $this->_var['shop_name']; ?>&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_var['im']; ?>:50" alt="点击这里给我发消息" title="点击这里给我发消息"> <?php echo $this->_var['im']; ?></a>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/red_two/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/red_two/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
  <p><?php echo $this->_var['copyright']; ?></p>
  <p><?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?></p>
</div>

<div id="VjiaFooter" class="block">
  <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
  
  <div >
    <div class="links clearfix"> 
      <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php if ($this->_var['txt_links']): ?> 
      <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
  <div class="blank"></div>
  <?php endif; ?> 
</div>

<div class="ft_pic_link" id="footerbanner2LazyLoad"> <a href="#"><img src="themes/red_two/images/foot_img1.jpg"></a>| <a href="#"><img src="themes/red_two/images/foot_img2.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img3.jpg"></a>|<a><img src="themes/red_two/images/foot_img4.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img5.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img6.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img7.jpg"></a>|<a href="h#"><img src="themes/red_two/images/foot_img8.jpg"></a>|</div>


<div id="rk_kfbox">
	<div id="rk_kfbox_top">
		<img src="themes/red_two/images/rk_kfbox_top.gif">
		<div id="rk_kfbox_close">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	</div>
	<div id="rk_kfbox_main">
		<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
		<?php if ($this->_var['im']): ?>
		<div class="rk_kfbox_li">
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $this->_var['im']; ?>&amp;Menu=yes">
			<img border="0" src="themes/red_two/images/rk_kfbox_qq.gif" title="联系我们" align="absmiddle">
			联系我们
			</a>
		</div>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div>
		<img src="themes/red_two/images/rk_kfbox_bottom.gif">
	</div>
</div>