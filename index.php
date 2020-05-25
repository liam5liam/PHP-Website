<?php
	require 'classes/Database.php';

	$database = new Database;
	$post = filter_input_array(INPUT_POST);

	if ($_POST['delete']){
		$delete_id = $_POST['delete_id'];
		$database->query('DELETE FROM posts WHERE id = :id');
		$database->bind(':id', $delete_id);
		$database->execute();
	}
	if($_POST['submit']){
		$id = $post['id'];
		$title = $post['title'];
		$body = $post['body'];
		
		$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
		$database->bind(':id', $id);
		$database->bind(':title', $title);
		$database->bind(':body', $body);
		$database->execute();
		if($database->lastInsertId()){
			echo '<p>Post Added</p>';
		}
	}

	$database->query('SELECT * FROM posts');
	$rows = $database->resultset();
?>



	<h1>Add Post</h1>
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<label>Post ID</label><br />
		<input type="text" name="id" placeholder="Specify ID" /><br />
		<label>Post Title</label><br />
		<input type="text" name="title" placeholder="Add a Title..." /><br />
		<label>Post Body</label><br />
		<textarea name="body"></textarea>
		<input type="submit" name="submit" value="Submit" />
	<div>
	<h1>Posts</h1>
	<?php foreach($rows as $row): ?>
		<div>
			<h3><?php echo $row['title']; ?></h3>
			<p><?php echo $row['body']; ?><p>
			<br />
			<form method='post' action="<?php $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
				<input type="submit" name="delete" value="Delete" />
			</form>
		</div>
	<?php endforeach; ?>
	</div>
