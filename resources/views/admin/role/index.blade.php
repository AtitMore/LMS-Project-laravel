 @include('admin/layouts/admindefaultheader')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Role</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Role List</a></li>
                  <li class="breadcrumb-item active">Role</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

  <div class="card">
      <div class="card-header">
         <div class="col-sm-6 float-left">
            <h3 class="card-title">Role List</h3>
         </div>
         <div class="float-right">
            <a class='col-lg-offset-5 btn btn-success' href="{{ route('role.create') }}">Add New</a>
         </div>
      </div>

            
      <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Sr. No</th>
                     <th>Role Name</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($roles as $role)
                  <tr>
                     <td>{{ $loop->index + 1}}</td>
                     <td>
                        <div class="col-sm">
                           {{ $role->name }}
                        </div>
                        <div class="d-inline-block col-sm">
                           <div class="col-sm-5 float-left">
                              <a href="{{ route('role.edit', $role->id) }}">
                                 <p><i class="fa fa-pencil-square">
                                 edit</p></i>
                              </a>
                           </div>
                           <div class="col-sm-5 float-left">
                              <form id="delete-form-{{ $role->id }}" action="{{ route('role.destroy', $role->id) }}" style="display: none;" method="post">
                                 @csrf
                                 @method('DELETE')
                              </form>
                              <a href="{{ route('role.index') }}" onclick="
                              if(confirm('Are You Sure, You Want To Delete This?')){
                                 event.preventDefault();
                                 document.getElementById('delete-form-{{ $role->id }}').submit();
                              }
                              else{
                                 event.preventDefault();
                              }">
                                 <p><i class="fa fa-trash-o">Delete</p></i>
                              </a>
                           </div>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <th>Sr. No</th>
                     <th>Role Name</th>
                  </tr>
               </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

</div>
 @include('admin/layouts/admindefaultfooter')  