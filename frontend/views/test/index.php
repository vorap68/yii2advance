<?php foreach ($list as $item): ?>


<h1><a href="/novosti/<?php echo $item['id'];?>"><?php echo $item['title']; ?></a><h1>
<p><?php echo $item['content']; ?></p>
<hr>
<?php endforeach; ?>

    
