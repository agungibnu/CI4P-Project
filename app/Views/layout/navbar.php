 <!-- Boostrap Nav -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">

         <!-- untuk Akses dari xampp apache tulis base url nya -->
         <a class="navbar-brand" href="/">MY WEBSITES</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav ml-auto">
                 <a class="nav-item nav-link active" href="/">Home
                     <a class="nav-item nav-link" href="/pages/about">About</a>
                     <a class="nav-item nav-link" href="/pages/contact">Contact</a>
                     <a class="nav-item nav-link" href="/pengalaman">Pengalaman</a>
                     <a class="nav-item nav-link" href="/produk">Produk</a>

                     <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     login
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                     <a class="dropdown-item" href="/akun/admin">Admin</a>
                                     <a class="dropdown-item" href="/akun/user">User</a>

                                 </div>
                             </li>
                         </ul>
                     </div>
             </div>
         </div>
     </div>
 </nav>