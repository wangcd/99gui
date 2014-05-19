	<div class="cl pt8"></div>
	<div class="wrap cl">
		<div class="sitewith footer">
			<div class="fullbox box-border">
				<div class="box-tit catebox-tit">
					<h2><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></h2>
					<a class="tit_more" href="<?php echo $this->_var['goods_cat']['url']; ?>">更多</a>
				</div>
				<div class="box-dl">
					<div class="catebox-l">
						<div class="fl JQ_cat_ad"><div style="width:220px;height:287px;"></div></div>
					</div>
					<ul class="goodslist catebox-r">
						<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_06390800_1400487519');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_06390800_1400487519']):
?>
						<li>
							<div class="gl-img">
								<a href="<?php echo $this->_var['goods_0_06390800_1400487519']['url']; ?>">
									<?php if ($this->_var['goods_0_06390800_1400487519']['discount_rate'] > 0): ?>
									<b class="gl-water"><?php echo $this->_var['goods_0_06390800_1400487519']['discount_rate']; ?>折</b>
									<?php endif; ?>
									<img style="border:none;" alt="<?php echo htmlspecialchars($this->_var['goods_0_06390800_1400487519']['name']); ?>" src="<?php echo $this->_var['goods_0_06390800_1400487519']['thumb']; ?>">
								</a>
								<?php if (! empty ( $this->_var['goods_0_06390800_1400487519']['brief'] )): ?>
								<div class="gl-abst-disc"><p><?php echo $this->_var['goods_0_06390800_1400487519']['brief']; ?></p></div>
								<?php endif; ?>
							</div>
							<div class="gl-name-p">
								<div class="gl-name"><a href="<?php echo $this->_var['goods_0_06390800_1400487519']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_06390800_1400487519']['name']); ?></a></div>
								<div class="gl-price">
									<span class="gl-p-l"><b>
									<?php if ($this->_var['goods_0_06390800_1400487519']['promote_price'] != ""): ?>
									<?php echo $this->_var['goods_0_06390800_1400487519']['promote_price']; ?>
									<?php else: ?>
									<?php echo $this->_var['goods_0_06390800_1400487519']['shop_price']; ?>
									<?php endif; ?>
									</b></span>
									<span class="gl-p-r"><del><?php echo $this->_var['goods_0_06390800_1400487519']['market_price']; ?></del></span>
								</div>
							</div>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>