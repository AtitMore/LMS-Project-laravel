 @include('admin/layouts/admindefaultheader')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">User</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Post List</a></li>
                  <li class="breadcrumb-item active">Post</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

  <div class="card">
      <div class="card-header">
         <div class="col-sm-6 float-left">
            <h3 class="card-title">User List</h3>
         </div>
         <div class="float-right">
            <a class='col-lg-offset-5 btn btn-success' href="{{ route('user.create') }}">Add New</a>
         </div>
      </div>

      @if (session()->has('message'))
         <p class="alert alert-success">{{ session('message') }}</p>
      @endif

            
      <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Sr. No</th>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Roles</th>
                     <th>Status</th>
                     <th>Email</th>
                     <th>Post</th>
                     <th>Created At</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($users as $user)
                  <tr>
                     <td>{{ $loop->index + 1}}</td>
                     <td>
                        <div class="col-sm">
                           {{ str_limit($user->firstname, 50) }} {{ str_limit($user->lastname, 50) }}
                        </div>

                        <div class="d-inline-block col-sm">
                           <div class="col-sm-6 float-left">
                              <a href="{{ route('user.edit', $user->id) }}">
                                 <p><i class="fa fa-pencil-square">
                                 edit</p></i>
                              </a>
                           </div>

                           <div class="col-sm-6 float-left">
                              <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" style="display: none;" method="post">
                                 @csrf
                                 @method('DELETE')
                              </form>
                              <a href="{{ route('user.index') }}" onclick="
                              if(confirm('Are You Sure, You Want To Delete This?')){
                                 event.preventDefault();
                                 document.getElementById('delete-form-{{ $user->id }}').submit();
                              }
                              else{
                                 event.preventDefault();
                              }">
                                 <p><i class="fa fa-trash-o">Delete</p></i>
                              </a>
                           </div>
                        </div>   
                     </td>
                     
                     <td>{{ $user->username }}</td>
                     <td>
                        @foreach ($user->roles as $role)
                           {{ $role->name }},
                        @endforeach
                     </td>
                     <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                     <td>{{ $user->email }}</td>
                     <td>N/A</td>
                     <td>{{ $user->created_at->format('jS F Y h:i:s A') }}</td>
                  </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <th>Sr. No</th>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Roles</th>
                     <th>Status</th>
                     <th>Email</th>
                     <th>Post</th>
                     <th>Created At</th>
                  </tr>
               </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

</div>
 @include('admin/layouts/admindefaultfooter')  