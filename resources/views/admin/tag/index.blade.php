 @include('admin/layouts/admindefaultheader')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Tag</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Tag List</a></li>
                  <li class="breadcrumb-item active">Tag</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

  <div class="card">
      <div class="card-header">
         <div class="col-sm-6 float-left">
            <h3 class="card-title">Tag List</h3>
         </div>
         @can('posts.create', Auth::user())
         <div class="float-right">
            <a class='col-lg-offset-5 btn btn-success' href="{{ route('tag.create') }}">Add New</a>
         </div>
         @endcan
      </div>

            
      <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Sr. No</th>
                     <th>Tag Name</th>
                     <th>Tag Description</th>
                     <th>Tag Slug</th>
                     <th>Parent Tag</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($tags as $tag)
                  <tr>
                     <td>{{ $loop->index + 1}}</td>
                     <td>
                        <div class="col-sm">
                           {{ $tag->name }}
                        </div>
                        <div class="d-inline-block col-sm">
                           <div class="col-sm-5 float-left">
                              <a href="{{ route('tag.edit', $tag->id) }}">
                                 <p><i class="fa fa-pencil-square">
                                 edit</p></i>
                              </a>
                           </div>
                           <div class="col-sm-5 float-left">
                              <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" style="display: none;" method="post">
                                 @csrf
                                 @method('DELETE')
                              </form>
                              <a href="{{ route('tag.index') }}" onclick="
                              if(confirm('Are You Sure, You Want To Delete This?')){
                                 event.preventDefault();
                                 document.getElementById('delete-form-{{ $tag->id }}').submit();
                              }
                              else{
                                 event.preventDefault();
                              }">
                                 <p><i class="fa fa-trash-o">Delete</p></i>
                              </a>
                           </div>
                        </div>
                     </td>

                     <td>{{ $tag->description }}</td>
                     <td>{{ $tag->slug }}</td>
                     <td>N/A</td>
                  </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <th>Sr. No</th>
                     <th>Tag Name</th>
                     <th>Tag Description</th>
                     <th>Tag Slug</th>
                     <th>Parent Tag</th>
                  </tr>
               </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

</div>
 @include('admin/layouts/admindefaultfooter')  