<html>
    <head>
    <title>Add a Topic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Add a Topic</h1>
        <form method=post action="do_addpost.php">
            <p><strong>Name</strong><br>
            <input type="text" name="author" size=40 maxlength=150>
            <p><strong>Topic Title:</strong><br>
            <input type="text" name="post_title" size=40 maxlength=150>
            <p><strong>Post Text:</strong><br>
            <textarea name="post_text" rows=8 cols=40 wrap=virtual></textarea>
            <button type="submit" name="submit">Post</button>
        </form>
    </body>
</html>