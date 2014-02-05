<html>
<head>
   <?php echo $this->Html->charset(); ?>
   <?php
       echo $this->Html->css(CSS . 'pdf');
   ?>
   
</head>
<body>
   <div id="container">
       <div id="content">
           <?php echo $this->fetch('content'); ?>
       </div>
   </div>
</body>
</html>