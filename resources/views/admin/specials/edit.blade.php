<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit special</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->

    <div>
        <section class="m-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Edit special N° {{$special->id}}</h2>
            <div class="row">

                <!--Grid column-->
                <div class="mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" method="POST" action="/admin/specials/{{$special->id}}">
                        @method('patch')
                        @csrf
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input value="{{$special->name}}" type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="">Name</label>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-3">
                                <div class="md-form mb-0">
                                    <input value="{{$special->was_price}}" type="number" id="was_price" name="was_price" class="form-control" required>
                                    <label for="was_price" class="">Was price</label>
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-3">
                                <div class="md-form mb-0">
                                    <input value="{{$special->current_price}}" type="number" id="current_price" name="current_price" class="form-control"
                                        required>
                                    <label for="current_price" class="">Current Price</label>
                                </div>
                            </div>

                        </div>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea  type="text" id="description" name="description" rows="2" class="form-control md-textarea" required>{{$special->description}}</textarea>
                                    <label for="description">Description</label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input value="{{$special->brand}}" type="text" id="brand" name="brand" class="form-control" required>
                                    <label for="brand" class="">Brand</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <button class="btn btn-primary" type="submit">Edit special</button>
                        </div>
                        <!--Grid row-->

                    </form>

                    <!-- <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div> -->
                    <div class="status"></div>
                </div>
                <!--Grid column-->
            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
</body>

</html>
