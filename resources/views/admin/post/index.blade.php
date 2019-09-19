 @include('admin/layouts/admindefaultheader')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Post</h1>
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
            <h3 class="card-title">Post List</h3>
         </div>

        @can('posts.create', Auth::user())
         <div class="float-right">
            <a class='col-lg-offset-5 btn btn-success' href="{{ route('post.create') }}">Add New</a>
         </div>
         @endcan
      </div>

            
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Sr. No</th>
                     <th>Post Title</th>
                     <th>Post Slug</th>
                     <th>Author</th>
                     <th>Categories</th>
                     <th>Created At</th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($posts as $post)
                  <tr>
                     <td>{{ $loop->index + 1}}</td>
                     <td>
                        <div class="col-sm">
                           {{ str_limit($post->title, 50) }}
                        </div>


                        @can('posts.update', Auth::user())
                        <div class="d-inline-block col-sm">
                           <div class="col-sm-6 float-left">
                              <a href="{{ route('post.edit', $post->id) }}">
                                 <p><i class="fa fa-pencil-square">
                                 edit</p></i>
                              </a>
                           </div>
                           @endcan

                           @can('posts.delete', Auth::user())
                           <div class="col-sm-6 float-left">
                              <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" style="display: none;" method="post">
                                 @csrf
                                 @method('DELETE')
                              </form>
                              <a href="{{ route('post.index') }}" onclick="
                              if(confirm('Are You Sure, You Want To Delete This?')){
                                 event.preventDefault();
                                 document.getElementById('delete-form-{{ $post->id }}').submit();
                              }
                              else{
                                 event.preventDefault();
                              }">
                                 <p><i class="fa fa-trash-o">Delete</p></i>
                              </a>
                           </div>
                           @endcan
                        </div>   
                     </td>
                     
                     <td>{{ $post->slug }}</td>
                     <td>{{ str_limit($user->firstname, 50) }} {{ str_limit($user->lastname, 50) }}</td>
                     <td>
                        @foreach ($post->categories as $category)
                           {{ $category->name }}
                        @endforeach
                     </td>
                     <td>{{ $post->created_at->format('jS F Y h:i:s A') }}</td>
                  </tr>
                  @endforeach
               </tbody>
               <tfoot>
                  <tr>
                     <th>Sr. No</th>
                     <th>Post Title</th>
                     <th>Post Slug</th>
                     <th>Author</th>
                     <th>Categories</th>
                     <th>Created At</th>
                  </tr>
               </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
 @include('admin/layouts/admindefaultfooter')  