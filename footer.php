<footer class="container-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy; 2021 || Designed By E-Learning || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a>  </small>
</footer>
<!-- End footer -->


<!-- start student Registration form -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="studRegModalCenter" tabindex="-1" aria-labelledby="studRegModalCenter" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studRegModalCenter">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <i class="fas fa-user"></i><label for="stuname"
    class="pl-2 font-weight-bold">Name</label><input type="text"
     class="form-control" placeholder="Name"
      name="stuname" id="stuname">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail"
    class="pl-2 font-weight-bold">Email</label><input type="email"
     class="form-control" placeholder="Email"
      name="stuemail" id="stuemail">
      <small class="form-text">We'll never share your email with anyone else</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass"
    class="pl-2 font-weight-bold">Password</label><input type="password"
     class="form-control" placeholder="Password"
      name="stupass" id="stupass">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Signup</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- End student Registration form -->

<!-- start student Login form -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="studLoginModalCenter" tabindex="-1" aria-labelledby="studLoginModalCenter" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studLoginModalCenter">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="stuLoginForm">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuLogemail"
    class="pl-2 font-weight-bold">Email</label><input type="email"
     class="form-control" placeholder="Email"
      name="stuLogemail" id="stuLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stuLogpass"
    class="pl-2 font-weight-bold">Password</label><input type="password"
     class="form-control" placeholder="Password"
      name="stuLogpass" id="stuLogpass">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End student Login form -->


<!-- start Admin Login form -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenter" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenter">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="adminLoginForm">
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="adminLogemail"
    class="pl-2 font-weight-bold">Email</label><input type="email"
     class="form-control" placeholder="Email"
      name="adminLogemail" id="adminLogemail">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass"
    class="pl-2 font-weight-bold">Password</label><input type="password"
     class="form-control" placeholder="Password"
      name="adminLogpass" id="adminLogpass">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- End Admin Login form -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>