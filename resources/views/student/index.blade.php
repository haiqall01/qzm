<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
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
            color: white;
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
        .edit-button,
        .delete-button {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student List</h2>
        <button class="btn add-button" onclick="redirectToStudentForm()">Add</button> <br></br>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Matric</th>
                    <th>Gender</th>
                    <th>Image Path</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $students = [
                    ["name" => "Haiqal Zulmi", "matric" => "ABC123", "gender" => "Male", "image_path" => "images/Haiqal_Zulmi.jpg"],
                    ["name" => "Faris Haziq", "matric" => "XYZ456", "gender" => "Male", "image_path" => "images/Faris_Haziq.jpg"],
                    ["name" => "Akmal Ali", "matric" => "DEF789", "gender" => "Male", "image_path" => "images/Akmal_Ali.jpg"],
                    ["name" => "Farisha Aina", "matric" => "GHI012", "gender" => "Female", "image_path" => "images/Farisha_Aina.jpg"],
                    ["name" => "Amirul hakim", "matric" => "JKL345", "gender" => "Male", "image_path" => "images/Amirul_Hakim.jpg"]
                ];


                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>{$student['name']}</td>";
                    echo "<td>{$student['matric']}</td>";
                    echo "<td>{$student['gender']}</td>";
                    echo "<td>{$student['image_path']}</td>";
                    echo "<td><a href='editstudent.php?id={$student['matric']}' class='btn edit-button'>Edit</a> <button class='btn delete-button'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function redirectToStudentForm() {
            window.location.href = "student/form.php";
        }
    </script>
</body>
</html>