<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <style>
        body {

            background-image: url('Users/Public/Pictures/gambar_usim.jpg');
            background-size: cover;
            background-position: center;
            background-color: #f8f9fa;
            min-height: 100vh;
            z-index: -1;
        }

        .content {
            padding: 20px;
            color: #333;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #1e3788;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #9fb8da;
        }
        .btn {
            padding: 8px 16px;
            background-color: #1e3788;
            color: rgb(255, 255, 255);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0e250f;
        }
        .add-button {
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Course List</h2>
        <button class="btn add-button" onclick="redirectToCourseForm()">Add</button> <br></br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $courses = [
                    ["id" => 1, "name" => "Computer Forensic", "code" => "SKJ6789"],
                    ["id" => 2, "name" => "Network Security", "code" => "SKJ3443"],
                    ["id" => 3, "name" => "Programming", "code" => "SKJ2012"],
                    ["id" => 4, "name" => "Cyber Law", "code" => "SKJ4553"],
                    ["id" => 5, "name" => "Cryptography", "code" => "SKJ4032"]
                ];


                foreach ($courses as $course) {
                    echo "<tr>";
                    echo "<td>{$course['id']}</td>";
                    echo "<td>{$course['name']}</td>";
                    echo "<td>{$course['code']}</td>";
                    //echo "<td><button class='btn'>Edit</button> <button class='btn'>Delete</button></td>";
                    echo "<td><a href='editcourse.php?id={$course['id']}' class='btn'>Edit</a> <button class='btn'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function redirectToCourseForm() {
            window.location.href = "course/form.blade.php";
        }
    </script>
</body>
</html>