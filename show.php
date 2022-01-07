<?php

include("connect.php");

if (!empty($_POST)) {



    $fullname = $_POST["fullname"];

    $city = $_POST["city"];

    $address = $_POST["address"];

    $age = $_POST["age"];

    if ($_POST["sex"] == "male") {

        $sex = "مرد";
    } else {
        $sex = "زن";
    }

    switch ($_POST["education"]) {
        case "diplom":
            $education = "دیپلم";
            break;

        case "kardani":
            $education = "کاردانی";
            break;

        case "bachelor":
            $education = "لیسانس";
            break;

        case "master":
            $education = "ارشد";
            break;

        case "phd":
            $education = "دکترا";
            break;

        default:
            $education = "بیسواد";
    }






    $sql = "INSERT INTO user (fullname, age, city, address, sex ,education)
VALUES ('$fullname', '$age', '$city','$address','$sex','$education')";

    $conn->query($sql);
}



// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#filter").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#Table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <title>فرم استخدامی</title>
</head>

<body dir="rtl">

    <header>

        <?php include "header.php"; ?>

    </header>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h4 style="text-align: center;" class="text-primary">لیست فرم استخدامی </h4>

                <form class="d-flex mb-5">
                    <input class="form-control me-2" type="search" aria-label="Search" id="filter">
                    <button class="btn btn-outline-success" type="submit">فیلتر</button>
                </form>



                <table class="table table-success table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">نام و نام خانوادگی </th>
                            <th scope="col">سن</th>
                            <th scope="col">شهر</th>
                            <th scope="col">آدرس</th>
                            <th scope="col">جنسیت</th>
                            <th scope="col">مدرک تحصیلی</th>
                        </tr>
                    </thead>
                    <tbody id="Table">
                        <?php

                        $sql = "SELECT * FROM user ORDER BY id DESC";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {

                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['education']; ?></td>
                            </tr>
                        <?php }
                        $conn->close();
                        ?>
                    </tbody>
                </table>














            </div>



        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>