<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.scss">
</head>

<div class="row justify-content-center">
    <button class="btn btn-primary w-25 mt-3" data-bs-toggle="modal" data-bs-target="#ex">LOGIN</button>
</div>

<div class="modal fade" id="ex">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">LOGIN</h2>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-outline mb-3">
                        <label for="" class="form-label">User name</label>
                        <input type="text" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input" id="check1" checked>
                        <label for="" class="form-check-label">Remember Me</label>
                    </div>
                    <div class="button">
                        <button class="btn btn-primary w-100">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>