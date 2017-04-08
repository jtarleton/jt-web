<?php 

/* 
foreach($termObjs as $termObj): ?>
<li><?php echo $termObj->getName(); ?></li>
<?php endforeach; */ 

?>
<?php


$helper = new \Facebook\FacebookRedirectLoginHelper('http://www.jamestarleton.com/fbredirect');
$scopes=array('scope'=>'public_profile');
$loginUrl = $helper->getLoginUrl($scopes); ?>

<?php if(@$_SESSION['fbsess']): ?>


<b>March 8, 2015</b>
<p>Added a page for <a href="<?php echo url_for('@running'); ?>">running stuff</a>.</p>
<!-- 
<p>It includes HTML I'm hosting myself for an <a href="https://www.jamestarleton.com/arunnersplace ">article on Brian Pope</a> that seems to no longer be available on the web.  <i>Oxford American</i> wisely migrated their site from ColdFusion to PHP, but consequently some articles have now apparently <a href="http://www.oxfordamerican.org/index.php?option=com_content&view=article&id=493">vanished</a>, and a sloppy PHP developer is likely to blame.
</p>
i-->
<b>March 5, 2015</b>
<p>A useful MySQL query to list fields in a table.  
<!-- 
Writing database code to handle Create/Read/Update/Delete operations is tedious, especially for a MySQL database with lots of tables and lots of columns.

In a large application, you would often avoid touching the database driver directly, writing ugly SQL by hand for each table, over and over. This is where a data access layer, like Doctrine, comes in, as it can significantly reduce the amount of this kind of ugly SQL code:


$db = Database::getConnection();

$stmt2 = $db->prepare('insert into contracts(cid, date, description) values(:cid, :date, :description)');

$stmt->bindValue();
$stmt->execute();


But what if you're working on a small PHP script where you are expected to code all of the SQL and its execution from the ground up, using only PDO or the MySQL native driver.
 
In these cases, there is not much you can do to get out of writing the above code for every single field and every table.  But if you have even just 10 tables with 20 columns each, that's a ridiculously painful task.

So here is what I propose.

1. Run the below SQL on your DB.
2. Export CSV using phpMyAdmin.
3. Paste that comma-delimited result into my cool hideous PDO code generator.
4. Copy your PHP code, and paste into your project.
5. Voila.


-->
<blockquote>SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'my_database' AND TABLE_NAME = 'my_table'</blockquote>

</p>


<b>February 13, 2015</b>
<p>Added nice Smiths cover and a favorite Eric Johnson track to <?php echo link_to('music videos','@music'); ?>.
</p>

<b>February 4, 2015</b>
<p>
Added this <?php echo link_to('script','http://www.jamestarleton.com/wikipedia'); ?> which uses a cURL client to return a random Wikipedia link.  Here it is in <?php echo link_to('JSON','http://www.jamestarleton.com/wikipedia?format=json'); ?>.
</p>

<b>February 1, 2015</b>
<p>Working on getting this site talking to Facebook with their <a href="https://github.com/facebook/facebook-php-sdk-v4">PHP SDK</a>. If by chance you have a FB account, you may <?php echo link_to('try it out', $loginUrl); ?>.</a></p>

<b>January 31, 2015</b>
<p>As a learning exercise, implemented HTML support for Arabic, thanks to the amazing <?php echo link_to('Ar-PHP', 'http://ar-php.org'); ?> library.
</p>
<p>For example:
<blockquote style="font-family:Sans-serif; font-size:24px; letter-spacing:2px;"><?php echo $Ar->en2ar('If you can read this, you speak Arabic. Greetings from America. May peace be with you.'); ?></blockquote>
</p>
<p>If you look at the source HTML, you'll see the Arabic HTML is composed of plain text; not images, special CSS, nor numerical character references.  The above markup is just standard <?php echo link_to('Unicode', 'http://en.wikipedia.org/wiki/Unicode'); ?></a>, and the text has been somehow transliterated from English. Pretty neat!</p>

<br />
<b>January 25, 2015</b>
<p>In case any developer visitors want to know how I created the excellent and beautiful captcha on my <a href="http://www.jamestarleton.com/contact">contact form</a>, the PHP library used is known as <a href="http://php.net/manual/en/book.image.php">GD</a>. If you could use a captcha class, the <a href="https://gist.github.com/jtarleton/57e04a511fbed06dfc73">code</a> is on GitHub:  
</p>

<blockquote>git clone https://gist.github.com/57e04a511fbed06dfc73.git</blockquote>

<p>Along with GD, your PHP should also be configured with support for Freetype and T1Lib.  If you aren't sure if your server supports GD, you can always take a look at GD within the results of either these commands:</p>

<blockquote><?php echo htmlspecialchars('<?php'); ?> phpinfo(); <?php echo htmlspecialchars('?>'); ?></blockquote>

<blockquote>php -i</blockquote>

<p>Or you can use <a href="https://gist.github.com/jtarleton/6552394b4b474faf33fe">this handy GD testing script</a> from Dagon Design.  Here's <a href="http://www.jamestarleton.com/gdtest.php">mine</a> in action.  If you run this and see "Yes" next to JPEG support, Freetype, and T1Lib, you should be all set.</p>


<br />
<?php endif; ?>
<?php foreach($postObjs as $postObj): ?>
<b><?php echo $postObj->getPost_Title(); ?></b>
<i><?php echo $postObj->getPost_Date(); ?></i>
                <p><?php echo substr($postObj->getPost_Content(),0,200); ?></p>
<?php echo link_to('More', '@postdetail?id='. $postObj->getId()); ?>
<?php endforeach; ?>

