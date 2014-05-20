<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="101BL v2.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.8.3.min.js,jquery.json-2.4.min.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header1.lbi'); ?>


<div class="block clearfix">
  
  <div class="AreaL">
    
<?php echo $this->fetch('library/category_tree.lbi'); ?>
<?php echo $this->fetch('library/history.lbi'); ?>



    
  </div>
  
  
  <div class="AreaR">

  <?php echo $this->fetch('library/ur_here_rs.lbi'); ?>
	 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
      

  <?php echo $this->fetch('library/search.lbi'); ?>      
        
		<div class="blank"></div>
	  <?php endif; ?>
	 
   
<?php echo $this->fetch('library/goods_list.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>



  </div>  
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
