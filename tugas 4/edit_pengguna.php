<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Pengguna</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <h2>Edit Pengguna</h2>
        <div class="container-fluid">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                    <div class="valid-feedback">
                        Bagus.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" required>
                        <option selected disabled value="">Choose</option>
                        <option>Admin</option>
                        <option>Staff</option>
                    </select>
                    <div class="invalid-feedback">
                        Pilih Role.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Password" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <div class="col-md-6">
                    <label for="telp" class="form-label">Telp</label>
                    <input type="tel" class="form-control" id="telp" name="telp" required>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="address" rows="3" required></textarea>
                </div>
                <div class="col-md-12">
                    <label for="formFile" class="form-label">Unggah foto</label>
                    <input class="form-control" type="file" id="formFile" required>
                </div>
                <div class="col-12 mt-4" >
                    <button class="btn btn-warning" type="submit">Simpan</button>
                </div>
            </form>
        </div>
            
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()    
        </script>
    </body>
</html>