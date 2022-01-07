<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>فرم استخدامی</title>
    </head>

    <body dir="rtl">

        <header>


       <?php include "header.php"; ?>


        </header>


        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <form class="row g-3" method="POST" action="show.php">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="inputEmail4" name="fullname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">سن</label>
                            <input type="number" class="form-control" id="inputPassword4" name="age">
                        </div>

                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">شهر</label>
                            <input type="text" class="form-control" id="inputCity" name="city">
                        </div>

                        <div class="col-6">
                            <label for="inputAddress" class="form-label">آدرس</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" >
                        </div>

                        <div class="col-6">
                            <label for="inputState" class="form-label">جنسیت</label>
                            <select id="inputState" class="form-select" name="sex">
                                <option value="male" >مرد</option>
                                <option value="female"  >زن</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <label for="inputState" class="form-label">مدرک تحصیلی</label>
                            <select id="inputState" class="form-select" name="education">
                                <option value="diplom">دیپلم</option>
                                <option value="kardani">کاردانی</option>
                                <option value="bachelor">لیسانس</option>
                                <option value="master">ارشد</option>
                                <option value="phd">دکترا</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">ثبت</button>
                        </div>
                    </form>

                </div>



            </div>
        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>



    </body>

</html>