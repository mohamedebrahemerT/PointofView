<?php

namespace Database\Seeders;

use App\Models\certificate;
use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $certificate = new certificate();
        $certificate->name = 'default';
        $certificate->content = '<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://learning.magic-chat.com/Forentend/css/icons.css">
    <link rel="stylesheet" href="https://learning.magic-chat.com/Forentend/css/style.css">
    <title>مؤسسة الغد أجمل</title>
</head>

<body>

<!--start top header-->

<!--end top header-->
<!--start header-->

<!--end header-->

<section class="p-5 bg-light login">
    <div class="container">
        <div class="row justify-content-center">
            <table class="cert">
                <tr>
                    <td align="center" class="crt_logo">
                        <img src="https://learning.magic-chat.com/Forentend/img/logo-footer.png" alt="logo">

                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <h1 class="crt_title">شهادة حضور
                            <h2>هذه الشهادة مقدمة للمتدرب</h2>
                            <h1 class="colorGreen crt_user">{$user_name}</h1>
                            <h3 class="afterName">على اكتمال {course_name$}
                            </h3>
                            <h3> {$course_date} </h3>
                        </h1>
                    </td>
                </tr>
                <tr class="tfooter">
                    <td align="center">
                        <h3>إسم المتدرب: {user_name$}</h3>
                        <h3>اسم القسم: {department_name$}</h3>
                        <h3>إسم الدورة: {course_name$}</h3>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</section>

<!--start footer-->

<!--end footer-->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://learning.magic-chat.com/Forentend/js/custome.js"></script>

</body>

</html>
';
        $certificate->save();
    }
}
