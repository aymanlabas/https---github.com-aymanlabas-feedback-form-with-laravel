<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Send-feedback</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-by-Moorcam.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="shadow contact-clean" style="background: rgb(3,77,139);">
        <form class="bg-light border rounded border-secondary shadow-lg"    action="{{ route('view.create') }}"   method="post"  style="background: rgb(248,248,249);">
            @csrf
            <h2 class="text-center"> Send feedback</h2>
            <div class="form-group mb-3"><label for="name" ><b>Name:</b></label><input class="form-control" type="text" name="name" placeholder="Name" required></div>
            <div class="form-group mb-3"><label for="phone"><b>Phone:</b></label><input class="form-control" type="text" name="phone" placeholder="Phone" inputmode="tel" required></div>
            <div class="form-group mb-3"><label for="email"><b>Email:</b></label><input class="form-control" type="email" name="email" placeholder="Email" required></div>
            <div class="form-group mb-3"><label for="message"><b>message</b></label><textarea class="form-control" name="message" placeholder="Message" rows="14"required></textarea></div>
            <div class="form-group mb-3"><button class="btn btn-danger" type="submit">Send </button></div>
            <div class="form-group mb-3">
                <p class="text-center text-info " style="font-size: 12px;">Copyright © 2023 LABAS.AYMAN.All Rights Reserved.</p>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>