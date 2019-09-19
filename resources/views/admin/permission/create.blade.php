@include('admin/layouts/admindefaultheader')

<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   	<section class="content-header">
      	<div class="container-fluid">
         	<div class="row mb-2">
            	<div class="col-sm-6">
               		<h1 class="m-0 text-dark">Permission</h1>
            	</div><!-- /.col -->

            	<div class="col-sm-6">
               		<ol class="breadcrumb float-sm-right">
                  		<li class="breadcrumb-item"><a href="#">Create New Permission</a></li>
                 		 <li class="breadcrumb-item active">Permission</li>
               		</ol>
            	</div><!-- /.col -->
         	</div><!-- /.row -->
      	</div><!-- /.container-fluid -->
   	</section>
   <!-- /.content-header -->

   <!-- general form elements -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-9">
               <div class="card card-primary card-info">
                  <div class="card-header">
                     <h3 class="card-title">Create Permission</h3>
                  </div>

                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route('permission.store')}}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="name">Permission Name</label>
                           <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Enter Permission Name">
                            @if ($errors->has('name'))
                              <span class="invalid-feedback">
                                 <strong>Permission {{ $errors->first('Permission Name') }}</strong>
                              </span>
                           @endif
                        </div>

                        <div class="form-group">
                           <label for="for">Permission for</label>
                           <select name="for" id="for" class="form-control">
                              <option selected disable>Select Permission for</option>
                              <option value="user">User</option>
                              <option value="post">Post</option>
                              <option value="other">Other</option>
                           </select>
                        </div>

                     </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>   
               </div>
         </div>
      </div>
   </section>      <!-- /.card --> 
</div>


@include('admin/layouts/admindefaultfooter')  