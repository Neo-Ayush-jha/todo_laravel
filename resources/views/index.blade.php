<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container mx-5">
            <a href="" class="navbar-brand">TOODo</a>
            <ul class="navbar-nav">
                {{-- ====================================== --}}
                <li class="nav-item ms-4 me-5">
                    <a class="nav-link" href="#">
                         <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <span > Login here</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark fs-3" id="exampleModalLabel">Create ToDo</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <form action="" method="post">
                    @csrf 
                        @csrf
                        <div class="mb-3">
                            <div class="form-floating border-1 border-secondary">
                                <input type="text" placeholder="Title" name="title" class="form-control">
                                <label for="">Title</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating border-2 border-warning">
                                <input type="text" placeholder="Description" name="description" class="form-control">
                                <label for="">Description</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input   type="checkbox" name="status" value="1" onclick="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="submit" id="" class="btn btn-danger text-dark underline hover:decoration-dashed">
                    </div>   
                </form>
            </div>
        </div>
    </div>
</div>

                    </a>
                  </li>
                {{-- ========================================================= --}}
            </ul>
        </div>
    </nav>
   <div class="container">
       <div class="row">
           <div class="col-10 mx-auto mt-3">
            <div class="panel-body"> 

                <table class="table table-bordered"> 
      
                    <thead> 
      
                       <tr> 
      
                          <th>ID</th> 
      
                          <th>TITLE</th> 
      
                          <th>Description</th> 
                          <th>Status</th> 
      
                       </tr>  
      
                    </thead> 
      
                    <tbody> 
      
                       @foreach($data as $user) 
      
                          <tr> 
      
                              <td class="fw-bold">{{$user->id}}</td> 
                              <td>{{ $user->title }}</td> 
                             <td>{{ $user->description }}</td> 
                            <td>          <input class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '1' }}>
                            </td>
      
                          </tr> 
      
                       @endforeach 
      
                    </tbody> 
      
                </table> 
      
              </div> 
           </div>
       </div>
   </div>
   

   
</body>
</html>