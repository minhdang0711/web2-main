<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web2-main/resources/css/style.css">
    <title>Document</title>
</head>

<body class="container">
    <form class="box form-box" action="/feedback" method="post" enctype="multipart/form-data">
        <div class="field input">
            <label for="student_id">Mã sinh viên:</label>
            <input type="text" name="student_id" id="student_id" required>
        </div>

        <div class="field input">
            <label for="feedback">Ý kiến đóng góp:</label>
            <textarea name="feedback" id="feedback" rows="1" required></textarea>
        </div>

        <div class="field input">
            <label for="image">Chèn hình ảnh:</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="field input">
            <label for="word_file">Chèn file Word:</label>
            <input type="file" name="word_file" id="word_file">
        </div>

        <div class="field submit">
            <button type="submit">Gửi ý kiến</button>
        </div>
    </form>

</body>

</html>