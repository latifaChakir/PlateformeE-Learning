
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link id="pagestyle" href="/lib/material-dashboard.css?v=3.0.0" rel="stylesheet" /></head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('/images/téléchargement.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                    </div>
                @endif

                <form role="form" class="text-start" method="POST" action="{{ route('auth.register.post') }}">
                    @csrf

                    <div class="input-group input-group-outline my-3">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="Name">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label"></label>
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">S'inscrire</button>
                    </div>
                </form>

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="/login" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('.text-start');
        form.addEventListener("submit", function (event) {
            const nameInput = form.querySelector('input[name="name"]');
            const emailInput = form.querySelector('input[name="email"]');
            const passwordInput = form.querySelector('input[name="password"]');

            // Valider le nom
            if (!validateName(nameInput.value)) {
                alert("Veuillez entrer un nom valide (lettres et espaces uniquement).");
                event.preventDefault();
                return;
            }

            if (!validateEmail(emailInput.value)) {
                alert("Veuillez entrer une adresse email valide.");
                event.preventDefault();
                return;
            }

            if (!validatePassword(passwordInput.value)) {
                alert("Le mot de passe doit contenir au moins un caractère spécial et ne doit pas contenir d'espaces.");
                event.preventDefault();
                return;
            }

        });

        function validateName(name) {
            const regex = /^[a-zA-Z\s]+$/;
            return regex.test(name);
        }

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function validatePassword(password) {
            const regex = /^[\w@!#$%^&*()_+{}\[\]:;<>,.?~\\/-]+$/;
            return regex.test(password);
        }
    });
</script>

</body>

</html>
