@include('includes.header')

<body>
    @include('includes.navbar')
<div class="container mt-5">
    <form action="{{route('user.register')}}" method="post">
        @csrf
    <div class="row mt-5 justify-content-center">
            <div class="col-md-7">
                <div class="card shadow bg-white mt-5">
                    <h4 class="card-title text-center mt-3">Register</h4>
                     
                    <div class="card-body">
                      
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Email">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                            @error('name')
                                <p class="text-danger">*{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            @error('email')
                            <p class="text-danger">*{{$message}}</p>
                        @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            @error('password')
                            <p class="text-danger">*{{$message}}</p>
                        @enderror
                        </div><br />
                        <div class="text-center row">
                            <p class="text-success">Already Have An Acount?<span><a href="/login">sign in</a></span></p>
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="form-group">
                                <input type="submit"   class="btn btn-success p-3" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@include('includes.footer')

</body>

<script src="js/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJLYTOxVnGEeQUnh8h/LS1hljA59bf5/jCIKHVHQSXWz8bylfZ5Ct" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCWpB6BfRTt8kUFe1/1CrrKJc99x0U9ot" crossorigin="anonymous"></script>

<script>
  var loader=document.getElementById('pre-loader');
      
      window.addEventListener('load', function(){
          loader.style.display='none'
      })
  
</script>
 
</html>