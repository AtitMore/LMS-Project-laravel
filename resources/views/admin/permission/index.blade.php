 @include('admin/layouts/admindefaultheader')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Permission</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Permission List</a></li>
                  <li class="breadcrumb-item active">Permission</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

  <div class="card">
      <div class="card-header">
         <div class="col-sm-6 float-left">
            <h3 class="card-title">Permission List</h3>
         </div>
         <div class="float-right">
            <a class='col-lg-offset-5 btn btn-success' href="{{ route('permission.create') }}">Add New</a>
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
                     <th>Permission Name</th>
                     <th>Permission For</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($permissions as $permission)
                  <tr>
                     <td>{{ $loop->index + 1}}</td>
                     <td>
                        <div class="col-sm">
                           {{ $permission->name }}
                        </div>
                        <div class="d-inline-block col-sm">
                           <div class="col-sm-5 float-left">
                              <a href="{{ route('permission.edit', $permission->id) }}">
                                 <p><i class="fa fa-pencil-square">
                                 edit</p></i>
                              </a>
                           </div>
                           <div class="col-sm-5 float-left">
                              <form id="delete-form-{{ $permission->id }}" action="{{ route('permission.destroy', $permission->id) }}" style="display: none;" method="post">
                                 @csrf
                                 @method('DELETE')
                              </form>
                              <a href="{{ route('permission.index') }}" onclick="
                              if(confirm('Are You Sure, You Want To Delete This?')){
                                 event.preventDefault();
                                 document.getElementById('delete-form-{{ $permission->id }}').submit();
                              }
                              else{
                                 event.preventDefault();
                              }">
                                 <p><i class="fa fa-trash-o">Delete</p></i>
                              </a>
                           </div>
                        </div>
                     </td>
                     <td>{{ $permission->for }}</td>
                  </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <th>Sr. No</th>
                     <th>Permission Name</th>
                     <th>Permission For</th>
                  </tr>
               </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

</div>
 @include('admin/layouts/admindefaultfooter')  